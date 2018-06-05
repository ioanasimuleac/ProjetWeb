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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../dist/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/css/style.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../dist/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                            <a  href= {{action('Bois\BoisController@read')}}><i class="fa fa-table fa-fw"></i> Les offerts </a>
                        </li>
                        <li>
                            <a href ={{action('Demander\DemanderController@readAll')}}><i class="fa fa-dashboard fa-fw"></i> Les demandes</a>
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

        <div class = "container">
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
                                                La journée internationale des forêts
                                            </h4>
                                        </div>
                                        <div >
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
                                                Transilvania Hunting & Fishing – TH&F
                                            </h4>
                                        </div>
                                        <div>
                                            <div class="panel-body">
                                                Pour visiter leur site d'acceuil, click <ins><a href="http://transilvaniahuntingandfishing.ro/">ici</a>.</ins> 
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
                            <img src="https://www.google.fr/search?biw=1536&bih=734&tbm=isch&sa=1&ei=-akWW_tcxofoBN21l4AG&q=TH%26F+Expozitie+pentru+v%C3%A2n%C4%83toare%2C+pescuit+sportiv+si+activit%C4%83ti+outdoor+de+agrement+si+sporturi+extreme&oq=TH%26F+Expozitie+pentru+v%C3%A2n%C4%83toare%2C+pescuit+sportiv+si+activit%C4%83ti+outdoor+de+agrement+si+sporturi+extreme&gs_l=img.3..0i30k1l2j0i8i30k1l8.16116.16978.0.17435.2.2.0.0.0.0.112.112.0j1.1.0..1..0...1c.1.64.img..1.1.111....0.GEi1hzCZQFA#imgrc=dz2OZvPW3RLWnM:" class ="img-responsive" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" alt="TH&F Expozitie pentru vânătoare, pescuit sportiv si activităti outdoor de agrement si sporturi extreme.">
                            <figcaption><strong>TH&F Exposition pour la chasse, la pêche sportive et pour les activités récréatives en plein air et pour les sports extrêmes.</strong></figcaption>
                        </figure>
                    </div>
                    <div class= "col-lg-6">
                        <figure>
                            <img src="https://www.google.fr/search?biw=1536&bih=734&tbm=isch&sa=1&ei=q6gWW_r2BeWL6ATazqCIBQ&q=Th%C3%A8me+2018+%3A+%C2%AB+For%C3%AAts+et+villes+durables+%C2%BB&oq=Th%C3%A8me+2018+%3A+%C2%AB+For%C3%AAts+et+villes+durables+%C2%BB&gs_l=img.3...237142.238711.0.238890.4.3.1.0.0.0.102.190.1j1.2.0....0...1c.1.64.img..1.0.0.0...0.r_hbvj6C_Dk#imgrc=aDfcRS5t-0hgVM:" class ="img-responsive" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" alt="Thème 2018 : « Forêts et villes durables »">
                            <figcaption><strong>Thème 2018 : « Forêts et villes durables »</strong></figcaption>
                        </figure>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
    <!-- /#wrapper -->
    <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <p>Polytech 2017/2018</p>
                    <p>@Simuleac Ioana-Veronica</p>
                </div>
            </div>
        </footer>
    <!-- jQuery -->
    <script src="../dist/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../dist/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../dist/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../dist/raphael/raphael.min.js"></script>
    <script src="../dist/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
