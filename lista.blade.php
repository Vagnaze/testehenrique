<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h1>Lista dos registos</h1>

	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Código</th>
				<th>Categoria</th>
				<th>Preço</th>
				<th>Mensagem</th>
			</tr>
		</thead>
		<tbody>
			@foreach($formularios as $row)
			<tr>
				<th scope="row">{{ $row->id }}</th>
				<td> {{ $row->nome }}</td>
				<td> {{ $row->codigo }}</td>
				<td> {{ $row->categoria }}</td>
				<td> {{ $row->preco }}</td>
				<td> {{ $row->mensagem }}</td>
				</tr>
				@endforeach
		</tbody>
		</table>
		</div>	
</body>
</html>