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
    
    <!--link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/morrisjs/morris.css" rel="stylesheet">
    <link href="../dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../dist/css/style.css" rel="stylesheet"-->
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
                </li>
                <!-- /.dropdown -->
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href = {{action('HomeController@indexVisitor')}}> A propos de nous</a>
                        </li>
                        <li>
                            <a href= {{action('Bois\BoisController@readVisitor')}}> Les offerts </a>
                        </li>
                        <li>
                            <a href= {{action('EventsController@eventsVisitor')}}> Evenements </a>
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
                        <h1 class="page-header">Création d'une demande</h1>
                    </div>
                </div>
                <div class = "row">
                    <form method="POST" action ={{action('Demander\DemanderController@created')}} role = form >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class = "col-lg-4">
                            <div class = "panel panel-default">
                                <div class="panel-heading">
                                    Qui vous êtes?
                                </div>
                                <div class = "panel-body">
                                    <div class = "form-group">
                                        <label>Le nom d'entreprise</label>
                                        <input class="form-control" name="nomEntreprise" placeholder="Exemple: AllTree">
                                    </div>
                                    <div class = "form-group">
                                        <label>Ville</label>
                                        <input class="form-control" name="villeEntreprise" placeholder="Exemple: Montpellier">
                                    </div>
                                    <div class = "form-group">
                                        <label>Rue</label>
                                        <input class="form-control" name="rueEntreprise" placeholder="Exemple: Saint-Michel">
                                    </div>
                                    <div class = "form-group">
                                        <label>Code Postale</label>
                                        <input class="form-control" name="codeEntreprise" placeholder="Exemple: 30690">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class = "panel panel-default">
                                <div class="panel-heading">
                                    Le representant de votre entreprise
                                </div>
                                <div class = "panel-body">
                                    <div class = "form-group">
                                        <label>Le nom du representant</label>
                                        <input class="form-control" name="nomRep" placeholder="Exemple: Dupont">
                                    </div>
                                    <div class = "form-group">
                                        <label>Le prenom du representant</label>
                                        <input class="form-control" name="prenomRep" placeholder="Exemple: Hugo">
                                    </div>
                                    <div class = "form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="emailRep" placeholder="Exemple: duponthugo@truc.com">
                                    </div>
                                    <div class = "form-group">
                                        <label>Téléphone</label>
                                        <input class="form-control" name="telephoneRep" placeholder="Exemple: 0602020202">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class = "col-lg-4">
                            <div class = "panel panel-default">
                                <div class="panel-heading">
                                    La demande
                                </div>
                                <div class = "panel-body">
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
                                        <label>La quantité de bois (le volum de vois desiré, en metre cube)</label>
                                        <input class="form-control" name="quantite" placeholder="Exemple: 2540">
                                    </div>
                                    <button type="submit" class="btn btn-success center-block">Créer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
