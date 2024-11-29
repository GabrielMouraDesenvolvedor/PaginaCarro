<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <div class="roda-teto">
            <p>Bem-vindo à Locadora de Veículos! Confira nossas ofertas incríveis!</p>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="index.php?page=inicio">Início</a></li>
                <li><a href="index.php?page=veiculos">Veículos</a></li>
                <li><a href="index.php?page=marca">Marca</a></li>
                <li><a href="index.php?page=categoria">Categoria</a></li>
                <li><a href="index.php?page=sair">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            // Sistema de navegação baseado em query string
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'inicio':
                        include 'pages/inicio.php';
                        break;
                    case 'veiculos':
                        include 'pages/veiculos.php';
                        break;
                    case 'marca':
                        include 'pages/marca.php';
                        break;
                    case 'categoria':
                        include 'pages/categoria.php';
                        break;
                    case 'sair':
                        include 'pages/sair.php';
                        break;
                    default:
                        echo '<p>Página não encontrada.</p>';
                        break;
                }
            } else {
                include 'pages/inicio.php'; // Página inicial padrão
            }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Locadora de Veículos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
