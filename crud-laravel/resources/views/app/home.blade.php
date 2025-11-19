<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --bg-start: #0f172a;
            --bg-end: #1e293b;
            --card-bg: rgba(15, 23, 42, 0.65);
            --card-border: rgba(148, 163, 184, 0.25);
            --accent: #3b82f6;
            --text-main: #e2e8f0;
            --text-muted: #94a3b8;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: radial-gradient(circle at top, var(--bg-start), var(--bg-end));
            font-family: "Segoe UI", system-ui, sans-serif;
            color: var(--text-main);
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR */
        .top-nav {
            width: 100%;
            padding: 16px 28px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(12px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(148, 163, 184, 0.25);
        }

        .top-nav__links {
            display: flex;
            gap: 22px;
        }

        .top-nav__link {
            text-decoration: none;
            font-size: 14px;
            padding: 6px 10px;
            color: var(--text-muted);
            border-radius: 8px;
            transition: 0.2s ease;
        }

        .top-nav__link:hover,
        .top-nav__link--active {
            color: var(--text-main);
            background: rgba(148, 163, 184, 0.12);
        }

        /* CONTEÚDO */
        .page-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 32px;
            animation: fade 0.7s ease forwards;
        }

        @keyframes fade {
            from {
                opacity: 0;
                transform: translateY(8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-card {
            width: 100%;
            max-width: 650px;
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            backdrop-filter: blur(14px);
            padding: 30px 34px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
        }

        .welcome-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .welcome-text {
            color: var(--text-muted);
            font-size: 15px;
            max-width: 520px;
            margin: 10px auto 0;
        }

        .btn-area {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        .btn-panel {
            background: var(--accent);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.18s ease;
            text-decoration: none;
        }

        .btn-panel:hover {
            background: #2563eb;
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.5);
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="top-nav">
        <div class="top-nav__brand text-muted fw-semibold">
            Painel Interno
        </div>

        <div class="top-nav__links">

            <a href="{{ route('app.home') }}" class="top-nav__link top-nav__link--active">Home</a>

            <a href="#" class="top-nav__link">Cliente</a>

            <a href="{{ route('app.fornecedor') }}" class="top-nav__link">Fornecedor</a>

            <a href="#" class="top-nav__link">Produto</a>

            <a href="#" class="top-nav__link">Sair</a>
        </div>
    </nav>

    {{-- CONTEÚDO CENTRAL --}}
    <main class="page-wrapper">
        <div class="welcome-card">

            <h1 class="welcome-title">Bem-vindo ao Painel</h1>

            <p class="welcome-text">
                Esta é a página inicial do sistema. Aqui você pode navegar entre os módulos de gestão,
                acessar fornecedores, clientes, produtos e visualizar informações internas protegidas por autenticação.
            </p>

            <div class="btn-area">
                <a href="{{ route('app.fornecedor') }}" class="btn-panel">Acessar Fornecedores</a>
                <a href="#" class="btn-panel">Ver Clientes</a>
            </div>

        </div>
    </main>

</body>
</html>