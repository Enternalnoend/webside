
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <script src="./main.js"></script>
    <div class="app">
        <header class="header">
            <div class="grid">
                <div class="header__logo">
                </div>
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item"><a href="">Trang chủ</a></li>
                        <li class="header__navbar-item"><a href="">Giới thiệu</a></li>
                        <li class="header__navbar-item"><a href="">Nhân vật</a></li>
                        <li class="header__navbar-item"><a href="">Tin tức</a></li>
                        <li class="header__navbar-item"><a href="">Trung tâm nạp</a></li>
                        <li class="header__navbar-item"><a href="">Mã quà tặng</a></li>
                    </ul>
                </nav>
                <div class="header__login">
                    <button onclick="clickdangnhap()" class="login__btn">
                        <span >Đăng Nhập</span>
                        <img src="./assets/img/userlogo.png" alt="user">
                    </button>
                </div>
                <div class="header__download">
                    
                </div>
            </div>
        </header>
        <div class="poster">
            <div class="poster__banner">
                <video autoplay loop muted plays-inline class="bv" >
                    <source src="./assets/img/videobanner.mp4" type="video/mp4" >
                </video>
                <div class="poster__sigh">
                    <p class="poster__sub">
                    </p>
                    <div class="poster-download">
                        <div class="poster-download-left">
                            <img src="./assets/img/userlogo.png" alt="maqr">
                        </div>
                        <div class="poster-download-right">
                            <div class="poster-download-list">
                                <div class="poster-download-row">
                                    <div class="poster-download-pointer">
                                        <p class="poster-download-item">
                                            <img src="./assets/img/ggplay.png" alt="ggplay" class="img1">
                                        </p>
                                        <a href="" class="taigame"></a>
                                    </div>
                                    <div class="poster-download-pointer">
                                        <a href="" class="taigame">
                                            <p class="poster-download-item">
                                                <img src="./assets/img/iospng.png" alt="ios" class="img1">
                                            </p>
                                        </a>
                                    </div>
                                    <div class="poster-download-pointer">
                                        <a href="" class="taigame">
                                            <p class="poster-download-item">
                                                <img src="./assets/img/windowpng.png" alt="ios" class="img1">
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="poster-download-tag">
                            <img src="./assets/img/18+nhoe.png" alt="18+" class="img2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="slider">
            <h3>
                Tin Tức
            </h3>
            <div class="slider__main">
                <div class="slider__content">
                    <ul class="slider__tab__list">
                        <li data-cate="395" class="slider__tab__item slider__tab__item--active">
                            Mới
                        </li>
                    </ul>
                    <ul class="slider__list">
                        <li><a href="" class="slider__item" title="Sự Kiện Rút Thẻ Chúc Phúc Genshin Impact">
                            <p class="slider__title ellipsis">Sự Kiện Rút mới</p>
                            <p class="slider__date">30/12/2023</p>
                        </a>
                    </li>
                    <li><a href="" class="slider__item" title="Sự Kiện Rút Thẻ Chúc Phúc Genshin Impact">
                        <p class="slider__title ellipsis">Sự Kiện Rút mới</p>
                        <p class="slider__date">30/12/2023</p>
                    </a>
                </li>
                <li><a href="" class="slider__item" title="Sự Kiện Rút Thẻ Chúc Phúc Genshin Impact">
                    <p class="slider__title ellipsis">Sự Kiện Rút mới</p>
                    <p class="slider__date">30/12/2023</p>
                </a>
            </li>
            <li><a href="" class="slider__item" title="Sự Kiện Rút Thẻ Chúc Phúc Genshin Impact">
                <p class="slider__title ellipsis">Sự Kiện Rút mới</p>
                <p class="slider__date">30/12/2023</p>
            </a>
            </li>
            <li><a href="" class="slider__item" title="Sự Kiện Rút Thẻ Chúc Phúc Genshin Impact">
                <p class="slider__title ellipsis">Sự Kiện Rút mới</p>
                <p class="slider__date">30/12/2023</p>
            </a>
            </li>
            <li><a href="" class="slider__item" title="Sự Kiện Rút Thẻ Chúc Phúc Genshin Impact">
                <p class="slider__title ellipsis">Sự Kiện Rút mới</p>
                <p class="slider__date">30/12/2023</p>
            </a>
            </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="end">
            <ul class="end_list">
                <li class="list_item-item1"></li>
                <li class="list_item-item2"></li>
                <li class="list_item-item3"></li>
                <li class="list_item-item4"></li>
            </ul>
        </section>
        <footer class="footer">
            <div class="footer__top">
                <div class="footer_bar">
                    <a href="" target="_blank" class="footer__socitem">
                        <span  class="fa-brands fa-facebook">
                        </span>
                    </a>
                    <a href="" target="_blank" class="footer__socitem">
                        <span  class="fa-brands fa-youtube">
                        </span>
                    </a>
                    <a href="" target="_blank" class="footer__socitem">
                        <span  class="fa-brands fa-instagram">
                        </span>
                    </a>
                    <a href="" target="_blank" class="footer__socitem">
                        <span  class="fa-brands fa-twitter">
                        </span>
                    </a>
                </div>
            </div>
        </footer>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>