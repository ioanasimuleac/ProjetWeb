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
                    <li><a href = {{action('Bois\BoisController@read')}}> Les offres</a></li>
                    <li class= "active"><a href="#"> Les demandes </a></li>
                    <li> <a href= {{action('EventsController@events')}}> Evenements </a></li>
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
        
        <div class = "containerr">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Les demandes</h1>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Demandes
                            </div>
                            <!-- /.panel-heading -->
                            <div class = "panel-body">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nom entreprise</th>
                                                    <th>Type de bois</th>
                                                    <th>Quantité</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($demandes as $d)
                                                    <input type = "hidden" value = >
                                                    <tr>
                                                        <td>{{$d->nomentreprise}}</td>
                                                        <td>{{$d->nomtypebois}}</td>
                                                        <td>{{$d->quantite}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        <!-- /.panel -->
                        </div>
                    </div>
                    <div class = "col-lg-6"></div>
                    <div class = "row">
                    <div class = "col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Detailles
                            </div>
                            <!-- /.panel-heading -->
                            <div class = "panel-body">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nom entreprise</th>
                                                    <th>Rue pour l'entreprise</th>
                                                    <th>Code postale</th>
                                                    <th>Nom Representant</th>
                                                    <th>Prenom Representant</th>
                                                    <th>Email</th>
                                                    <th>telephone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($detalii as $de)
                                                    <tr>
                                                        <td>{{$de->nomentreprise}}</td>
                                                        <td>{{$de->rueentreprise}}</td>
                                                        <td>{{$de->codeentreprise}}</td>
                                                        <td>{{$de->nomrep}}</td>
                                                        <td>{{$de->prenomrep}}</td>
                                                        <td>{{$de->email}}</td>
                                                        <td>{{$de->telephone}}</td>
                                                    </tr>
                                                 @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>    
                            </div>
                            <!-- /.panel -->
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#page-wrapper -->
        </div>
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
