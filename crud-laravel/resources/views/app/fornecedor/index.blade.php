<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
            font-size: 22px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #34495e;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #2ecc71;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #27ae60;
        }

        .conteudo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .menu {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            gap: 32px;
            margin-right: 32px;
            margin-top: 24px;
        }

        .menu-item{
            overflow: hidden;
            padding-left: 8px;
            padding-right: 8px;
            text-decoration: none;
            
        }

        #nav {
            justify-content: end;
            padding-right: 32px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-dark">
        <div class="container-fluid" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('app.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('app.fornecedor') }}">Fornecedor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="menu">
            <a class="menu-item h5" href="{{ route('app.fornecedor.adicionar') }}">Novo</a>
            <a class="menu-item h5" href="{{ route('app.fornecedor') }}">Consulta</a>
    </div>

    <div class="conteudo">

        <form method="post" action="{{ route('app.fornecedor.listar') }}">
            @csrf

            <h1>Fornecedor</h1>

            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="site" placeholder="Site">
            <input type="text" name="uf" placeholder="UF">
            <input type="text" name="email" placeholder="E-mail">
            <button type="submit">Pesquisar</button>

        </form>

    </div>

</body>

</html>