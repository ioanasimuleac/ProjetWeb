<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RomSilva</title>

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
                    <a href= {{action('Bois\BoisController@read')}}> Les offerts </a>
                    <li><a href = {{action('Demander\DemanderController@readAll')}}> Les demandes</a>
                    <li><a href= {{action('EventsController@events')}}> Evenements </a>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Enregistrer') }}</a></li>
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
                        <h1 class="page-header">Création d'une offres</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class = "panel panel-default">
                            <div class="panel-heading">
                                Créer une offre
                            </div>
                            <div class = "panel-body">
                                <form method="POST" action ={{action('Bois\BoisController@created')}} >
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Le type de bois</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="typeBois" id="optionsRadios1" value="bois de feu" checked>Bois de feu
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="typeBois" id="optionsRadios2" value="bois de travail">Bois de travail
                                            </label>
                                        </div>
                                    </div>
                                    <div class = "form-group">
                                        <label>Le nom de bois</label>
                                        <input class="form-control" name="nomBois" placeholder="Exemple: hêtres">
                                    </div>
                                    <div class="form-group">
                                        <label>Le diametre de bois (en métre)</label>
                                        <input class="form-control" name = "diametreBois" placeholder="Exemple: 24">
                                    </div>
                                    <div class="form-group">
                                        <label>Le volum de bois (en métre cube)</label>
                                        <input class="form-control" name="volumBois" placeholder="Exemple: 2000">
                                    </div>
                                    <div class = "form-group">
                                       <label>Le prix de bois (en euro)</label>
                                        <input class="form-control" name="prixBois" placeholder="Exemple: 240">
                                    </div>
                                    <button type="submit" class="btn btn-success center-block">Créer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class = "col-lg-4"></div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
