<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <style>
        
        #nav{
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
                    <a class="nav-link active" aria-current="page" href="{{ route('app.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('app.fornecedor') }}">Fornecedor</a>
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
        
    <h1>Home</h1>
    
</body>

</html>