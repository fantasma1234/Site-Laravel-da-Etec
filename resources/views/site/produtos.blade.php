<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>
    <header class="container-cabecalho">
        <div class="logo">
            <h1>Produtos</h1>
        </div>
        <ul class="links-header">
            <li>
                <a href="{{ route('site.index') }}">Principal</a>
            </li>
            <li>
                <a href="{{ route('site.sobrenos') }}">Sobre Nós</a>
            </li>
            <li>
                <a href="{{ route('site.contato') }}">Contato</a>
            </li>
            <li>
                <a href="{{ route('site.produtos') }}">Produtos</a>
            </li>
            <li>
                <a href="{{ route('site.entrar') }}" class="btn-entrar">Entrar</a>
            </li>
        </ul>
    </header>

    <div class="container-meio">
        <div class="titulo-erro">
            <h2>Site Fora do Ar</h2>
        </div>
        <div class="container-imagem">
            <img src="/img/bg.png" alt="imagem">
        </div>
    </div>
</body>
</html>