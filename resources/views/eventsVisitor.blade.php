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
     <!-- Bootstrap Core CSS -->
    <!--link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/morrisjs/morris.css" rel="stylesheet">
    <link href="../dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../dist/css/style.css" rel="stylesheet"-->

</head>

<body>
    <div class = "container">
        <div class ="row">
            <br>
        </div>
            <!-- Navigation -->
            <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand"  href = {{action('HomeController@index')}}>RomSilva</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li><a href = {{action('HomeController@indexVisitor')}}> A propos de nous</a></li>
                      <li><a  href= {{action('Bois\BoisController@readVisitor')}}> Les offerts </a></li>
                      <li class="active"><a href="#">Evenements</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                          @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <!--li><a class="nav-link" href="{{ route('register') }}">{{ __('Enregistrer') }}</a></li-->
                        @else
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  
                                {{ __('Logout') }} </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                            </form>
                        @endguest
                    </ul>
                  </div>
                </nav>
        </div>
        <div class ="container">
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
                                        <div>
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
                                        <div>
                                            <div class="panel-body">
                                                <ins><a href="http://transilvaniahuntingandfishing.ro/">Pour visiter leur site d'acceuil, click ici.</a></ins> 
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
                            <img src="http://transilvaniahuntingandfishing.ro/wp-content/uploads/2017/03/1-1.jpg" class ="img-responsive" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" alt="TH&F Expozitie pentru vânătoare, pescuit sportiv si activităti outdoor de agrement si sporturi extreme.">
                            <figcaption><strong>TH&F Exposition pour la chasse, la pêche sportive et pour les activités récréatives en plein air et pour les sports extrêmes.</strong></figcaption>
                        </figure>
                    </div>
                    <div class= "col-lg-6">
                        <figure>
                            <img src="http://www.journee-internationale-des-forets.fr/images/actualites/Banniere_JIF_2018.png" class ="img-responsive" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" alt="Thème 2018 : « Forêts et villes durables »">
                            <figcaption><strong>Thème 2018 : « Forêts et villes durables »</strong></figcaption>
                        </figure>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
        </div>
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
