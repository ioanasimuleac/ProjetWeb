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
                    <a class="navbar-brand"  href = {{action('HomeController@indexVisitor')}}>RomSilva</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href = {{action('HomeController@indexVisitor')}}> A propos de nous</a></li>
                    <li class = "active"><a href = "#"> Les offres</a>
                    <li><a href= {{action('EventsController@eventsVisitor')}}> Evenements </a>
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
        <div class = "container">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Les offres</h1>
                    </div>
                </div>
                 <div class = "row">
                    <div class = "col-lg-8">
                    </div>
                     <div class = "col-lg-4">
                        <a href={{action('Demander\DemanderController@create')}}  type="button" class="btn btn-primary btn-lg">Faire une demande</a>

                    </div>
                </div>
                <br>
                <div class = "row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bois de feu
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Bois</th>
                                                <th>Volume (m3)</th>
                                                <th>Diametre (m)</th>
                                                <th>Prix per unite(€)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($foc as $lemn)
                                            <tr>
                                                <td>{{$lemn->nombois}}</td>
                                                <td>{{$lemn->volum}}</td>
                                                <td>{{$lemn->diametre}}</td>
                                                <td>{{$lemn->prixunite}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bois de travail
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Bois</th>
                                                <th>Volume (m3)</th>
                                                <th>Diametre (m)</th>
                                                <th>Prix per unite(€)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($munca as $lemn)
                                            <tr>
                                                <!--<td>{{$lemn->idbois}}</td>-->
                                                <td>{{$lemn->nombois}}</td>
                                                <td>{{$lemn->volum}}</td>
                                                <td>{{$lemn->diametre}}</td>
                                                <td>{{$lemn->prixunite}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
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
