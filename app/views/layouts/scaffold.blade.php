<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SUGER</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/sb-admin.css" rel="stylesheet">
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/dados">SUGER</a>
                </div>
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> PERFIL </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> CONFIG. </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ URL::to('logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="">
                            <a href="/dados"><i class="fa fa-fw fa-dashboard"></i> <b>INÍCIO</b></a>
                            @if(Request::segment(1) == 'dados')
                            {{{Session::put('id', Request::segment(2))}}}
                            @endif
                        </li>
                        <li>
                            <a href="/dados/{{Session::get('id')}}"><i class="glyphicon glyphicon-user"></i> <b>DADOS PESSOAIS</b></a>
                        </li>
                        <li>
                            <a href="/documentacaos/{{Session::get('id')}}"><i class="glyphicon glyphicon-folder-open"></i> <b>DOCUMENTAÇÕES</b></a>
                        </li>
                        <li>
                            <a href="/funcionais/{{Session::get('id')}}"><i class="glyphicon glyphicon-briefcase"></i> <b>DADOS FUNCIONAIS</b></a>
                        </li>
                        <li>
                            <a href="/habilitacos/{{Session::get('id')}}"><i class="glyphicon glyphicon-star"></i> <B>HABILITAÇÕES</B></a>
                        </li>
                        <li>
                            <a href="/escolaridades/{{Session::get('id')}}"><i class="glyphicon glyphicon-book"></i> <B>DA. ESCOLARIDADE</B></a>
                        </li>
                        <li>
                            <a href="/superiors/{{Session::get('id')}}"><i class="glyphicon glyphicon-star"></i> <B>FORMAÇÃO SUPERIOR</B></a>
                        </li>
                        <li>
                            <a href="/diciplinas/{{Session::get('id')}}"><i class="glyphicon glyphicon-align-justify"></i> <B>DICIPLINAS</B></a>
                        </li>
                        <li>
                            <a href="/enderecos/{{Session::get('id')}}"><i class="glyphicon glyphicon-map-marker"></i> <B><B>ENDEREÇO</B></B></a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    @yield('main')
                </div>
            </div>
        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/jquery.mask.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/config.js"></script>
    </body>
</html>