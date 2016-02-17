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
	<link rel='stylesheet' href='/assets/js/nprogress/nprogress.css'/>
	<link rel='stylesheet' href='/assets/css/app.css'/>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body id="app-layout" ng-app="app">
	<div class="wrapper-container">
	<div class="container">
		<header class="margin20 no-margin-left no-margin-right">
			<div class="clear-float">
				<div class="place-right">
					<form>
						<div class="input-control text margin20" style="width: 300px">
							<input type="text" name="q" placeholder="Search...">
							<button class="button"><span class="mif-search"></span></button>
						</div>
					</form>
				</div>
				<a class="place-left" href="#" title="">
					<h1>田园牧歌文化传媒有限公司</h1>
				</a>
			</div>
		</header>
		
		<div class="app-bar pink" data-role="appbar">
                    <a class="app-bar-element branding">Metro UI CSS</a>
                    <span class="app-bar-divider"></span>
                    <ul class="app-bar-menu">
                        <li data-flexorderorigin="0" data-flexorder="1"><a href="">Home</a></li>
                        <li data-flexorderorigin="1" data-flexorder="2">
                            <a href="" class="dropdown-toggle">Products</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a href="">Windows 10</a></li>
                                <li><a href="">Spartan</a></li>
                                <li><a href="">Outlook</a></li>
                                <li><a href="">Office 2015</a></li>
                                <li class="divider"></li>
                                <li><a href="" class="dropdown-toggle">Other Products</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a href="">Internet Explorer 10</a></li>
                                        <li><a href="">Skype</a></li>
                                        <li><a href="">Surface</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="" class="dropdown-toggle">Support</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a href="">About</a></li>
                                <li><a href="">Contacts</a></li>
                                <li><a href="">Community forum</a></li>
                                <li>
                                    <a href="" class="dropdown-toggle">Support</a>
                                    <ul class="d-menu" data-role="dropdown">
                                        <li><a href="" class="dropdown-toggle">About</a></li>
                                        <li><a href="">Contacts</a></li>
                                        <li><a href="">Community forum</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Help</a></li>
                    </ul>
					 <span class="app-bar-divider"></span>
					 <ul class="app-bar-menu place-right"> 
						<li  class="branding">
							<a class="fg-white"><i class="fa fa-sign-in"></i> 登录</a>
						</li>
						<li class="branding">
							<a class="fg-white"><i class="fa fa-group"></i> 注册</a>	
						</li>
					</ul>
				</div>
		</div>	
		<div class="main-content container" role="main" ng-view>
		@yield('content')
		</div>
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
