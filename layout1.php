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

    <script src="bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>

    <!--<div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-ex1-collapse">
                    <span class="sr-only">Navegacao</span>
                    <navbar class="icon-bar"></navbar>
                    <navbar class="icon-bar"></navbar>
                    <navbar class="icon-bar"></navbar>
                </button>
                <a href="#" class="brand"><img src="bootstrap/img/logo_cab.gif" alt="conadmin" class="img-responsive"></a>
            </div>
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
        </div>
    </div>-->







     <div class="container">
         <div class="row">
             <div class="col-md-12 col-sm-6">
                 <header class="navbar-fixed-top" style="background-color: #EFF2F5;">
                     <div class="container">
                         <div class="pull-left">
                             <a href="#" class="brand"><img src="bootstrap/img/logo_cab.gif" alt="conadmin" class="img-responsive"></a>
                         </div>

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
                     </div>
                 </header>
             </div>
         </div>
         <div class="row">
             <div class="col-md-2 col-sm-1">
                 <h4 class="navbar-fixed-top" style="margin-left: 34px; margin-top: 60px;">Menu Principal</h4>
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
             <div class="col-md-10 col-sm-6">
                 <nav class="navbar-fixed-top" role="navigation" style="margin-top: 43px; margin-left: 250px;">
                     <div class="row" style="background-color: #004492; margin-left: 0px;">
                         <div class="col-md-2" style="border: 1px solid red;">
                             <label>Nome</label>
                             <input type="text" class="form-control input-sm" >
                         </div>
                     </div>
                     <div class="container" style="background-color: #EFF2F5;">
                         <ul class="nav" style="list-style-type: none;">
                             <li class="dropdown">
                                 <div class="btn-group" style="border-right: 2px solid #F6F6F6; padding-right: 10px; height: 15px; margin-right: -4px;">
                                     <a href="#" class="btn" style="border: none; padding: 6px 2px 6px 0;">
                                         <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" style="border: none; padding: 0 0 2px 2px; float: left;">
                                             <span class="caret"></span>
                                             <span class="sr-only"></span>
                                         </a>
                                         <ul class="dropdown-menu" role="menu">
                                             <li><a href="http://www.google.com">Novo</a></li>
                                         </ul>
                                         <div style="margin: -4px 0 0 16px;"><a href="#">Produto</a> <i class="fa fa-plus-square-o fa-lg"></i></div>
                                     </a>

                                 </div>
                                 <div class="btn-group" style="border-right: 1px solid #444; padding: 0 10px 0 4px; height: 15px; margin-right: -4px;">
                                     <a href="#" class="btn" style="border: none; padding: 6px 2px 6px 0;">
                                         <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" style="border: none; padding: 0 0 2px 2px; width: 5px;">
                                             <span class="caret"></span>
                                             <span class="sr-only"></span>
                                         </a>
                                         <ul class="dropdown-menu" role="menu">
                                             <li><a href="#">Novo</a></li>
                                         </ul>
                                         <div style="margin: -4px 0 0 16px;"><a href="#">Produto/Foto</a> <i class="fa fa-plus-square-o fa-lg"></i></div>
                                     </a>
                                 </div>
                                 <div class="btn-group" style="border-right: 1px solid #444; padding: 0 10px 0 4px; height: 15px; margin-right: -4px;">
                                     <a href="#" class="btn" style="border: none;  padding: 0px 2px 6px 0;">
                                         <div style="margin: -4px 0 0 2px;"><a href="#">Produto/Tabela Preço</a> <i class="fa fa-plus-square-o fa-lg"></i></div></a>
                                 </div>
                                 <div class="btn-group" style="padding: 0 10px 0 4px; height: 15px; margin-right: -4px;">
                                     <a href="#" class="btn" style="border: none; padding: 0px 2px 6px 0;"><div style="margin: -4px 0 0 2px;"><a href="#">Tabela Preço</a> <i class="fa fa-plus-square-o fa-lg"></i></div></a>
                                 </div>
                             </li>
                         </ul>
                     </div>

                 </nav>
             </div>
         </div>
     </div>






</body>
</html>