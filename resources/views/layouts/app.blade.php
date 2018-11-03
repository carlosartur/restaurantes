<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
    @stack('style')

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ route('admin.home') }}">ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ \Auth::user()->name }}</div>
                    <div class="email">{{ \Auth::user()->email }}</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu principal</li>

                    <li class="{{ stripos(Route::currentRouteName(), "category") !== false ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">style</i>
                            <span>Categorias</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Route::currentRouteName() == "admin.category.retrieve" ? 'active' : '' }}">
                                <a href="{{ route("admin.category.retrieve") }}">
                                    Buscar
                                </a>
                            </li>
                            <li class="{{ Route::currentRouteName() == "admin.category.add" ? 'active' : '' }}">
                                <a href="{{ route("admin.category.add") }}">
                                    Adicionar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ stripos(Route::currentRouteName(), "size") !== false ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">zoom_out_map</i>
                            <span>Tamanhos</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Route::currentRouteName() == "admin.size.retrieve" ? 'active' : '' }}">
                                <a href="{{ route("admin.size.retrieve") }}">
                                    Buscar
                                </a>
                            </li>
                            <li class="{{ Route::currentRouteName() == "admin.size.add" ? 'active' : '' }}">
                                <a href="{{ route("admin.size.add") }}">
                                    Adicionar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ stripos(Route::currentRouteName(), "flavour") !== false ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">timelapse</i>
                            <span>Sabores</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Route::currentRouteName() == "admin.flavour.retrieve" ? 'active' : '' }}">
                                <a href="{{ route("admin.flavour.retrieve") }}">
                                    Buscar
                                </a>
                            </li>
                            <li class="{{ Route::currentRouteName() == "admin.flavour.add" ? 'active' : '' }}">
                                <a href="{{ route("admin.flavour.add") }}">
                                    Adicionar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ stripos(Route::currentRouteName(), "ingredient") !== false ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">timelapse</i>
                            <span>Ingredientes</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Route::currentRouteName() == "admin.ingredient.retrieve" ? 'active' : '' }}">
                                <a href="{{ route("admin.ingredient.retrieve") }}">
                                    Buscar
                                </a>
                            </li>
                            <li class="{{ Route::currentRouteName() == "admin.ingredient.add" ? 'active' : '' }}">
                                <a href="{{ route("admin.ingredient.add") }}">
                                    Adicionar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="header">Pedido por telefone/pessoalmente</li>
                    <li class="{{ Route::currentRouteName() == "admin.order_person" ? 'active' : '' }}">
                        <a href="{{ route("admin.order_person") }}">
                            <i class="material-icons">person</i>
                            <span>
                                Cadastrar pessoa
                            </span>
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName() == "admin.cart" ? 'active' : '' }}">
                        <a href="{{ route("admin.cart") }}">
                            <i class="material-icons">shopping_cart</i>
                            <span>   
                                Carrinho
                            </span>
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName() == "admin.orders" ? 'active' : '' }}">
                        <a href="{{ route("admin.orders") }}">
                            <i class="material-icons">view_list</i>
                            <span>   
                                Pedidos
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);"></a>Coderslab.
                </div>
                <div class="version">
                    <b>Versão: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Vermelho</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Rosa</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Roxo</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Roxo escuro</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Índigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Azul</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Azul claro</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Ciano</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Verde-azulado</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Verde</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Verde claro</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Amarelo limão</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Amarelo</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Ambar</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Laranja</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Laranja escuro</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Marrom</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Cinza</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Azul Acinzentado</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Preto</span>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                @yield('content')
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    @stack('scripts')
</body>

</html>
