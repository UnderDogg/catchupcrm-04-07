<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>{!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta id="token" name="token" value="tOQBniHoGadnGR0eY0eoAiFS5TRcvt038DnlksrX">
    <meta id="pusherKey" name="pusherKey" value="800bafbd0c0dcfab8a33">
    <meta id="userId" name="userId" value="1">

        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
{!! Theme::partial('theme.head') !!}
    <link href="./themes/ninjafront/css/libs.css" rel="stylesheet" type="text/css">
    <link href="./themes/ninjafront/css/secure.css" rel="stylesheet" type="text/css">
    <link href="./themes/ninjafront/css/icheck.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <link rel="icon" href="images/fav.ico" type="image/x-icon">


</head>
<body class="{{ $currentRoute or '' }}">


<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="logo">
            <img src="./images/clients.png" alt="lcrm" class="img-responsive"
                 style="margin:auto;width:100px;height:35px;">
        </a>

        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-navicon"></i>
            </a>
        </div>

        <div class="navbar-left">
            <span class="dropdown-title">Relations || Projects || Trade || Invoices || Bookkeeping</span>
        </div>
        <div class="navbar-right">
            <i class="fa fa-info" aria-hidden="true">Help</i>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
                            class="fa fa-fw fa-envelope-o black"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-messages table-striped">
                        <li class="dropdown-title">You have 0 new emails.</li>


                        <li class="dropdown-footer"><a href="#mailbox#/m/inbox">View Messages</a></li>
                    </ul>
                </li>

                <li class="dropdown notifications-menu">
                    <a href="##" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-bell-o black1"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="dropdown-title">You have 0 notifications</li>


                        <li class="dropdown-footer">
                        </li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="##" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="./images/hK0DqCD1Mm.jpg" alt="img" class="img-circle img-responsive pull-left" height="35" width="35">
                        <div class="riot">
                            <div>
                                Admin Doe
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="./images/hK0DqCD1Mm.jpg" alt="img" class="img-circle img-bor">
                            <p>Admin Doe</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="pad-3">
                            <a href="#profile">
                                <i class="fa fa-fw fa-user"></i>
                                My Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="#logout" class="text-danger">
                                    <i class="fa fa-fw fa-sign-out"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 924px;">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas" style="min-height: 986px;">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">

                <!-- / .navigation -->
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="##">
                            <img src="./images/hK0DqCD1Mm.jpg" alt="img" class="img-rounded">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">Admin Doe</h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="#mailbox#/m/inbox" title="Email">
                                        <i class="fa fa-fw fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#sales_order" title="Sales Order">
                                        <i class="fa fa-fw fa-usd"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#invoice" title="Invoices">
                                        <i class="fa fa-fw fa-file-text"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#setting" title="Settings">
                                        <i class="fa fa-fw fa-cog"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li class="active">
                        <a href="#">

                            <span class="nav-text"> Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#opportunity">

                            <span class="nav-text">Opportunities</span>
                        </a>
                    </li>
                    <li>
                        <a href="#lead">

                            <span class="nav-text">Leads</span>
                        </a>
                    </li>
                    <li>
                        <a href="#quotation">

                            <span class="nav-text">Quotations</span></a>
                    </li>
                    <li>
                        <a>
        <span class="nav-caret pull-right">
          <i class="fa fa-caret-down"></i>
        </span>

                            <span class="nav-text">Invoices</span>
                        </a>
                        <ul class="nav-sub collapse" aria-expanded="false">
                            <li>
                                <a href="#invoice">

                                    <span class="nav-text">Invoices</span></a>
                            </li>
                            <li>
                                <a href="#invoices_payment_log">

                                    <span class="nav-text">Payment Log</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#salesteam">

                            <span class="nav-text"> Sales Teams</span>
                        </a>
                    </li>
                    <li>
                        <a href="#call">

                            <span class="nav-text">Logged Calls</span>
                        </a>
                    </li>
                    <li>
                        <a href="#sales_order">

                            <span class="nav-text">Sales Order</span>
                        </a>
                    </li>
                    <li>
                        <a>
        <span class="nav-caret pull-right">
          <i class="fa fa-caret-down"></i>
        </span>

                            <span class="nav-text">Products</span>
                        </a>
                        <ul class="nav-sub collapse" aria-expanded="false">
                            <li>
                                <a href="#product">

                                    <span class="nav-text">Products</span></a>
                            </li>
                            <li>
                                <a href="#category">

                                    <span class="nav-text">Category</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#calendar">

                            <span class="nav-text">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a>
        <span class="nav-caret pull-right">
          <i class="fa fa-caret-down"></i>
        </span>

                            <span class="nav-text">Customers</span>
                        </a>
                        <ul class="nav-sub collapse" aria-expanded="false">
                            <li>
                                <a href="#company">

                                    <span class="nav-text">Company</span></a>
                            </li>
                            <li>
                                <a href="#customer">

                                    <span class="nav-text">Contact Person</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#meeting">

                            <span class="nav-text">Meetings</span>
                        </a>
                    </li>

                    <li>
                        <a href="#task">

                            <span class="nav-text"> Tasks</span>
                        </a>
                    </li>
                    <h4 class="text-white mar-5 border-b">Configuration</h4>
                    <li>
                        <a href="#contract">

                            <span class="nav-text">Contracts</span>
                        </a>
                    </li>
                    <li>
                        <a href="#staff">

                            <span class="nav-text">Staff</span>
                        </a>
                    </li>
                    <li>
                        <a href="#option">

                            <span class="nav-text">Options</span>
                        </a>
                    </li>
                    <li>
                        <a href="#email_template">

                            <span class="nav-text">Email templates</span>
                        </a>
                    </li>
                    <li>
                        <a href="#qtemplate">

                            <span class="nav-text">Quotations Template</span></a>
                    </li>
                    <li>
                        <a href="#setting">

                            <span class="nav-text">Settings</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-side right-padding">
        <div class="right-content">
        <div class="container">
            {!! Theme::content() !!}
        </div>

        <!-- /.content -->
        </div>
    </aside>
    <!-- /.right-side -->
</div>
<!-- /.right-side -->
<!-- ./wrapper -->
<!-- global js -->

{!! Theme::partial('theme.footer') !!}

{!! Theme::partial('theme.modal') !!}

{!! Theme::asset()->container('footer')->scripts() !!}
@yield('scripts')






<script src="./themes/ninjafront/js/libs.js" type="text/javascript"></script>
<script src="./themes/ninjafront/js/metisMenu.min.js" type="text/javascript"></script>
<script src="./themes/ninjafront/js/lcrm_app.js" type="text/javascript"></script>

@yield('layout-scripts')



<script src="./themes/ninjafront/js/icheck.min.js" type="text/javascript"></script>

<!-- Scripts -->


<script src="./themes/ninjafront/js/todolist.js"></script>


</body>
</html>