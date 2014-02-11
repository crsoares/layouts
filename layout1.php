<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8" >
    <title>Layout 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="bootstrap/css/template.css" media="screen" rel="stylesheet" >

    <!-- HTML5 compativel com IE8 -->
    <!--[if 1t IE 9]>
        <script src="bootstrap/js/html5shiv.js"></script>
        <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-ex1-collapse">
                    <span class="sr-only">Navegacao</span>
                    <navbar class="icon-bar"></navbar>
                    <navbar class="icon-bar"></navbar>
                    <navbar class="icon-bar"></navbar>
                </button>
                <a href="#" class="brand"><img src="bootstrap/img/logo_cab.gif" alt="conadmin" class="img-responsive"></a>
            </div><!-- fim div navbar-header -->
            <div class="hidden-xs">
                <span class="texto-bloco pull-left">
                    <b>DESENVOLVIMENTO - ConAdmin - Sistema Administrativo de Qualidade v. 4.0.4 Release</b> <br>
                    Loja: Desenvolvimento (2014-01-13) - Usuário: Proserver Telecomunicações LTDA
                </span>
                <span class="texto-bloco pull-right" style="text-align: right;">
                    © CNT Sistemas <br>
                    Último Acesso: 11/02/2014 16:27:17 <br>
                    [Sair]
                </span>
            </div>
        </div><!-- fim div container -->
    </div><!-- fim div navbar -->

    <div class="container" style="margin-top: 65px;">
        <h4 style="margin-left: 34px;">Menu Principal</h4>
        <div class="row">
            <div class="col-md-2">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="glyphicon glyphicon-folder-close"></span>
                                    Content
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-pencil text-primary"></span>
                                            <a href="#">Articles</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-flash text-success"></span>
                                            <a href="#">News</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="glyphicon glyphicon-user"></span>
                                    Account
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">Change Password</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Notifications</a>
                                            <span class="label label-info">5</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- fim div container -->

    <script src="bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>