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

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../dist/css/style.css" rel="stylesheet">
    
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
                <a class="navbar-brand"  href = {{action('HomeController@index')}}>ProjetWeb</a>
            </div>
            <!-- /.navbar-header -->

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
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href = {{action('HomeController@indexVisitor')}}><i class="fa fa-dashboard fa-fw"></i> A propos de nous</a>
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
                    <h2 class="page-header">Votre demande</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="loadertext">
                            Votre demande est formé par: <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class = "col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Votre demande
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nom d'entreprise</th>
                                            <th>Ville</th>
                                            <th>Rue</th>
                                            <th>Code postale</th>
                                            <th>Nom represetant</th>
                                            <th>Prenom represetant</th>
                                            <th>Email represetant</th>
                                            <th>Telephone represetant</th>
                                            <th>Quantité</th>
                                            <th>Type désiré</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$afisaj[4] }}</td>
                                            <td>{{$afisaj[6] }}</td>
                                            <td>{{$afisaj[5] }}</td>
                                            <td>{{$afisaj[7] }}</td>
                                            <td>{{$afisaj[0] }}</td>
                                            <td>{{$afisaj[1] }}</td>
                                            <td>{{$afisaj[2] }}</td>
                                            <td>{{$afisaj[3] }}</td>
                                            <td>{{$afisaj[9] }}</td>
                                            <td>{{$afisaj[8] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <div class = "row">
                <!--  -->
                <a href={{action('Demander\DemanderController@delete', ['id'=>$afisaj[4]])}} title="Supprimer" type="button" class="btn btn-danger"  data-toggle="modal">
                    Supprimer
                </a>
                <a href = {{action('Demander\DemanderController@update',['id'=>$afisaj[4]])}} title="Modifier" class="btn btn-warning">
                    Modifier
                </a>
                <a href = {{action('Bois\BoisController@readVisitor',['id'=>$afisaj[4]])}} title="Modifier" class="btn btn-primary">
                    OK
                </a>
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