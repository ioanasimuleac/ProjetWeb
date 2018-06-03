<!DOCTYPE html>
<html>

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
                <a class="navbar-brand" href="#">RomSilva</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <!--li><a class="nav-link" href="{{ route('register') }}">{{ __('Enregistrer') }}</a></li-->
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
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> A propos de nous</a>
                        </li>
                        <li>
                            <a href= {{action('Bois\BoisController@readVisitor')}}><i class="fa fa-table fa-fw"></i> Les offerts </a>
                        </li>
                        <li>
                            <a href= {{action('EventsController@eventsVisitor')}}><i class="fa fa-edit fa-fw"></i> Evenements </a>
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
                    <h1 class="page-header">A propos de nous</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class = "col-lg-8">
                    <p>
                        Selon l'inventaire forestier national (2006-2011), la forêt en Roumanie couvre 17 millions d'hectares soit 170 000 km2. Cela correspond à un taux de boisement de 29,7% du territoire proche du taux mondial et qui est en progression. Elle comprend 136 espèces d'arbres.
                    </p>
                    <h3>Essences principales</h3>
                    <hr>
                    <p>
                        En Roumanie, selon l'édition 2016 de l'inventaire de ROMSILVA, le volume sur pied est de 2,6 milliards de mètres cubes. Les feuillus en représentent 64% (1664 millions de mètres cubes) et les conifères 36% (936 millions de mètres cubes).
                    </p>
                    <p>
                        Le volume se répartit entre:
                    </p>
                    <div>
                        <div class="col-lg-6">
                            <ul>
                                <li>le chêne pédonculé, 11% ;</li>
                                <li>le chêne rouvre, 11% ;</li>
                                <li>le hêtre, 11% ;</li>
                                <li>le chêne pubescent, 4% ;</li>
                                <li>le charme, 4% ;</li>
                                <li>le frêne, 4% ;</li>
                                <li>le chêne vert, 1% ;</li>
                            </ul> 
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>les autres feuillus, 12% ;</li>
                                <li>l'épicéa commun, 8 %;</li>
                                <li>le sapin pectiné, 8 %;</li>
                                <li>le pin sylvestre, 6 %;</li>
                                <li>le pin maritime, 5 %;</li>
                                <li>le douglas, 4 %;</li>
                                <li>les autres conifères, 5 %.</li>
                            </ul>
                        </div>
                    </div>
                    <h3>La propriété de la forêt en Roumanie</h3>
                    <hr>
                    <p>
                        Les trois quarts de la forêt roumaine represente la propriété de l'État. 10% sont propriétés privées. 
                        Ces forêts publiques sont gérées par l'Office national des forêts.
                    </p>
                    <h4>La forêt privée</h4>. 
                    <p>
                        La surface de la forêt public est 120 070 km2 (un peu plus de 12 millions d’ha), soit presque 3/4 de la surface forestière (75%), et 71% du volume sur pied (1,7 milliard de mètres cubes).
                    </p>
                    <h4>La forêt domaniale</h4>
                    <p>
                       Les forêts privées ont généralement des origines anciennes (forêts royales, de chasses et de rentes, du clergé, ou anciens domaines de chasse ou seigneuriaux, souvent héritées de biens saisis à l'époque de la Révolution). 
                    </p>
                    <h3>Notre structure:</h3>
                    <hr>
                    <div class = "col-lg-6">
                        <p>Le chef: Dupont Paul</p>
                        <p>La surface: 13508 ha</p>
                        <p>L'accessibilité: 70 km</p>
                        <p>Le relief: montagne</p>
                    </div>
                    <div class = "col-lg-6">
                        <p>La composition:</p>
                        <ul>
                            <li>l'épicéa: 77% ;</li>
                            <li>le sapin, 12% ;</li>
                            <li>le hêtre, 10% ;</li>
                            <li>les autres, 1%.</li>
                        </ul>
                    </div>
                </div>
                <div class = "col-lg-4">
                    <figure>
                        <img src="../img/romania.png" class ="img-responsive" alt="Une image avec le pays vue de satellite!">
                        <figcaption>Image satellitale (août 2002), la forêt apparaît (vert foncé) couvre en 2016 10 millions d’hectares soit 29% du territoire</figcaption>
                    </figure>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <p>Polytech 2017</p>
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