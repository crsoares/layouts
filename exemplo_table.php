<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Exemplo Tabela</title>
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
	
}
.table > tbody > tr > td.danger,
.table > tbody > tr.danger > td {
	background-color: #d9534f;
	
}
		</style>

	</head>
	<body>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Tickets do Dia</h3>
			</div>
			<!--<div class="panel-body">
				
			</div>-->
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Ticket</th>
						<th>Cliente</th>
						<th>Assunto</th>
						<th>Usuário</th>
					</tr>
				</thead>
				<tbody>
					<tr class="danger">
						<td>1</td>
						<td>Centertel</td>
						<td>Migração</td>
						<td>Crysthiano</td>
					</tr>
					<tr class="danger">
						<td>2</td>
						<td>ClickNet</td>
						<td>Local de Cobrança</td>
						<td>Marcos</td>
					</tr>
					<tr class="danger">
						<td>3</td>
						<td>VcNet</td>
						<td>Apresentação</td>
						<td>Felipe</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>