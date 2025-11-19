<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    {{-- Bootstrap opcional (deixei, mas o visual é feito mais no CSS custom) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        :root {
            --bg-gradient-start: #0f172a;
            --bg-gradient-end: #1e293b;
            --card-bg: #020617;
            --card-border: rgba(148, 163, 184, 0.2);
            --accent: #3b82f6;
            --accent-hover: #2563eb;
            --text-main: #e5e7eb;
            --text-muted: #9ca3af;
            --error: #f87171;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: radial-gradient(circle at top, var(--bg-gradient-start), var(--bg-gradient-end));
            color: var(--text-main);
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR SIMPLES NO TOPO */
        .top-nav {
            width: 100%;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(148, 163, 184, 0.2);
        }

        .top-nav__brand {
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-size: 14px;
            color: var(--text-muted);
        }

        .top-nav__links {
            display: flex;
            gap: 16px;
        }

        .top-nav__link {
            text-decoration: none;
            font-size: 14px;
            color: var(--text-muted);
            padding: 6px 10px;
            border-radius: 999px;
            transition: 0.2s ease;
        }

        .top-nav__link:hover,
        .top-nav__link--active {
            color: var(--text-main);
            background: rgba(148, 163, 184, 0.12);
        }

        /* CONTEÚDO CENTRAL */
        .page-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
        }

        .login-layout {
            width: 100%;
            max-width: 900px;
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(0, 0.9fr);
            gap: 32px;
            align-items: center;
        }

        /* LADO ESQUERDO - TEXTO / CHAMADA */
        .login-intro {
            padding-right: 16px;
        }

        .login-intro__tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(15, 23, 42, 0.85);
            border-radius: 999px;
            padding: 4px 12px;
            font-size: 12px;
            color: var(--text-muted);
            border: 1px solid rgba(148, 163, 184, 0.25);
            margin-bottom: 10px;
        }

        .login-intro__tag-dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: #22c55e;
        }

        .login-intro__title {
            font-size: 28px;
            line-height: 1.2;
            margin: 0 0 10px;
        }

        .login-intro__subtitle {
            font-size: 14px;
            color: var(--text-muted);
            max-width: 360px;
        }

        /* CARD DE LOGIN */
        .login-card {
            background: radial-gradient(circle at top left, rgba(37, 99, 235, 0.15), rgba(15, 23, 42, 0.95));
            border-radius: 18px;
            padding: 28px 26px;
            border: 1px solid var(--card-border);
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.8);
        }

        .login-card__header {
            margin-bottom: 18px;
        }

        .login-card__title {
            font-size: 20px;
            margin: 0 0 4px;
        }

        .login-card__subtitle {
            font-size: 13px;
            color: var(--text-muted);
        }

        .form-label-custom {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 4px;
            color: var(--text-muted);
        }

        .form-control-custom {
            width: 100%;
            padding: 10px 11px;
            border-radius: 10px;
            border: 1px solid rgba(148, 163, 184, 0.4);
            background: rgba(15, 23, 42, 0.8);
            color: var(--text-main);
            font-size: 14px;
            outline: none;
            transition: border-color 0.18s ease, box-shadow 0.18s ease, background 0.18s ease;
        }

        .form-control-custom::placeholder {
            color: #6b7280;
        }

        .form-control-custom:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 1px rgba(59, 130, 246, 0.4);
            background: rgba(15, 23, 42, 0.95);
        }

        .form-error {
            font-size: 12px;
            color: var(--error);
            margin-top: 3px;
        }

        .form-global-error {
            margin-top: 10px;
            font-size: 13px;
            color: var(--error);
            background: rgba(248, 113, 113, 0.08);
            border: 1px solid rgba(248, 113, 113, 0.3);
            border-radius: 10px;
            padding: 8px 10px;
        }

        .login-card__footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }

        .remember-text {
            font-size: 12px;
            color: var(--text-muted);
        }

        .forgot-link {
            font-size: 12px;
            color: var(--accent);
            text-decoration: none;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        .btn-submit {
            width: 100%;
            margin-top: 14px;
            border: none;
            border-radius: 999px;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 600;
            background: linear-gradient(135deg, var(--accent), var(--accent-hover));
            color: white;
            cursor: pointer;
            transition: transform 0.1s ease, box-shadow 0.15s ease, filter 0.15s ease;
        }

        .btn-submit:hover {
            filter: brightness(1.05);
            box-shadow: 0 18px 40px rgba(37, 99, 235, 0.55);
        }

        .btn-submit:active {
            transform: translateY(1px) scale(0.99);
            box-shadow: 0 10px 24px rgba(37, 99, 235, 0.6);
        }

        .login-card__hint {
            margin-top: 14px;
            font-size: 12px;
            color: var(--text-muted);
            text-align: center;
        }

        @media (max-width: 768px) {
            .login-layout {
                grid-template-columns: minmax(0, 1fr);
                gap: 20px;
            }

            .login-intro {
                text-align: center;
                padding-right: 0;
            }

            .login-intro__subtitle {
                margin: 0 auto;
            }
        }
    </style>
</head>

<body>
    {{-- NAVBAR SIMPLES NO TOPO --}}
    <header class="top-nav">
        <div class="top-nav__brand">
            Meu Projeto Laravel
        </div>
        <nav class="top-nav__links">
            <a href="#" class="top-nav__link top-nav__link--active">Principal</a>
            <a href="#" class="top-nav__link">Sobre nós</a>
            <a href="#" class="top-nav__link">Contato</a>
        </nav>
    </header>

    <main class="page-wrapper">
        <div class="login-layout">

            {{-- LADO ESQUERDO: TEXTO / CHAMADA --}}
            <section class="login-intro">
                <div class="login-intro__tag">
                    <span class="login-intro__tag-dot"></span>
                    <span>Acesso restrito ao sistema</span>
                </div>
                <h1 class="login-intro__title">
                    Entre para gerenciar os dados do sistema.
                </h1>
                <p class="login-intro__subtitle">
                    Utilize seu e-mail e senha cadastrados para acessar o painel interno.
                    Suas credenciais são protegidas e o acesso é controlado por middleware de autenticação.
                </p>
            </section>

            {{-- CARD DE LOGIN --}}
            <section class="login-card">
                <header class="login-card__header">
                    <h2 class="login-card__title">Login</h2>
                    <p class="login-card__subtitle">
                        Preencha suas credenciais para continuar.
                    </p>
                </header>

                <form method="POST" action="{{ route('site.login') }}">
                    @csrf

                    {{-- Campo Usuário --}}
                    <div class="mb-3">
                        <label class="form-label-custom" for="usuario">Usuário (e-mail)</label>
                        <input
                            id="usuario"
                            name="usuario"
                            type="text"
                            class="form-control-custom"
                            placeholder="seuemail@exemplo.com"
                            value="{{ old('usuario') }}"
                        >
                        @if ($errors->has('usuario'))
                            <div class="form-error">
                                {{ $errors->first('usuario') }}
                            </div>
                        @endif
                    </div>

                    {{-- Campo Senha --}}
                    <div class="mb-2">
                        <label class="form-label-custom" for="senha">Senha</label>
                        <input
                            id="senha"
                            name="senha"
                            type="password"
                            class="form-control-custom"
                            placeholder="Digite sua senha"
                            value="{{ old('senha') }}"
                        >
                        @if ($errors->has('senha'))
                            <div class="form-error">
                                {{ $errors->first('senha') }}
                            </div>
                        @endif
                    </div>

                    <div class="login-card__footer">
                        <span class="remember-text">
                            Seus dados estão protegidos.
                        </span>
                        <a href="#" class="forgot-link">Esqueceu a senha?</a>
                    </div>

                    <button type="submit" class="btn-submit">
                        Acessar painel
                    </button>

                    @if (isset($erro) && $erro != '')
                        <div class="form-global-error">
                            {{ $erro }}
                        </div>
                    @endif

                    <p class="login-card__hint">
                        Dica: verifique se está usando o e-mail cadastrado corretamente.
                    </p>
                </form>
            </section>
        </div>
    </main>
</body>

</html>
