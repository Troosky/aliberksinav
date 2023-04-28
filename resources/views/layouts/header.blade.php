<!DOCTYPE html>
<html>
	
<!-- molla/index.html  22 Nov 2019 09:54:33 GMT -->
<head>
		<script type="text/javascript">
			if (top !== window) {
				top.location.href = window.location.href;
			}
			if (window.location.hash) {
				window.location.href = window.location.href.replace(window.location.hash, '');
			}
		</script>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Molla - Best Premium HTML Template</title>

		<meta name="author" content="p-Themes">

		<!-- Favicon -->
		<link rel="shortcut icon" href="https://www.portotheme.com/html/molla/assets/images/demos-img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../../../www.portotheme.com/html/molla/assets/images/demos-img/apple-touch-icon.html">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('tema')}}/lib/bootstrap/bootstrap.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('tema')}}/assets/css/main.min.css">

	</head>
	<body>
		<div class="page-wrapper">
			<header id="header">
				<div class="container-lg">
					<div class="header-left">
						<div class="logo">
							<a href="{{route('main')}}"><img src="{{asset('tema')}}/assets/images/demos-img/logo.png" alt="Molla Logo"></a>
						</div>
					</div>
					<div class="header-main">
						<ul class="menu">
							<li>
								<a href="#" class="goto-demos">Demos</a>
							</li>
							<li>
								<a href="#" class="goto-features">Features</a>
							</li>
							<li>
								<a href="#" class="goto-elements">Elements</a>
							</li>
							<li>
								<a href="#" class="goto-support">Support</a>
							</li>
                          @auth
                          <li>
                            <a href="{{route('profil')}}" class="">{{Auth::user()->name}}</a>
                        </li>
                          <li>
                            <a href="#" class="goto-support">Profil</a>
                        </li>
                        <li>
                            <a href="{{route('logOut')}}" class="">Çıkış Yap</a>v
                        </li>
                          @else
                          <li>
                            <a href="{{url('register')}}" class="">Kayıt Ol</a>
                        </li>
                        <li>
                            <a href="{{url('login')}}" class="">Giriş Yap</a>
                        </li>
                          @endauth
						</ul>
					</div>
					<div class="header-right">
						<a class="mobile-menu-toggler mr-0 mr-sm-5"><i class="icon-bars"></i></a>
						<a class="btn btn-primary btn-outline"><i class="icon-shopping-cart"></i>Buy Molla</a>
					</div>
				</div>
			</header>