module.exports = function(grunt) {

	"use strict";

	var rjsModules = [],
		config,
		useRSync = grunt.file.exists("../../../.rsync-config");

	require("jit-grunt")(grunt, {
		scsslint: "grunt-scss-lint"
	});
	require("time-grunt")(grunt);

	grunt.file.recurse("assets/js/main/", function(abs, root, sub, file){
		if (file.match(/\.js$/i)) {
			rjsModules.push({"name": file.replace(/\.js/i, "")});
		}
	});

	config = {
		paths: {
			rjs: {
				bower: "../../../bower_components"
			},
			rsync: {
				output: null
			}
		},
		syncModules: [
			// "scroll",
			// "enquire",
			// "validator",
			// "validatorMessages",
			// "validatorRules",
			// "validatorMask"
		],
		requirejs: {
			"main": {
				"options": {
					"baseUrl": ".",
					"appDir": "assets/js/main",
					"dir": "assets/js/dist",
					"generateSourceMaps": true,
					"paths": {
						"lib": "../lib",
						"mod": "../modules",
						"wrp": "../wrappers",
						"jquery": "<%=paths.rjs.bower%>/jquery/jquery",
						"almond": "<%=paths.rjs.bower%>/almond/almond"
					},
					"optimize": "none",
					"modules": rjsModules,
					"onBuildRead": function(mod, path, content) {
						if (config.syncModules.indexOf(mod) > -1) {
							return "queue(function(){\n" + content + "\n});";
						}
						return content;
					}
				}
			}
		},
		uglify: {
			"main": {
				"options": {
					"sourceMap": true,
					"sourceMapIncludeSources": true,
					"sourceMapIn": function(source) {
						return source + ".map";
					},
					"preserveComments": false
				},
				"files": [{
					"expand": true,
					"cwd": "assets/js/dist",
					"src": ["**/*.js"],
					"dest": "assets/js/dist",
					"ext": ".js"
				}]
			}
		},
		sass: {
			"main": {
				"options": {
					"style": "compressed",
					"loadPath": "bower_components",
					"sourcemap": "inline",
					"update": true,
					"bundleExec": true
				},
				"files": [{
					"expand": true,
					"cwd": "assets/sass/output",
					"src": ["**/*.scss"],
					"dest": "assets/css",
					"ext": ".css"
				}]
			}
		},
		scsslint: {
			main: [
				"assets/sass/**/*.scss"
			],
			options: {
				bundleExec: true,
				colorizeOutput: true
			}
		},
		jshint: {
			options: grunt.file.readJSON("../../../.jshintrc"),
			main: [
				"gruntfile.js",
				"assets/js/**/*.js",
				"!assets/js/dist/**/*.js"
			]
		},
		exec: {
			"npm": "npm prune && npm install",
			"bower": "bower prune && bower install",
			"bundle": "bundle install",
			"sync": [
				"rsync",
				"-rvuzW",
				"--keep-dirlinks",
				"--exclude-from=../../../.rsync-ignore",
				"../../../",
				"<%=paths.rsync.output%>"
			].join(" ")
		},
		watch: {
			requirejs: {
				files: [
					"assets/**/*.js",
					"!assets/js/dist/**/*.js"
				],
				tasks: ["js"]
			},
			sass: {
				files: ["assets/sass/**/*.scss"],
				tasks: ["css"],
				options: {
					livereload: true
				}
			}
		},
		svn_fetch: grunt.file.readJSON("../../../.wp-plugins-config")
	};

	grunt.initConfig(config);

	if (useRSync) {
		config.paths.rsync = grunt.file.readJSON("../../../.rsync-config");
		config.watch.sync = {
			files: [
				"assets/js/dist/**/*.js",
				"assets/img/**/*.*",
				"assets/fonts/**/*.*",
				"Shared/**/*.*",
				"config/**/*.*",
				"Helpers/**/*.*",
				"languages/**/*.*",
				"Templates/**/*.*",
				"**/*.php",
				"*.css"
			],
			tasks: ["exec:sync"],
			options: {
				livereload: true
			}
		};
		grunt.registerTask("sync", ["exec:sync"]);
	} else {
		grunt.registerTask('sync', function() {
			grunt.log.writeln([
				"Nota:",
				" Arquivo '.rsync-config' não encontrado na raíz do projeto.",
				" Task 'sync' e 'watch:sync' não estará disponível. \n",
				"Para utilizar esta task, crie o arquivo com o JSON: ",
				"{ \"output\": \"/Volumes/DIRETORIO/DE/DESTINO\" }"
			].join(''));
		});
	}


	grunt.registerTask('wp-plugins', ["svn_fetch"]);
	grunt.registerTask("js", ["jshint", "requirejs"]);
	grunt.registerTask("js:dist", ["js", "uglify"]);
	grunt.registerTask("css", ["scsslint", "sass"]);
	grunt.registerTask("default", ["css", "js:dist"]);
	grunt.registerTask("packages", ["exec:npm", "exec:bower", "exec:bundle", "svn_fetch"]);
};
