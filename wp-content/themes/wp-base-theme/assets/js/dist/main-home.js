// Este arquivo não deve ser um módulo,
// pois será executado antes de existir a require
(function(w){
	if (!w.require) {
		w.hbsExec = w.hbsExec || [];
		w.require = function(){
			w.hbsExec.push({
				func: 'require',
				args: arguments
			});
		};
		w.define = function(){
			w.hbsExec.push({
				func: 'define',
				args: arguments
			});
		};
		w.queue = function(){
			w.hbsExec.push({
				func: 'queue',
				args: arguments
			});
		};
	}
}(window));

define("mod/hyojun/mod-async-check", function(){});

define('main-home',['require','mod/hyojun/mod-async-check'],function(require){
	require('mod/hyojun/mod-async-check');
});
require([], function () {

	// Este arquivo deve conter apenas inicialização de módulos
	// NÃO INSERIR LÓGICA!

	console.info('HELLO WORLD!');

});


//# sourceMappingURL=main-home.js.map