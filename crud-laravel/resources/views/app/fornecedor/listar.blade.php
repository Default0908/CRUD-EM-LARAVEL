<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Fornecedores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            min-height: 100vh;
            background: #020617;
            color: #e5e7eb;
        }

        .navbar {
            background: #020617;
            border-bottom: 1px solid #1f2937;
        }

        .nav-link {
            color: #cbd5f5 !important;
            font-size: .9rem;
        }

        .nav-link.active {
            color: #fff !important;
            font-weight: 600;
        }

        .page-header {
            padding: 24px 0 8px;
        }

        .page-title {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .table-card {
            background: #020617;
            border-radius: 16px;
            border: 1px solid #1f2937;
            padding: 16px 16px 6px;
            box-shadow: 0 14px 35px rgba(15, 23, 42, .75);
        }

        .table {
            color: #e5e7eb;
        }

        .table thead {
            background: #020617;
            border-bottom: 1px solid #1f2937;
        }

        .table thead th {
            font-size: .8rem;
            text-transform: uppercase;
            letter-spacing: .06em;
            color: #9ca3af;
            border-bottom: none;
        }

        .table tbody tr {
            border-color: #1f2937;
        }

        .table tbody tr:hover {
            background: rgba(31, 41, 55, 0.7);
        }

        .badge-action {
            font-size: .75rem;
        }

        .pagination {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid px-4" id="nav">
            <a class="navbar-brand" href="{{ route('app.home') }}">Painel Laravel</a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('app.home') }}">Home</a>
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

    <main class="py-4">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center page-header">
                <div>
                    <h1 class="page-title mb-1">Lista de fornecedores</h1>
                    <small class="text-muted">
                        Resultado da pesquisa realizada.
                    </small>
                </div>
                <div class="d-flex gap-2">
                    <a class="btn btn-sm btn-primary" href="{{ route('app.fornecedor.adicionar') }}">Novo</a>
                    <a class="btn btn-sm btn-outline-light" href="{{ route('app.fornecedor') }}">Nova consulta</a>
                </div>
            </div>

            <div class="table-card mt-2">
                <table class="table align-middle mb-2">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Site</th>
                            <th scope="col">UF</th>
                            <th scope="col">E-mail</th>
                            <th scope="col" class="text-center">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($fornecedores as $fornecedor)
                            <tr>
                                <th scope="row">{{ $fornecedor->id }}</th>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->site }}</td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td class="text-center">
                                    <span class="badge bg-danger badge-action me-1">Excluir</span>
                                    <a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}"
                                        class="badge bg-info text-dark badge-action">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-3">
                                    Nenhum fornecedor encontrado com os filtros informados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="d-flex justify-content-between align-items-center mt-2">
                    <small class="text-muted">
                        Exibindo {{ $fornecedores->count() }} de {{ $fornecedores->total() }} registro(s)
                    </small>

                    <div>
                        {{ $fornecedores->withQueryString()->onEachSide(1)->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>

</html>
