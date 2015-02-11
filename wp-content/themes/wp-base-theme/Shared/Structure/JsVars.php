	<script type="text/javascript">
		var hyojun = {
			config: {
				root: '<?php echo $Root; ?>',
				assetsRoot: '<?php echo $AssetsRoot; ?>',
				fullURL: '<?php echo $FullUrl; ?>',
				isLocal: <?php echo $isLocal; ?>,
				ga: {
					trackCode: '##CODE## on JsVars.php',
					trackValue: ''
				},
				gtm: {
					trackCode: '##CODE##'
				},
				fb: {
					appID: '##appID##',
					channelURL: '##channelURL##'
				}
			}
			// ,
			// browser: {
			// 	name: '@Common.Browser.Name',
			// 	version: '@Common.Browser.Version'
			// }
		};
	</script>
