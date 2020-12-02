<!DOCTYPE html>
<html>
<head>
 <title>Formulário</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <h1>Formulário</h1>
<hr />
 <form action="/enviar" method="POST">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="form-group">
 <label for="nome">Nome do produto</label>
 <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
 </div>
 <div class="form-group">
 <label for="codigo">Código do Produto</label>
 <input type="number" id="codigo" name="codigo" class="form-control" placeholder="Código do Produto">
 </div>
 <div class="form-group">
 <label for="categoria">Categoria</label>
 <input type="text" id="nome" name="categoria" class="form-control" placeholder="Categoria">
 </div>
 <div class="form-group">
 <label for="preco">Preço Unitário</label>
 <input type="number" id="preco" name="preco" class="form-control" placeholder="Preço Unitário">
 </div>
 <div class="form-group">
    <label>Descrição</label>
 <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Digite uma descrição"></textarea>
 </div>
 <button type="submit" class="btn btn-default">Enviar</button>
 </form>
</div>
</body>
</html>