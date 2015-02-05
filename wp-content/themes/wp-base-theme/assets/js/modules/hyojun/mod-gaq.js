define(function(){

	var hasTrackers = false;

	function localGA() {
		window.ga = function() {
			if (window.console) {
				console.info('ga(', arguments, ');');
			}
		};
	}

	function localGTM () {
		window.dataLayer = {
			push: function() {
				if (window.console) {
					console.info('dataLayer.push(', arguments, ');');
				}
			}
		};
	}

	function isItLocal(local) {
		var isLocal = local == null ? true : !!local;

		if (hasTrackers) {
			return true;
		}
		if (isLocal) {
			localGA();
			localGTM();
			hasTrackers = true;
			return true;
		}

		return false;
	}

	return {
		runGA: function(code, trackValue, local, extra) {
			this.loadGA(local);
			ga.apply(null, ['create', code].concat(extra));
			ga('require', 'displayfeatures');
			ga('send', 'pageview', trackValue);
		},
		loadGA: function (local) {
			if (isItLocal(local)) {
				return;
			}

			/* jshint ignore:start */
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			/* jshint ignore:end */
		},
		runGTM: function(code, local) {
			if (isItLocal(local)) {
				return;
			}

			/* jshint ignore:start */
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer',code);
			/* jshint ignore:end */
		}
	};
});
