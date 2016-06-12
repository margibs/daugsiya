
<!DOCTYPE HTML>
<html>
    <head>
    <title>Admin Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />  
    
    <link href="/nexuspress2/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="/nexuspress2/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/nexuspress2/css/font-awesome.css" rel="stylesheet"> 

    <link rel="stylesheet" href="{{ asset('nexuspress/css/reset.min.css') }}">   
    <link rel="stylesheet" href="{{ asset('nexuspress/css/font-icons.css') }}">

    <link href="{{ asset('nexuspress2/css/custom.css') }}" rel="stylesheet">
   
    <!--//skycons-icons-->

    @yield('css_scripts')
    

    <script src="/nexuspress2/js/jquery.min.js"> </script>
      <!-- Mainly scripts -->
    <script src="{{ asset('nexuspress2/js/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('nexuspress2/js/jquery.slimscroll.min.js') }}"></script>
    <!-- Custom and plugin javascript -->
    <script src="{{ asset('nexuspress2/js/custom.js') }}"></script>
    <script src="{{ asset('nexuspress2/js/screenfull.js')}}"></script>
    <script>
    $(function () {
    $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

    if (!screenfull.enabled) {
    return false;
    }

    $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
        });
    });
    </script>

    <script src="{{ asset('nexuspress2/js/skycons.js') }}"></script>
    

    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-top" role="navigation">
                <!-- Nav header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <h1> <a class="navbar-brand" href="index.html">Minimal</a></h1>         
                </div>
                <!-- End Nav header -->

                <div class=" border-bottom">
                    <div class="full-left">
                        <section class="full-top">
                        <button id="toggle"><i class="fa fa-arrows-alt"></i></button>   
                        </section>
                        <form class=" navbar-left-right">
                        <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
                        <input type="submit" value="" class="fa fa-search">
                        </form>
                        <div class="clearfix"> </div>
                    </div>

                <div class="drop-men" >
                <ul class=" nav_1">

                <li class="dropdown at-drop">
                <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
                <ul class="dropdown-menu menu1 " role="menu">
                <li><a href="#">

                <div class="user-new">
                <p>New user registered</p>
                <span>40 seconds ago</span>
                </div>
                <div class="user-new-left">

                <i class="fa fa-user-plus"></i>
                </div>
                <div class="clearfix"> </div>
                </a></li>
                <li><a href="#">
                <div class="user-new">
                <p>Someone special liked this</p>
                <span>3 minutes ago</span>
                </div>
                <div class="user-new-left">

                <i class="fa fa-heart"></i>
                </div>
                <div class="clearfix"> </div>
                </a></li>
                <li><a href="#">
                <div class="user-new">
                <p>John cancelled the event</p>
                <span>4 hours ago</span>
                </div>
                <div class="user-new-left">

                <i class="fa fa-times"></i>
                </div>
                <div class="clearfix"> </div>
                </a></li>
                <li><a href="#">
                <div class="user-new">
                <p>The server is status is stable</p>
                <span>yesterday at 08:30am</span>
                </div>
                <div class="user-new-left">

                <i class="fa fa-info"></i>
                </div>
                <div class="clearfix"> </div>
                </a></li>
                <li><a href="#">
                <div class="user-new">
                <p>New comments waiting approval</p>
                <span>Last Week</span>
                </div>
                <div class="user-new-left">

                <i class="fa fa-rss"></i>
                </div>
                <div class="clearfix"> </div>
                </a></li>
                <li><a href="#" class="view">View all messages</a></li>
                </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="/nexuspress2/images/wo.jpg"></a>
                <ul class="dropdown-menu " role="menu">
                <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
                </ul>
                </li>

                </ul>
                </div><!-- /.navbar-collapse -->

                <div class="clearfix">

                </div>

                <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                <li>
                <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span> </a>
                </li>

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Posts </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> All </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> New </a></li>

                <li><a href="typography.html" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i> Draft </a></li>

                <li><a href="typography.html" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i> Trash </a></li>

                </ul>
                </li>

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Categories </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> New </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> All </a></li>

                </ul>
                </li>

                <li>
                <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label"> Images </span> </a>
                </li>

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Casinos </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                 <li><a href="{{ url('admin/new_casino') }}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Casino </a></li>

                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> Mask Links </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Profile </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Article Banners </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Skyscrapers </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Preference </a></li>

                </ul>
                </li>

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Comments </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> All </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Approved </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Pending </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Trash </a></li>
                </ul>
                </li>	

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Users </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> All </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Admins </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Banned </a></li>

                </ul>
                </li>

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Autopost </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> New </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Pool </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> List </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Checker </a></li>

                </ul>
                </li>

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Prizes </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> New </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Category </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Generate Code </a></li>

                </ul>
                </li>	

                <li>
                <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label"> Notifications </span> </a>
                </li>

                <li>
                <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label"> Questions </span> </a>
                </li>

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Dynamic Ads </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> List </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Add (Desktop) </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Add (Mobile) </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Trash </a></li>
                </ul>
                </li>	

                <li>
                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label"> Dynamic Links </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i> List </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Add (Desktop) </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Add (Mobile) </a></li>

                <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> Trash </a></li>
                </ul>
                </li>	

                </ul>
                </div>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="content-main">
                    @yield('content')   
                </div>
            </div>
            <div class="copy">
                <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
        </div>
        
    

            @yield('script')


    </body>
</html>

