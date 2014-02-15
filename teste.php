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





    
     
     <div class="navbar navbar-fixed-top">
             <div class="col-md-12">
                 <header style="background-color: #EFF2F5;">
                     <div>
                         <div class="pull-left">
                             <a href="#" class="brand"><img src="bootstrap/img/logo_cab.gif" alt="conadmin" class="img-responsive"></a>
                         </div>

                         <div class="hidden-xs">
                <span class="texto-bloco pull-left" style="margin-left: 95px;">
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
         <div class="navbar navbar-fixed-top" style="margin-top: 43px;">
                 <nav class="" role="navigation" style="">
                     <div class="row" style="background-color: #004492; padding-bottom: 10px">
                         <div class="col-md-2">
                             <label>Nome</label>
                             <input type="text" class="form-control input-sm" >
                         </div>
                         <div class="col-md-2">
                             <label>Fabricante</label>
                             <input type="text" class="form-control input-sm" >
                         </div>
                         <div class="col-md-2">
                             <label>Grupo Produto</label>
                             <input type="text" class="form-control input-sm" >
                         </div>
                         <div class="col-md-2">
                             <label>SubGrupo Produto</label>
                             <input type="text" class="form-control input-sm" >
                         </div>
                         <div class="col-md-1">
                             <label>Qtd.</label>
                             <input type="text" class="form-control input-sm" >
                         </div>
                         <div class="col-md-1">
                             <input style="margin-top: 20px;" type="button" class="btn btn-default" value="Buscar" >
                         </div>
                     </div>
                     <div class="row" style="background-color: #EFF2F5;">
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
                                         <div style="margin: 0px 0 0 16px;"><a href="#">Produto</a> <i class="fa fa-plus-square-o fa-lg"></i></div>
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
                                         <div style="margin: 0px 0 0 16px;"><a href="#">Produto/Foto</a> <i class="fa fa-plus-square-o fa-lg"></i></div>
                                     </a>
                                 </div>
                                 <div class="btn-group" style="border-right: 1px solid #444; padding: 0 10px 0 4px; height: 15px; margin-right: -4px;">
                                     <a href="#" class="btn" style="border: none;  padding: 0px 2px 6px 0;">
                                         <div style="margin: 0px 0 0 2px;"><a href="#">Produto/Tabela Preço</a> <i class="fa fa-plus-square-o fa-lg"></i></div></a>
                                 </div>
                                 <div class="btn-group" style="padding: 0 10px 0 4px; height: 15px; margin-right: -4px;">
                                     <a href="#" class="btn" style="border: none; padding: 0px 2px 6px 0;"><div style="margin: 0px 0 0 2px;"><a href="#">Tabela Preço</a> <i class="fa fa-plus-square-o fa-lg"></i></div></a>
                                 </div>
                             </li>
                         </ul>
                     </div>

                 </nav>
             </div>
         
         <div class="container">
         	<div class="row">
             <div class="col-md-2 sidebar" style="background-color: #004492; color: #FFF;">
                 <h4 class="" style="margin-left: 45px;">Menu Principal</h4>
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
                         <div id="collapseOne" class="panel-collapse collapse">
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12 col-xs-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <span class="glyphicon glyphicon-pencil text-primary pull-left"></span>
                                         <a href="#">Articles</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12 col-xs-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <span class="glyphicon glyphicon-flash text-success"></span>
                                             <a href="#">News</a>
                                         </div>
                                     </div>
                                 </div>
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
                                 <div class="row">
                                     <div class="col-md-12 col-xs-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#">Change Password</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12 col-xs-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Notifications</a>
                                             <span class="label label-info">5</span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12 col-xs-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Notifications</a>
                                             <span class="label label-info">5</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading">
                             <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#menu-header3">
                                     <span class="glyphicon glyphicon-th"></span>
                                     Modulos
                                 </a>
                             </h4>
                         </div>
                         <div id="menu-header3" class="panel-collapse collapse">
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <a href="#" style="padding-top: 10px;">Delete Account</a>
                                             <span class="glyphicon glyphicon-trash text-danger"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading">
                             <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#menu-header4">
                                     <span class="glyphicon glyphicon-file"></span>
                                     Reports
                                 </a>
                             </h4>
                         </div>
                         <div id="menu-header4" class="panel-collapse collapse">
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-12" style="border-top: 1px solid #DDDDDD; height: 40px;">
                                         <div style="padding: 10px 0 0 15px;">
                                             <span class="glyphicon glyphicon-tasks text-primary"></span>
                                             <a href="#">Products</a>
                                         </div> 
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             
         </div>
         </div>
         
         
         <div style="margin-top: 50px; margin-left: 260px; height: 900px;">
        <input type="button" class="btn btn-info" onclick="alert('akiiii')" value="teste" >
    </div>


</body>
</html>