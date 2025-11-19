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
            min-height: 100vh;
            margin: 0;
            background: #0b1120;
            color: #e5e7eb;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: #020617 !important;
        }

        #nav {
            justify-content: flex-end;
            padding-right: 32px;
        }

        .menu {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            padding: 16px 32px 0 32px;
        }

        .menu-item {
            text-decoration: none;
        }

        .page-wrapper {
            flex: 1;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 24px 16px 40px;
        }

        .filter-card {
            width: 100%;
            max-width: 720px;
            background: #020617;
            border-radius: 18px;
            padding: 24px 22px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(148, 163, 184, 0.25);
        }

        .filter-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .filter-subtitle {
            font-size: 13px;
            color: #9ca3af;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 500;
            font-size: 13px;
            color: #d1d5db;
        }

        .form-control {
            border-radius: 10px;
            border-color: #4b5563;
            background-color: #020617;
            color: #e5e7eb;
            padding: 8px 10px;
        }

        .form-control::placeholder {
            color: #6b7280;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 1px rgba(37, 99, 235, 0.35);
        }

        .btn-filter {
            border-radius: 10px;
            padding: 10px 16px;
            font-weight: 600;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg">
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
                    <a class="nav-link" href="#">Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="menu">
        <a class="btn btn-sm btn-outline-light menu-item" href="{{ route('app.fornecedor.adicionar') }}">
            Novo fornecedor
        </a>
        <a class="btn btn-sm btn-secondary menu-item" href="{{ route('app.fornecedor') }}">
            Consulta
        </a>
    </div>

    <div class="page-wrapper">
        <div class="filter-card">
            <h1 class="filter-title">Consulta de Fornecedores</h1>
            <p class="filter-subtitle">
                Utilize os campos abaixo para filtrar os fornecedores cadastrados no sistema.
            </p>

            <form method="post" action="{{ route('app.fornecedor.listar') }}">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Ex: ACME Ltda.">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Site</label>
                        <input type="text" name="site" class="form-control" placeholder="Ex: www.exemplo.com.br">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">UF</label>
                        <input type="text" name="uf" class="form-control" placeholder="SP">
                    </div>

                    <div class="col-md-9">
                        <label class="form-label">E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="contato@exemplo.com">
                    </div>

                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-primary btn-filter">
                            Pesquisar fornecedores
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
