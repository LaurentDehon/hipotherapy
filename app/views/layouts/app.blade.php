<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="{{assets('css/styles.css')}}">
    <title>Centre d'Hippothérapie</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><strong><a href="/" style="font-size: 2.3rem">Centre d'Hippothérapie</a></strong></li>
            </ul>
            <ul>                
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="/dashboard" role="button">Gestion</a></li> 
                    <li><a href="/database" role="button">Base de données</a></li>
                    <li><a href="/auth/logout" role="button">Déconnexion (<?= htmlspecialchars($_SESSION['username']) ?>)</a></li>
                <?php else: ?>
                    <li><a href="/auth/login" role="button">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
<main class="page-container">
    @yield('content')
</body>
</html>