<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Guntleson</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="机柜,冷通道,PDU,切换器,综合布线,guntleson,希贝元"/>
<meta name="description" content="希贝元智能科技有限公司" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">     
        <p class="pull-right"><i class="fa fa-phone"></i>025-8656 6596</p>
      </div>
    </div>
  </div>
</div>
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img class="logo_svg" src="img/logo.svg" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">   
                        <li><a href="/">希贝元</a></li>
                        <li><a href="/cube">机柜</a></li>
                        <li><a href="/cable">综合布线</a></li>
                        @if(Auth::check())
                            <li><a id="dropdownMenu1" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                                <span class="caret"></span></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="/create"> 发布产品</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="/change_password"> 修改密码</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="/logout"> 退出登录</a>
                                </li>
                            </ul>
                        </li>

                        @else
                        <li><a href="/login">登录</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->


@yield('content')

      

        <div class="container cent-p foot">
            <div class="row cent">

                    <div class="copyright">
                        <p>
                            版权所有 &copy; {{ today()->year }} 南京希贝元智能科技有限公司
                        </p>
                    </div>

            </div>
        </div>

    </footer>

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script> 
<script>
    // ajax csrf
    $(function(){ 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });
    });
</script>
</body>
</html>