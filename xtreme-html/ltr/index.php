

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords"
content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template">
<meta name="description"
content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
<meta name="robots" content="noindex,nofollow">
<title>Xtreme Admin Lite Template by WrapPixel</title>
<link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
<!-- Custom CSS -->
<link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="../../dist/css/style.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    #busesWrapper{
        margin-left: 65px;
    }
    #busesSection{
        display: none;
    }
    .sidebar-nav ul .sidebar-item {
        width: 66px;
    }
    .sidebar-nav ul .sidebar-item:hover {
        width: 250px;
    }
    .confirmButton{
        appearance: none;
        background-color: #2ea44f;
        border: 1px solid rgba(27, 31, 35, .15);
        border-radius: 6px;
        box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        padding: 6px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: middle;
        white-space: nowrap;
    }
    
    .confirmButton:focus:not(:focus-visible):not(.focus-visible) {
        box-shadow: none;
        outline: none;
    }
    
    .confirmButton:hover {
        background-color: #2c974b;
    }
    
    .confirmButton:focus {
        box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
        outline: none;
    }
    
    .confirmButton:disabled {
        background-color: #94d3a2;
        border-color: rgba(27, 31, 35, .1);
        color: rgba(255, 255, 255, .8);
        cursor: default;
    }
    
    .confirmButton:active {
        background-color: #298e46;
        box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
    }
    
    </style>
    
    </head>
    
    <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" id='dashboardSection'>
    <div class="lds-ripple">
    <div class="lds-pos"></div>
    <div class="lds-pos"></div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin5">
    <!-- ============================================================== -->
    <!-- Logo -->
    <!-- ============================================================== -->
    <a class="navbar-brand" href="index.html">
    <!-- Logo icon -->
    <b class="logo-icon">
    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
    <!-- Dark Logo icon -->
    <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
    <!-- Light Logo icon -->
    <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
    </b>
    <!--End Logo icon -->
    <!-- Logo text -->
    <span class="logo-text">
    <!-- dark Logo text -->
    <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
    <!-- Light Logo text -->
    <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
    </span>
    </a>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <!-- This is for the sidebar toggle which is visible on mobile only -->
    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
    class="ti-menu ti-close"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav float-start me-auto">
    <!-- ============================================================== -->
    <!-- Search -->
    <!-- ============================================================== -->
    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
    href="javascript:void(0)"><i class="ti-search"></i></a>
    <form class="app-search position-absolute">
    <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
    class="srh-btn"><i class="ti-close"></i></a>
    </form>
    </li>
    </ul>
    <!-- ============================================================== -->
    <!-- Right side toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav float-end">
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <!-- ============================================================== -->
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
    </a>
    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
    My Profile</a>
    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
    My Balance</a>
    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
    Inbox</a>
    </ul>
    </li>
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <!-- ============================================================== -->
    </ul>
    </div>
    </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" style='width:84px' data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
    <ul id="sidebarnav">
    <!-- User Profile-->
    <li>
    <!-- User Profile-->
    <div class="user-profile d-flex no-block dropdown m-t-20">
    <div class="user-pic"><img src="../../assets/images/users/1.jpg" alt="users"
    class="rounded-circle" width="40" /></div>
    <div class="user-content hide-menu m-l-10">
    <a href="#" class="" id="Userdd" role="button"
    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <h5 class="m-b-0 user-name font-medium">First Family <i
    class="fa fa-angle-down"></i></h5>
    <span class="op-5 user-email">email@gmail.com</span>
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
    <a class="dropdown-item" href="javascript:void(0)"><i
    class="ti-user m-r-5 m-l-5"></i> My Profile</a>
    <a class="dropdown-item" href="javascript:void(0)"><i
    class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
    <a class="dropdown-item" href="javascript:void(0)"><i
    class="ti-email m-r-5 m-l-5"></i> Inbox</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:void(0)"><i
    class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:void(0)"><i
    class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
    </div>
    </div>
    </div>
    <!-- End User Profile-->
    </li>
    <li class="p-15 m-t-10"><a href="javascript:void(0)"
    class="btn d-block w-100 create-btn text-white no-block d-flex align-items-center"><i
    class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New</span> </a>
    </li>
    <!-- User Profile-->
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" id="dashboardSideBar"
    aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
    class="hide-menu">Dashboard</span></a></li>
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="Drivers.html" aria-expanded="false"><i
    class="mdi mdi-account-network"></i><span class="hide-menu">Drivers</span></a></li>
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" id="busesSideBar"
    aria-expanded="false"><i class="mdi mdi-border-all"></i><span
    class="hide-menu">Buses</span></a></li>
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
    href="Members.html" aria-expanded="false"><i class="mdi mdi-face"></i><span
    class="hide-menu">Members</span></a></li>
    </ul>
    
    </nav>
    <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="dashboardContainer">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
    <div class="row align-items-center">
    <div class="col-5">
    <h4 class="page-title">Dashboard</h4>
    <div class="d-flex align-items-center">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
    </nav>
    </div>
    </div>
    <div class="col-7">
    </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid" >
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
    <div class="col-md-8">
    <div class="card">
    <div class="card-body">
    <div class="d-md-flex align-items-center">
    <div>
    <h4 class="card-title">Sales Summary</h4>
    <h5 class="card-subtitle">Overview of Latest Month</h5>
    </div>
    <div class="ms-auto d-flex no-block align-items-center">
    <ul class="list-inline font-12 dl m-r-15 m-b-0">
    <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Iphone
    </li>
    <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Ipad
    </li>
    </ul>
    </div>
    </div>
    <div class="row">
    <!-- column -->
    <div class="col-lg-12">
    <div class="campaign ct-charts"></div>
    </div>
    <!-- column -->
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Feeds</h4>
    <div class="feed-widget">
    <ul class="list-style-none feed-body m-0 p-b-20">
    <li class="feed-item">
    <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have 4
    pending tasks. <span class="ms-auto font-12 text-muted">Just Now</span>
    </li>
    <li class="feed-item">
    <div class="feed-icon bg-success"><i class="ti-server"></i></div> Server #1
    overloaded.<span class="ms-auto font-12 text-muted">2 Hours ago</span>
    </li>
    <li class="feed-item">
    <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div> New
    order received.<span class="ms-auto font-12 text-muted">31 May</span>
    </li>
    <li class="feed-item">
    <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user
    registered.<span class="ms-auto font-12 text-muted">30 May</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Table -->
    <!-- ============================================================== -->
    <div class="row">
    <!-- column -->
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <!-- title -->
    <div class="d-md-flex">
    <div>
    <h4 class="card-title">Top Selling Products</h4>
    <h5 class="card-subtitle">Overview of Top Selling Items</h5>
    </div>
    <div class="ms-auto">
    <div class="dl">
    <select class="form-select shadow-none">
    <option value="0" selected>Monthly</option>
    <option value="1">Daily</option>
    <option value="2">Weekly</option>
    <option value="3">Yearly</option>
    </select>
    </div>
    </div>
    </div>
    <!-- title -->
    </div>
    <div class="table-responsive">
    <table class="table v-middle">
    <thead>
    <tr class="bg-light">
    <th class="border-top-0">Products</th>
    <th class="border-top-0">License</th>
    <th class="border-top-0">Support Agent</th>
    <th class="border-top-0">Technology</th>
    <th class="border-top-0">Tickets</th>
    <th class="border-top-0">Sales</th>
    <th class="border-top-0">Earnings</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>
    <div class="d-flex align-items-center">
    <div class="m-r-10"><a
    class="btn btn-circle d-flex btn-info text-white">EA</a>
    </div>
    <div class="">
    <h4 class="m-b-0 font-16">Elite Admin</h4>
    </div>
    </div>
    </td>
    <td>Single Use</td>
    <td>John Doe</td>
    <td>
    <label class="label label-danger">Angular</label>
    </td>
    <td>46</td>
    <td>356</td>
    <td>
    <h5 class="m-b-0">$2850.06</h5>
    </td>
    </tr>
    <tr>
    <td>
    <div class="d-flex align-items-center">
    <div class="m-r-10"><a
    class="btn btn-circle d-flex btn-orange text-white">MA</a>
    </div>
    <div class="">
    <h4 class="m-b-0 font-16">Monster Admin</h4>
    </div>
    </div>
    </td>
    <td>Single Use</td>
    <td>Venessa Fern</td>
    <td>
    <label class="label label-info">Vue Js</label>
    </td>
    <td>46</td>
    <td>356</td>
    <td>
    <h5 class="m-b-0">$2850.06</h5>
    </td>
    </tr>
    <tr>
    <td>
    <div class="d-flex align-items-center">
    <div class="m-r-10"><a
    class="btn btn-circle d-flex btn-success text-white">MP</a>
    </div>
    <div class="">
    <h4 class="m-b-0 font-16">Material Pro Admin</h4>
    </div>
    </div>
    </td>
    <td>Single Use</td>
    <td>John Doe</td>
    <td>
    <label class="label label-success">Bootstrap</label>
    </td>
    <td>46</td>
    <td>356</td>
    <td>
    <h5 class="m-b-0">$2850.06</h5>
    </td>
    </tr>
    <tr>
    <td>
    <div class="d-flex align-items-center">
    <div class="m-r-10"><a
    class="btn btn-circle d-flex btn-purple text-white">AA</a>
    </div>
    <div class="">
    <h4 class="m-b-0 font-16">Ample Admin</h4>
    </div>
    </div>
    </td>
    <td>Single Use</td>
    <td>John Doe</td>
    <td>
    <label class="label label-purple">React</label>
    </td>
    <td>46</td>
    <td>356</td>
    <td>
    <h5 class="m-b-0">$2850.06</h5>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- Table -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <div class="row">
    <!-- column -->
    <div class="col-lg-6">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Recent Comments</h4>
    </div>
    <div class="comment-widgets scrollable">
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row m-t-0">
    <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50"
    class="rounded-circle"></div>
    <div class="comment-text w-100">
    <h6 class="font-medium">James Anderson</h6>
    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
    and type setting industry. </span>
    <div class="comment-footer">
    <span class="text-muted float-end">April 14, 2021</span> <span
    class="label label-rounded label-primary">Pending</span> <span
    class="action-icons">
    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
    <a href="javascript:void(0)"><i class="ti-check"></i></a>
    <a href="javascript:void(0)"><i class="ti-heart"></i></a>
    </span>
    </div>
    </div>
    </div>
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row">
    <div class="p-2"><img src="../../assets/images/users/4.jpg" alt="user" width="50"
    class="rounded-circle"></div>
    <div class="comment-text active w-100">
    <h6 class="font-medium">Michael Jorden</h6>
    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
    and type setting industry. </span>
    <div class="comment-footer ">
    <span class="text-muted float-end">April 14, 2021</span>
    <span class="label label-success label-rounded">Approved</span>
    <span class="action-icons active">
    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
    <a href="javascript:void(0)"><i class="icon-close"></i></a>
    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
    </span>
    </div>
    </div>
    </div>
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row">
    <div class="p-2"><img src="../../assets/images/users/5.jpg" alt="user" width="50"
    class="rounded-circle"></div>
    <div class="comment-text w-100">
    <h6 class="font-medium">Johnathan Doeting</h6>
    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
    and type setting industry. </span>
    <div class="comment-footer">
    <span class="text-muted float-end">April 14, 2021</span>
    <span class="label label-rounded label-danger">Rejected</span>
    <span class="action-icons">
    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
    <a href="javascript:void(0)"><i class="ti-check"></i></a>
    <a href="javascript:void(0)"><i class="ti-heart"></i></a>
    </span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- column -->
    <div class="col-lg-6">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Temp Guide</h4>
    <div class="d-flex align-items-center flex-row m-t-30">
    <div class="display-5 text-info"><i class="wi wi-day-showers"></i>
    <span>73<sup>°</sup></span></div>
    <div class="m-l-10">
    <h3 class="m-b-0">Saturday</h3><small>Ahmedabad, India</small>
    </div>
    </div>
    <table class="table no-border mini-table m-t-20">
    <tbody>
    <tr>
    <td class="text-muted">Wind</td>
    <td class="font-medium">ESE 17 mph</td>
    </tr>
    <tr>
    <td class="text-muted">Humidity</td>
    <td class="font-medium">83%</td>
    </tr>
    <tr>
    <td class="text-muted">Pressure</td>
    <td class="font-medium">28.56 in</td>
    </tr>
    <tr>
    <td class="text-muted">Cloud Cover</td>
    <td class="font-medium">78%</td>
    </tr>
    </tbody>
    </table>
    <ul class="row list-style-none text-center m-t-30">
    <li class="col-3">
    <h4 class="text-info"><i class="wi wi-day-sunny"></i></h4>
    <span class="d-block text-muted">09:30</span>
    <h3 class="m-t-5">70<sup>°</sup></h3>
    </li>
    <li class="col-3">
    <h4 class="text-info"><i class="wi wi-day-cloudy"></i></h4>
    <span class="d-block text-muted">11:30</span>
    <h3 class="m-t-5">72<sup>°</sup></h3>
    </li>
    <li class="col-3">
    <h4 class="text-info"><i class="wi wi-day-hail"></i></h4>
    <span class="d-block text-muted">13:30</span>
    <h3 class="m-t-5">75<sup>°</sup></h3>
    </li>
    <li class="col-3">
    <h4 class="text-info"><i class="wi wi-day-sprinkle"></i></h4>
    <span class="d-block text-muted">15:30</span>
    <h3 class="m-t-5">76<sup>°</sup></h3>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
    All Rights Reserved by Xtreme Admin. Designed and Developed by <a
    href="https://www.wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <div class="preloader1" id=""> 
    <div class="lds-ripple">
    <div class="lds-pos"></div>
    <div class="lds-pos"></div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="busesSection"  data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" id="busesWrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
    <div class="row align-items-center">
    <div class="col-5">
    <h4 class="page-title">Buses</h4>
    <div class="d-flex align-items-center">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
    </nav>
    </div>
    </div>
    <div class="col-7">
    <div class="text-end">
    <!--<a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white"
    target="_blank">Upgrade to Pro</a>-->
    <!--Button add new-->
    <!--<button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal"><i
    class="fa fa-plus-square"></i>
    Create new
    </button> -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info btn-rounded" data-bs-toggle="modal"
    data-bs-target="#tripModal">
    <i class="fa fa-plus-square"></i> Add new
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="tripModal" tabindex="-1" aria-labelledby="tripModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="tripModalLabel">Add new</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"
    aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form class="row g-4">
    <div class="col-md-6">
    <input type="text" class="form-control" id="add1" name="ModelName"
    placeholder="Model">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add2" name="mynameYear"
    placeholder="Year">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add3" name="mynamePlate"
    placeholder="Plate No.">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add4" name="mynameVehicle"
    placeholder="Vehicle Registry">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add5" name="mynameEngine"
    placeholder="Engine">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add6" name="mynameSeats"
    placeholder="Seats">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add7" name="mynameAC"
    placeholder="AC (Yes/No)">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add8" name="mynameWifi"
    placeholder="Wifi (Yes/No)">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add9" name="mynameMaintenance"
    placeholder="Maintenance Date">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add10" name="mynameOil"
    placeholder="Oil Change">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add11" name="mynameTrips"
    placeholder="Trips">
    </div>
    <div class="col-md-6">
    <input type="text" class="form-control" id="add12" name="mynameDrivers"
    placeholder="Drivers">
    </div>
    
    <button id="sbmtBtn" type="submit">Add Row</button>
    <button type="button" onclick="clearFieldsMarks()">Clear Fields</button>
    </form>
    
    
    </div>
    <div class="modal-footer">
    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="addTrip()">Save changes</button> -->
    </div>
    </div>
    </div>
    </div>
    
    </div>
    
    </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="col-13">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Buses</h4>
    <h6 class="card-subtitle">Information about all registered buses.</h6>
    <!-- <input type="text" id="add1" name="myname" placeholder="Model">
    <input type="text" id="add2" name="myname" placeholder="Year">
    <input type="text" id="add3" name="myname" placeholder="Plate No.">
    <input type="text" id="add4" name="myname" placeholder="Vehicle Registry">
    <input type="text" id="add5" name="myname" placeholder="Engine">
    <input type="text" id="add6" name="myname" placeholder="Seats">
    <input type="text" id="add7" name="myname" placeholder="AC (Yes/No)">
    <input type="text" id="add8" name="myname" placeholder="Wifi (Yes/No)">
    <input type="text" id="add9" name="myname" placeholder="Maintenance Date">
    <input type="text" id="add10" name="myname" placeholder="Oil Change">
    <input type="text" id="add11" name="myname" placeholder="Trips">
    <input type="text" id="add12" name="myname" placeholder="Drivers">
    <br>
    <button type="button" onclick=insertRow()>Add Row</button>
    <button type="button" onclick=clearFieldsMarks()>Clear Fields</button> -->
    <br>
    <br>
    <input type="number" min="1" id="Iddelete" name="myIdDelete" placeholder="Delete Button">
    
    <button type="button" id="btnDelete">Delete Row</button>
    <button type="button" id="btnSave">Save Change</button>
    </div>
    <div class="table-responsive" id="mainTable">
    <table class="table" id="table1">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Model</th>
    <th scope="col">Year</th>
    <th scope="col">Plate No.</th>
    <th scope="col">Vehicle Registry</th>
    <th scope="col">Engine</th>
    <th scope="col">Seats</th>
    <th scope="col">AC</th>
    <th scope="col">Wifi</th>
    <th scope="col">Latest Maintenance Date</th>
    <th scope="col">Latest Oil Change</th>
    <th scope="col">Trips</th>
    <th scope="col">Drivers</th>
    <th scope="col">Edit</th>
    <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody id="tbody">
    
    </tbody>
    <?php
    include("connect_db.php");
    
    $connection = mysqli_connect('localhost', 'root', '', 'dashboard');
    $sql = "SELECT id,Model, Year1, Plate, Vehicle, Engine, Seats, AC, WiFi, LM, Loil, Trips,Driver FROM drivers";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
        
        while ($row = mysqli_fetch_assoc($result)) {
            $i=0;
            echo '<tr id="'.$row['id']. '">';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['id'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Model'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Year1'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Plate'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Vehicle'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Engine'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Seats'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['AC'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['WiFi'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['LM'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Loil'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Trips'] .'</td>';
            echo '<td id="'.$row['id'] .$i++.'">'. $row['Driver'] .'</td>';
            ?>
            <?php echo '<td id="'.$row['id'] .$i++.'">' ?><i class='far fa-edit' id="edit<?php echo $row['id']?>"></i></td>              
            <?php echo '<td id="'.$row['id'] .$i++.'">' ?><i class='fas fa-trash' id="delItem<?php echo $row['id']?>"></i></td>
            <?php
            echo '</tr>';
        }
    }
    ?>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script>
    
    let dashboardSideBar = document.getElementById("dashboardSideBar");
    let dashboardContainer = document.getElementById("dashboardContainer");
    let busesSection = document.getElementById("busesSection");
    let busesSideBar = document.getElementById("busesSideBar");
    const liArray = document.querySelectorAll("li");
    busesSideBar.addEventListener("click", (eo) => {
        dashboardContainer.style.display="none";
        busesSection.style.display="block";
        
        
    })
    dashboardSideBar.addEventListener("click", (eo) => {
        dashboardContainer.style.display="block";
        busesSection.style.display="none";
    })
    var inp = [];
    
    var chose_row;
    var inc1 = 0;
    let del = 0;
    var v=0;
    let delItem = document.createElement("tr");
    
    
    
    
    
    
    
    localRetrieve();
    function input_admin() {
        for (let i = 1; i < 13; i++) {
            inp[i] = document.getElementById("add" + i).value;
            document.getElementById('add' + i).value = '';
            
        }
        
    }
    function localRetrieve(){
        if(localStorage.getItem("busesArray") != null){
            var retrievedData = JSON.parse(localStorage.getItem("busesArray"));
            retrievedData.forEach(items => {
                inc1++;
                var v=0;
                
                let row1 = document.createElement("tr");
                row1.setAttribute("id", inc1);
                table1.appendChild(row1);
                for(let key in items){
                    // console.log(`${key}: ${items[key]}`);
                    v++;
                    
                    const a = `
                    <td id="${inc1}${v}">${items[key]} </td>
                    `;
                    row1.innerHTML +=a;
                } 
                row1.innerHTML += 
                `<td> <i class='far fa-edit'></i></td>              
                <td> <i class='fas fa-trash'></i></td>`;
            });
            
        }  
    }
    let flag = false;
    var table2 = document.getElementById("table1");
    table2.addEventListener("click", (eo) => {
        if(eo.target.className == "far fa-edit"){
            flag = true;
            let editBtn = document.getElementsByClassName("far fa-edit")
            let deleteBtn = document.getElementsByClassName("fas fa-trash")
            // editBtn.style.display = "none";
            for (let ii = 0; ii < editBtn.length; ii++) {
                const element = editBtn[ii];
                element.style.display = "none";
            }
            for (let ii = 0; ii < deleteBtn.length; ii++) {
                const element = deleteBtn[ii];
                element.style.display = "none";
            }
            let btnId = eo.target.id;
            let asd = eo.target.parentElement.previousSibling.previousElementSibling;
            var suffix = btnId.replace(/[^0-9]/g,''); 
            let rowId = document.getElementById(eo.target.parentElement.parentElement.id);
            let rowIdForEdit = rowId.id;
            if(flag == true){
              rowId.addEventListener("dblclick", (eo) => {
                let editbtnId =btnId+13;
                let deletebtnId =btnId+14;
                console.log(editbtnId.replace(/[^0-9]/g,''));
                if(eo.target.id == editbtnId.replace(/[^0-9]/g,'') || eo.target.id == deletebtnId.replace(/[^0-9]/g,'')){
                }else
                {
                    let values = eo.target.textContent.trim();
                    eo.target.innerHTML = `
                    <input type='text' class='inputText' value='${values}'>`
                    const mainTable = document.getElementById("mainTable");
                    let confirmBtn = document.createElement("button");
                    confirmBtn.classList.add("confirmButton");
                    confirmBtn.setAttribute("id","confirmButtionId");
                    var element =  document.getElementById('confirmButtionId');
                    confirmBtn.innerText='Confirm your change';
                    setTimeout(function(){
                        $(document).ready(function(){
                                $("#btnSave").click(function(e){
                                    var inpuz0 = $("#" + rowIdForEdit+0).text();
                                    var inpuz1 = $("#" + rowIdForEdit+1).text();
                                    var inpuz2 = $("#" + rowIdForEdit+2).text();
                                    var inpuz3 = $("#" + rowIdForEdit+3).text();
                                    var inpuz4 = $("#" + rowIdForEdit+4).text();
                                    var inpuz5 = $("#" + rowIdForEdit+5).text();
                                    var inpuz6 = $("#" + rowIdForEdit+6).text();
                                    var inpuz7 = $("#" + rowIdForEdit+7).text();
                                    var inpuz8 = $("#" + rowIdForEdit+8).text();
                                    var inpuz9 = $("#" + rowIdForEdit+9).text();
                                    var inpuz10 = $("#" + rowIdForEdit+10).text();
                                    var inpuz11 = $("#" + rowIdForEdit+11).text();
                                    var inpuz12 = $("#" + rowIdForEdit+12).text();
                                    $.ajax({
                                        type: "POST",
                                        url : "update.php",
                                        data: { 
                                            sselectedSbjct0 : inpuz0 ,
                                            sselectedSbjct1 : inpuz1 ,
                                            sselectedSbjct2 : inpuz2 ,
                                            sselectedSbjct3 : inpuz3 ,
                                            sselectedSbjct4 : inpuz4 ,
                                            sselectedSbjct5 : inpuz5 ,
                                            sselectedSbjct6 : inpuz6 ,
                                            sselectedSbjct7 : inpuz7 ,
                                            sselectedSbjct8 : inpuz8 ,
                                            sselectedSbjct9 : inpuz9 ,
                                            sselectedSbjct10 : inpuz10 ,
                                            sselectedSbjct11 : inpuz11 ,
                                            sselectedSbjct12 : inpuz12 
                                        }
                                    }).done(function(data){
                                        alert(data);
                                    });
                                    
                                });
                            });
                        }
                         ,500);
                    if(document.getElementById("confirmButtionId")){
                        
                    }else
                    mainTable.prepend(confirmBtn);
                    
                    mainTable.addEventListener("click", (eo) => {
                        if (eo.target.className == "confirmButton"){
                            input1=document.querySelector('.inputText');
                            //  input1.style.display ="none";
                            const inputValue = input1.value;
                            
                            input1.parentElement.innerHTML = `
                            ${inputValue}
                            `;
                            
                           eo.target.remove();
                           flag = false;
                           
                            
                            
                            
                            
                            
                            for (let ii = 0; ii < editBtn.length; ii++) {
                                const element = editBtn[ii];
                                element.style.display = "block";
                                
                            }
                            for (let ii = 0; ii < deleteBtn.length; ii++) {
                                const element = deleteBtn[ii];
                                element.style.display = "block";
                                
                            }
                            return;
                            
                            
                        }
                    })

                }
                return;
            })
            }

        };
        
        return;
    });
    
    
    function insertRow() {
        input_admin();
        
        var i = 1;
        // var row1 = table1.insertRow(i);
        let row1 = document.createElement("tr")
        row1.setAttribute("id", inc1);
        if(localStorage.getItem('busesArray') == null){
            localStorage.setItem('busesArray', "[]")
        }
        let busesArray = JSON.parse(localStorage.getItem("busesArray"));
        inc1 = busesArray.length +1;
        const rowData= {
            id:inc1,
            model : inp[1],
            year : inp[2],
            plateNo : inp[3],
            vehicleReg : inp[4],
            engine : inp[5],
            seats : inp[6],
            ac : inp[7],
            wifi : inp[8],
            latestMaintenance : inp[9],
            latestOil : inp[10],
            trips : inp[11],
            drivers : inp[12]
        }
        busesArray.push(rowData);
        localStorage.setItem("busesArray",JSON.stringify(busesArray));
        
        
        // var cell1 = row1.insertCell(0);
        var cell1 = document.createElement("td")
        table2.appendChild(row1);
        row1.appendChild(cell1);
        cell1.innerHTML = inc1;
        for (i = 1; i < 13; i++) {
            // var cell1 = row1.insertCell(i);
            // cell1.innerHTML = inp[i];
            let text1 = document.createTextNode(inp[i]);
            let const1 =
            ` <td onclick="" id="${inc1}${i}">${text1.textContent}</td>
            `;
            row1.innerHTML += const1;
        }
        
        del++;
        let const2 =
        `<td> <i class='far fa-edit' id="edit(${del})"></i></td>              
        <td> <i class='fas fa-trash' id="delItem"></i></td>`;
        row1.innerHTML += const2;
        return inc1; 
    }
    
    
    // function mydel(){
        //     this.parentElement.parentElement.style.display="none";
        //   }
        // if(1 == 1) {
            //     for (let i = 1; i <= inc1; i++) {                             
                //         for (let j = 1; j < 13; j++) { 
                    //             table2.addEventListener("click", (eo) => {
                        //                 if(eo.target.className == "far fa-edit"){
                            //                     console.log(eo.target.className);
                            //                 }
                            //             })
                            //             let x = i.toString();
                            //             let y = j.toString();
                            //             let xy = x.concat(y);
                            //             let wew = document.getElementById(xy);
                            //             wew.addEventListener("dblclick", function () {
                                //                 let value1 = wew.innerHTML;
                                
                                //                 wew.innerHTML = `
                                //                 <td><input type='text' class='inputText' value='${value1}'></td>
                                //                 `
                                //                 const mainTable = document.getElementById("mainTable");
                                //                 let confirmBtn = document.createElement("button");
                                //                 confirmBtn.classList.add("confirmButton");
                                //                 confirmBtn.innerText='Confirm your change';
                                //                 mainTable.prepend(confirmBtn);
                                
                                //                 mainTable.addEventListener("click", (eo) => {
                                    //                     if (eo.target.className == "confirmButton"){
                                        //                         input1=document.querySelector('.inputText');
                                        //                         //  input1.style.display ="none";
                                        //                         const inputValue = input1.value;
                                        
                                        //                         input1.parentElement.innerHTML = `
                                        //                         <td>${inputValue}</td>
                                        //                         `;
                                        //                         eo.target.remove();
                                        
                                        
                                        
                                        //                     }
                                        //                 })
                                        //             })
                                        //         }
                                        //     }
                                        
                                        // }
                                        
                                        
                                        
                                        table2.addEventListener("click", (eo) => {
                                            if (eo.target.className == "fas fa-trash")
                                            {
                                                let trash = document.querySelectorAll(".fas");
                                                eo.target.parentElement.parentElement.remove();
                                                
                                            }
                                        })
                                        
                                        function clearFieldsMarks() {                                       // function to clear the fields inside text boxes
                                            for (i = 1; i < 13; i++) {
                                                document.getElementById('add' + i).value = '';
                                            }
                                            const container = document.querySelector('.table1');    // clear input boxes for the grades with empty strings
                                            while (container.lastChild) {                              // take last child element of the parent container
                                                container.removeChild(container.lastChild);
                                            }
                                        }
                                        //     function deleteRecord(id){
                                            //         if(confirm("are you sure?")){
                                                //             fetch('delete.php?=' + id,{
                                                    //                 method : 'DELETE'
                                                    //             })
                                                    //             .then((Response) => response.JSON())
                                                    //             .then((result) => {
                                                        //                 if(result.delete == 'success'){
                                                            //                     show_message('Success, Deleted!!!.');
                                                            //                     loadTable();
                                                            //                 }else{
                                                                //                     show_message('Error',"Can't delete");
                                                                //                 }
                                                                //             })
                                                                //             .catch((error) => {
                                                                    //                 show_message('Error', "Data not Deleted");
                                                                    //             })
                                                                    //     }
                                                                    // } 
                                                                    
                                                                    $(document).ready(function(){
                                                                        $("#btnDelete").click(function(e){
                                                                            e.preventDefault();
                                                                            
                                                                            var todelete = $("#Iddelete").val();
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url : "delete1.php",
                                                                                data: { TODELL : todelete}
                                                                                
                                                                            }).done(function(data){
                                                                                $("#table1").html(data);
                                                                            });
                                                                            
                                                                        });
                                                                    });
                                                                    $(document).ready(function(){
                                                                        $("td").click(function(eo){
                                                                            eo.preventDefault();
                                                                            if(eo.target.classList == "fas fa-trash"){
                                                                                var x = eo.target.id;
                                                                                var suffix = x.replace(/[^0-9]/g,''); 
                                                                                console.log(suffix);
                                                                                
                                                                                $.get('delete.php?id='+suffix, function(suffix){
                                                                                    
                                                                                });
                                                                            }
                                                                        });
                                                                    });
                                                                    $(document).ready(function(){
                                                                        $("#sbmtBtn").click(function(e){
                                                                            e.preventDefault();
                                                                            var selectedSbjct1 = $("#add1").val();
                                                                            var selectedSbjct2 = $("#add2").val();
                                                                            var selectedSbjct3 = $("#add3").val();
                                                                            var selectedSbjct4 = $("#add4").val();
                                                                            var selectedSbjct5 = $("#add5").val();
                                                                            var selectedSbjct6 = $("#add6").val();
                                                                            var selectedSbjct7 = $("#add7").val();
                                                                            var selectedSbjct8 = $("#add8").val();
                                                                            var selectedSbjct9 = $("#add9").val();
                                                                            var selectedSbjct10 = $("#add10").val();
                                                                            var selectedSbjct11 = $("#add11").val();
                                                                            var selectedSbjct12 = $("#add12").val();
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url : "index1.php",
                                                                                data: { student1 : selectedSbjct1,
                                                                                    student2 : selectedSbjct2,
                                                                                    student3 : selectedSbjct3,
                                                                                    student4 : selectedSbjct4,
                                                                                    student5 : selectedSbjct5,
                                                                                    student6 : selectedSbjct6,
                                                                                    student7 : selectedSbjct7,
                                                                                    student8 : selectedSbjct8,
                                                                                    student9 : selectedSbjct9,
                                                                                    student10 : selectedSbjct10,
                                                                                    student11 : selectedSbjct11,
                                                                                    student12 : selectedSbjct12
                                                                                }
                                                                            }).done(function(data){
                                                                                console.log(data);
                                                                                $("#table1 tr:last").after(data);
                                                                                $("#add1").val('');
                                                                                $("#add2").val('');
                                                                                $("#add3").val('');
                                                                                $("#add4").val('');
                                                                                $("#add5").val('');
                                                                                $("#add6").val('');
                                                                                $("#add7").val('');
                                                                                $("#add8").val('');
                                                                                $("#add9").val('');
                                                                                $("#add10").val('');
                                                                                $("#add11").val('');
                                                                                $("#add12").val('');
                                                                            });
                                                                            
                                                                        });
                                                                    });
                                                                    
                                                                    // $(td).click(function(e) {
                                                                        //     // does something
                                                                        //     alert(e.type); //will return you click
                                                                        // }
                                                                        </script>
                                                                        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
                                                                        <!-- Bootstrap tether Core JavaScript -->
                                                                        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                                                                        <script src="../../dist/js/app-style-switcher.js"></script>
                                                                        <!--Wave Effects -->
                                                                        <script src="../../dist/js/waves.js"></script>
                                                                        <!--Menu sidebar -->
                                                                        <script src="../../dist/js/sidebarmenu.js"></script>
                                                                        <!--Custom JavaScript -->
                                                                        <script src="../../dist/js/custom.js"></script>
                                                                        <!--This page JavaScript -->
                                                                        <!--chartis chart-->
                                                                        <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
                                                                        <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
                                                                        <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
                                                                        </body>
                                                                        </html>