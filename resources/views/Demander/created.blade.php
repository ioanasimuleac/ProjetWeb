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
                      <a class="navbar-brand"  href = {{action('HomeController@indexVisitor')}}>RomSilva</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li><a href = {{action('HomeController@indexVisitor')}}> A propos de nous</a></li>
                      <li><a href= {{action('Bois\BoisController@readVisitor')}}> Les offerts </a> </li>
                      <li><a href= {{action('EventsController@eventsVisitor')}}> Evenements </a></li>
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
        <div class = "container">
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
