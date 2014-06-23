<!DOCTYPE html>
<html lang="pt"> ola mundo teste
	<head>
		<title>Exemplo Tabela</title>
		<meta charset="UTF-8" />
		<link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />

		<script src="bootstrap/js/jquery-1.10.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>

		<style>
			.table-danger {
				border-top: 5px solid #FFF;
				border-bottom: 5px solid #FFF;
				
			}
			thead {
				background-color: #999;
			}
			.table-hover > tbody > tr > td.danger:hover,
			.table-hover > tbody > tr > th.danger:hover,
			.table-hover > tbody > tr.danger:hover > td {
				background-color: #ebcccc;
				border-top: 2px solid #FFF;
				border-bottom: 2px solid #FFF;
				color: #000;
	
			}
			.table > tbody > tr > td.danger,
			.table > tbody > tr.danger > td {
				background-color: #d9534f;
				border-top: 2px solid #FFF;
				border-bottom: 2px solid #FFF;
				color: #FFF;
				font-size: 18px;
			}

			.header {
				border-top: 5px solid #FFF;
				border-bottom: 5px solid #FFF;
			}
		</style>

	</head>
	<body>
		<div class="panel panel-primary">
			<!--<div class="panel-heading">
				<h3 class="panel-title">Tickets do Dia</h3>
			</div>-->
			<!--<div class="panel-body">
				
			</div>-->
			<table class="table table-hover table-bordered">
				<thead>
					<tr class="header">
						<th>Ticket</th>
						<th>Cliente</th>
						<th>Tipo</th>
						<th>Assunto</th>
						<th>Usuário</th>
						<th>Prazo etapa</th>
					</tr>
				</thead>
				<tbody>
					<tr class="danger">
						<td>1</td>
						<td>Centertel</td>
						<td>Cadastro de Pessoa</td>
						<td>Migração</td>
						<td>Crysthiano</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>2</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Local de Cobrança</td>
						<td>Marcos</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>3</td>
						<td>VcNet</td>
						<td>Financeiro</td>
						<td>Apresentação</td>
						<td>Felipe</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>4</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>5</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>6</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>7</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>8</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>9</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>10</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>11</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
					<tr class="danger">
						<td>12</td>
						<td>ClickNet</td>
						<td>Financeiro</td>
						<td>Serviço Modelo</td>
						<td>João</td>
						<td>10/05/2014</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>
