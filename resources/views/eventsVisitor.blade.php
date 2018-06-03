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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/css/style.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand"  href = {{action('HomeController@indexVisitor')}}>RomSilva</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <!--li><a class="nav-link" href="{{ route('register') }}">{{ __('Enregistrer') }}</a></li!-->
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
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href = {{action('HomeController@indexVisitor')}}><i class="fa fa-dashboard fa-fw"></i> A propos de nous</a>
                        </li>
                        <li>
                            <a  href= {{action('Bois\BoisController@readVisitor')}}><i class="fa fa-table fa-fw"></i> Les offerts </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Evenements </a>
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
                    <h1 class="page-header">Evenements</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class = "row">
                    <div class = "col-lg-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">La journée internationale des forêts</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <strong>La journée internationale des forêts</strong> qui a lieu la première fois <strong>le 21 mars</strong> 2013 a été établie par la résolution de <strong>l'Assemblée générale des Nations</strong> unies le 28 novembre 2012. Elle sera célébrée chaque année le 21 mars.
                                            Cette journée est destinée à être l'une des plates-formes mondiales de premier plan dans le monde pour les personnes ayant un intérêt dans les forêts et le changement climatique pour partager leurs points de vue et travailler ensemble pour assurer que les forêts soient convenablement intégrées dans des stratégies de changement climatique et d'atténuation d'adaptations futures.
                                            <a href = "http://www.un.org/fr/events/forestsday/"><ins>Pour visiter leur site d'acceuil, click ici.</ins></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Transilvania Hunting & Fishing – TH&F</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ins>Pour visiter leur site d'acceuil, click <a href="http://transilvaniahuntingandfishing.ro/">ici</a>.</ins> 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Item #3</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                    </div>
                                </div>
                         </div>
                    </div>
                </div>
            <!-- /.row -->
            <div class="row">
                <div class = "col-lg-6">
                    <figure>
                        <img src="../img/huntingAndFishing.jpg" class ="img-responsive" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" alt="TH&F Expozitie pentru vânătoare, pescuit sportiv si activităti outdoor de agrement si sporturi extreme.">
                        <figcaption><strong>TH&F Exposition pour la chasse, la pêche sportive et pour les activités récréatives en plein air et pour les sports extrêmes.</strong></figcaption>
                    </figure>
                </div>
                <div class= "col-lg-6">
                    <figure>
                        <img src="../img/internationalDayOFForest.jpg" class ="img-responsive" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" alt="Thème 2018 : « Forêts et villes durables »">
                        <figcaption><strong>Thème 2018 : « Forêts et villes durables »</strong></figcaption>
                    </figure>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <p>Polytech 2017-2018</p>
                    <p>@Simuleac Ioana-Veronica</p>
                </div>
            </div>
        </footer>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
