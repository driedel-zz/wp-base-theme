// Não deve ser um módulo, pois é executado antes da require
(function(w, d){
	// Código do browser-update.org com modificações pontuais para
	// o suporte do hyojun.bootstrap (apenas carrega quando for IE)

	function browserUpdate() {
		if (
			(!/(Trident|MSIE).(\d+\.\d+)/i.test(navigator.userAgent)) &&
			(!/Trident.*rv:(\d+\.\d+)/i.test(navigator.userAgent))
		) {
			return;
		}

		function $buo_f() {
			var e = d.createElement('script');
			e.src = '//browser-update.org/update.js';
			d.body.appendChild(e);
		}

		// IE8-, Firefox 25-, Opera 17-, Safari 6-, Chrome (latest)
		$buoop = {vs:{i:9,f:25,o:17,s:6},c:2, newwindow: true, l: 'pt-br'};

		if (d.readyState.match(/complete|interactive/)) {
			$buo_f();
		} else {
			try {
				d.addEventListener('load', $buo_f, false);
			}catch(e){
				w.attachEvent('onload', $buo_f);
			}
		}
	}

	var oldLoad = window.load;
	window.load = function() {
		if (typeof oldLoad === 'function') {
			browserUpdate();
		}
	};

}(window, document));
