<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema ARM | Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" />

    <link rel="stylesheet" href="{{ asset('prettify/prettify.css') }}" />

    @yield('css');

    <!--[if lte IE 8]>
    <script language="javascript" type="text/javascript" src="{{ asset('js/excanvas.min.js') }}"></script><![endif]-->

</head>

<body>

<div class="mainwrapper">

    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">

        <div class="logopanel">
            <h1><a href="dashboard.html">ISI <span>Rentas</span></a></h1>
        </div><!--logopanel-->

        <div class="datewidget">Hoy es {{ date('d-m-Y') }}</div>

        <div class="searchwidget">
            <form action="results.html" method="post">
                <div class="input-append">
                    <input type="text" class="span2 search-query" placeholder="Search here...">
                    <button type="submit" class="btn"><span class="icon-search"></span></button>
                </div>
            </form>
        </div><!--searchwidget-->

        <div class="leftmenu">
            <ul class="nav nav-tabs nav-stacked">
                <li class="nav-header">Menú Principal</li>
                <li class="active"><a href="{{ route('home') }}"><span class="icon-align-justify"></span> Inicio</a></li>
                <li class="dropdown"><a href=""><span class="icon-picture"></span> Clientes</a>
                    <ul>
                        <li><a href="{{ route('customers.index') }}"> Clientes</a></li>
                        <li><a href="{{ route('prospects.index') }}">Prospectos</a></li>
                        <li><a href="bootstrap.html">Contratos</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('sellers.index') }}"><span class="icon-briefcase"></span> Vendedores</a></li>
                <li><a href="{{ route('machines.index') }}"><span class="icon-th-list"></span> Maquinaria</a>
                    <ul>
                        <li><a href="table-static.html">Mantenimiento</a></li>
                    </ul>
                </li>
                <li><a href="typography.html"><span class="icon-font"></span> Cotizaciones</a></li>
                <li><a href="charts.html"><span class="icon-signal"></span> Proveedores</a></li>
                <li><a href="messages.html"><span class="icon-envelope"></span> Administración</a></li>
                <li class="dropdown"><a href=""><span class="icon-pencil"></span> Sistema</a>
                    <ul>
                        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--leftmenu-->

    </div><!--mainleft-->
    <!-- END OF LEFT PANEL -->

    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
        <div class="headerpanel">
            <a href="" class="showmenu"></a>

            <div class="headerright">
                <div class="dropdown notification">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="{{ route('logout') }}">
                        <span class="iconsweets-globe iconsweets-white"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Notifications</li>
                        <li>
                            <a href="">
                                <strong>3 people viewed your profile</strong><br />
                                <img src="img/thumbs/thumb1.png" alt="" />
                                <img src="img/thumbs/thumb2.png" alt="" />
                                <img src="img/thumbs/thumb3.png" alt="" />
                            </a>
                        </li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Jack</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Daniel</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li><a href=""><span class="icon-user"></span> <strong>Bruce</strong> is now following you <small class="muted"> - 2 days ago</small></a></li>
                        <li class="viewmore"><a href="">View More Notifications</a></li>
                    </ul>
                </div><!--dropdown-->

                <div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="{{ route('logout') }}">Hi, ThemePixels! <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li><a href=""><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href=""><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div><!--dropdown-->

            </div><!--headerright-->

        </div><!--headerpanel-->
        <div class="breadcrumbwidget">
            <ul class="breadcrumb">
                <li><a href="dashboard.html">Home</a> <span class="divider">/</span></li>
                <li class="active">Dashboard</li>
            </ul>
        </div><!--breadcrumbwidget-->

        @yield('content')

    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->

    <div class="clearfix"></div>

    <div class="footer">
        <div class="footerleft">Katniss Premium Admin Template v1.0</div>
        <div class="footerright">&copy; ThemePixels - <a href="http://twitter.com/themepixels">Follow me on Twitter</a> - <a href="http://dribbble.com/themepixels">Follow me on Dribbble</a></div>
    </div><!--footer-->


</div><!--mainwrapper-->

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('prettify/prettify.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui-1.9.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flot.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<!-- Custom Scripts -->
@yield('scripts')

</body>
</html>
