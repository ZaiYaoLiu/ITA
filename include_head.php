<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="google" content="notranslate">
<title>鈺達 layout</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://webdesign.pola-cloud.com.tw/js/owlcarousel/assets/owl.carousel.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="https://webdesign.pola-cloud.com.tw/js/jquery-modal-video/modal-video.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="https://webdesign.pola-cloud.com.tw/js/fancybox/jquery.fancybox.min.css" media="screen">
<script>
	// 動態新增 CSS
	function loadCSS(url) {
		try {
			document.createStyleSheet(url);
		} catch (e) {
			var link = document.createElement('link');
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = url;
			document.getElementsByTagName('head')[0].appendChild(link);
		}
	}
	// 判斷是否為行動裝置 回傳 ture 或 flaes
    function isMobileDevice() {
        const mobileDevice = ['Android', 'webOS', 'iPhone', 'iPad', 'iPod', 'BlackBerry', 'Windows Phone']
        let isMobileDevice = mobileDevice.some(e => navigator.userAgent.match(e))
        return isMobileDevice
    }


    console.log(isMobileDevice())
	loadCSS('css/style.css')
</script>