<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="/assets/css/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
   
    <!-- Styles -->
    <link href="/assets/css/metro/css/metro.min.css" rel="stylesheet">
	<link href="/assets/css/metro/css/metro-schemes.min.css" rel="stylesheet">
	<link href="/assets/css/metro/css/metro-icons.css" rel="stylesheet">
	<link href="/assets/css/metro/css/metro-responsive.min.css" rel="stylesheet">
	<link rel='stylesheet' href='/assets/js/nprogress/nprogress.css'/>
	<link rel='stylesheet' href='/assets/css/app.css'/>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body id="app-layout" class="bg-grayLighter" ng-app="app">
	<div class="wrapper-container">
	
		<div class="app-bar red text-shadow" data-role="appbar">
			<div class="container">	
                    <a href="/#/" class="app-bar-element branding">婚礼儿</a>
                    <span class="app-bar-divider"></span>
                    <ul class="app-bar-menu">
                        <li><a href="">首页</a></li>
                        <li><a href="">婚品采购</a></li>
                        <li><a href="">分享</a></li>
                        <li><a href="">婚礼人</a></li>
                    </ul>
					 <span class="app-bar-divider"></span>
					 <ul class="app-bar-menu place-right"> 
						<li  class="branding">
							<a href="/#/login" class="fg-white"><i class="fa fa-sign-in"></i> 登录</a>
						</li>
						<li class="branding">
							<a href="/#/register" class="fg-white"><i class="fa fa-group"></i> 注册</a>	
						</li>
						<li class="branding">
							<a href="/#/u/123" class="fg-white"><i class="fa fa-group"></i> 个人中心</a>	
						</li>
					</ul>
			</div>
		</div>	
		<div class="main-content container" role="main" ng-view>
		@yield('content')
		</div>
		<footer id="footer" class="static-bottom container bg-white fg-white padding10 text-shadow">
            <div class="bottom-menu-wrapper">
                <ul class="horizontal-menu compact">
                    <li><a class="fg-gray">&copy; 2016 婚礼儿</a></li>
                    <li class="place-right fg-gray"><a href="#">关于我们</a></li>
                    <li class="place-right fg-gray"><a href="#">Legal</a></li>
                    <li class="place-right fg-gray"><a href="#">Advertise</a></li>
                    <li class="place-right fg-gray"><a href="#">Help</a></li>
                    <li class="place-right fg-gray"><a href="#">Feedback</a></li>
                </ul>
            </div>
        </footer>
	</div>
    <!-- JavaScripts -->
    <script src="/assets/js/jquery/jquery-1.12.0.min.js"></script>
    <script src="/assets/css/metro/js/metro.min.js"></script>
	<script src='/assets/js/nprogress/nprogress.js'></script>
	<script src="/assets/js/angular/angular.min.js"></script>
	<script src="/assets/js/angular/angular-route.min.js"></script>
	<script src="/assets/js/app.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
