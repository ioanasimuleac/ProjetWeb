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
                            <a href = {{action('HomeController@indexVisitor')}}><i class="fa fa-dashboard fa-fw"></i> A props de nous</a>
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
                    <h1 class="page-header">Modification d'une demande</h1>
                </div>
            </div>
            <div class = "row">
                <form method="POST" action ={{action('Demander\DemanderController@updated')}} role = form >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name = "oldValueNomEntreprise" value ={{$entreprise[0]->nomentreprise}}>
                    <div class = "col-lg-4">
                        <div class = "panel panel-default">
                            <div class="panel-heading">
                                Qui vous êtes?
                            </div>
                            <div class = "panel-body">
                                <div class = "form-group">
                                    <label>Le nom d'entreprise</label>
                                    <input class="form-control" name="nomEntreprise" value={{$entreprise[0]->nomentreprise}}>
                                </div>
                                <div class = "form-group">
                                    <label>Ville</label>
                                    <input class="form-control" name="villeEntreprise" value={{$entreprise[0]->villeentreprise}}>
                                </div>
                                <div class = "form-group">
                                    <label>Rue</label>
                                    <input class="form-control" name="rueEntreprise" value={{$entreprise[0]->rueentreprise}}>
                                </div>
                                <div class = "form-group">
                                    <label>Code Postale</label>
                                    <input class="form-control" name="codeEntreprise" value={{$entreprise[0]->codeentreprise}}>
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
                                    <input class="form-control" name="nomRep" value={{$representant[0]->nomrep}}>
                                </div>
                                <div class = "form-group">
                                    <label>Le prenom du representant</label>
                                    <input class="form-control" name="prenomRep" value={{$representant[0]->prenomrep}}>
                                </div>
                                <div class = "form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="emailRep" value={{$representant[0]->email}}>
                                </div>
                                <div class = "form-group">
                                    <label>Téléphone</label>
                                    <input class="form-control" name="telephoneRep" value={{$representant[0]->telephone}}>
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
                                    <input class="form-control" name="quantite" value={{$demander[0]->quantite}}>
                                </div>
                                <button type="submit" class="btn btn-success center-block">Modifier</button>
                            </div>
                        </div>
                    </div>
                </form>
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
