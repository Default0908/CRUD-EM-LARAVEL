<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Fornecedores - Adicionar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
            background: radial-gradient(circle at top left, #020617, #020617 40%, #111827);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #e5e7eb;
        }

        .page-wrapper {
            padding: 24px 16px 40px;
        }

        .form-card {
            background: #020617;
            border-radius: 18px;
            padding: 22px 22px 18px;
            border: 1px solid rgba(148, 163, 184, 0.35);
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.9);
        }

        .form-card h1 {
            font-size: 1.4rem;
            margin-bottom: 4px;
        }

        .form-card p {
            font-size: 0.85rem;
            color: #9ca3af;
        }

        .form-control {
            font-size: 0.9rem;
            border-radius: 10px;
        }

        .btn-submit {
            border-radius: 999px;
            font-weight: 500;
        }

        .menu-links a {
            text-decoration: none;
        }

        .msg-text {
            font-size: 0.85rem;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="{{ route('app.home') }}">Painel Laravel</a>
        <ul class="navbar-nav ms-auto gap-2">
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

<div class="page-wrapper">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 menu-links">
            <h2 class="h5 mb-0 text-light">Fornecedores</h2>
            <div class="d-flex gap-3">
                <a class="text-success fw-semibold" href="{{ route('app.fornecedor.adicionar') }}">+ Novo</a>
                <span class="text-secondary">|</span>
                <a class="text-light" href="{{ route('app.fornecedor') }}">Consulta</a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="form-card">
                    <div class="mb-3">
                        <h1>Novo fornecedor</h1>
                        <p>Preencha os campos abaixo para adicionar um novo fornecedor ao sistema.</p>
                    </div>

                    @if (isset($msg) && $msg != '')
                        <div class="alert alert-info msg-text py-2">
                            {{ $msg }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome fantasia ou razão social"
                                   value="{{ old('nome', $fornecedor->nome ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Site</label>
                            <input type="text" name="site" class="form-control" placeholder="www.exemplo.com.br"
                                   value="{{ old('site', $fornecedor->site ?? '') }}">
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label class="form-label">UF</label>
                                <input type="text" name="uf" class="form-control" placeholder="SP"
                                       value="{{ old('uf', $fornecedor->uf ?? '') }}">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">E-mail</label>
                                <input type="text" name="email" class="form-control" placeholder="contato@empresa.com"
                                       value="{{ old('email', $fornecedor->email ?? '') }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-submit px-4">
                            Salvar fornecedor
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
