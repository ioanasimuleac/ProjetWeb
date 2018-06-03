<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RomSilva</title>

    <!-- Bootstrap Core CSS -->
    <link href="/../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/../dist/css/style.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href = {{action('HomeController@index')}}>RomSilva</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Enregistrer') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href= {{action('Bois\BoisController@read')}}><i class="fa fa-table fa-fw"></i> Les offerts </a>
                        </li>
                        <li>
                            <a href = {{action('Demander\DemanderController@readAll')}}><i class="fa fa-dashboard fa-fw"></i>Les demandes</a>
                        </li>
                        <li>
                            <a href= {{action('EventsController@events')}}><i class="fa fa-edit fa-fw"></i> Evenements </a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modifier d'une offres</h1>
                </div>
            </div>
            <div class = "row">
                <div class = "col-lg-4"></div>
                <div class="col-lg-4">
                    <div class = "panel panel-default">
                        <div class="panel-heading">
                            Modifier une offre
                        </div>
                        <div class = "panel-body">
                            <form method="POST" action ={{action('Bois\BoisController@updated')}}>
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <input type = "hidden" name = "idbois" value = {{$item[0]->idbois}}>
                                <div class = "form-group">
                                    <label>Le nom de bois</label>
                                    <input class="form-control" name="nomBois"  value={{$item[0]->nombois}}>
                                </div>
                                <div class="form-group">
                                    <label>Le diametre de bois (en métre)</label>
                                    <input class="form-control" name = "diametreBois" value={{$item[0]->diametre}}>
                                </div>
                                <div class="form-group">
                                    <label>Le volum de bois (en métre cube)</label>
                                    <input class="form-control" name="volumBois" value={{$item[0]->volum}}>
                                </div>
                                <div class = "form-group">
                                   <label>Le prix de bois (en euro)</label>
                                    <input class="form-control" name="prixBois" value={{$item[0]->prixunite}}>
                                </div>
                                <button type="submit" class="btn btn-success center-block">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4"></div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/../vendor/raphael/raphael.min.js"></script>
    <script src="/../vendor/morrisjs/morris.min.js"></script>
    <script src="/../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/../dist/js/sb-admin-2.js"></script>

</body>

</html>
