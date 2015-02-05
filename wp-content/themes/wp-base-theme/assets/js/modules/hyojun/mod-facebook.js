define(function(){

	var isLocal = true,
		js = null;
	function hideOverflow() {
		document.getElementsByTagName('html')[0].style.overflow = 'hidden';
		document.getElementsByTagName('body')[0].style.overflow = 'hidden';
	}

	return {
		load: function() {
			if (js) {
				return;
			}
			(function(d, s, id){
				var fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		},
		createRootNode: function() {
			if (document.getElementById('fb-root')) {
				return;
			}
			var rootElm = document.createElement('div');
			rootElm.id = 'fb-root';
			document.body.appendChild(rootElm);
		},
		init: function(appId, channelUrl, local) {
			this.createRootNode();
			this.load();

			isLocal = (local !== false);

			window.fbAsyncInit = function () {
				FB.init({
					appId: appId,
					channelUrl: channelUrl
				});
				FB.Canvas.setAutoGrow(100);

				if (isLocal) {
					hideOverflow();
				}
			};
		}
	};
});
