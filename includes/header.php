<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - ' : ''; ?>Bordeaux Activités</title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="<?php echo SITE_URL; ?>/index.php" class="logo">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo/nnoir.svg" alt="Logo Bordeaux Activités" class="logo-light">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo/bblanc.svg" alt="Logo Bordeaux Activités" class="logo-dark">
            </a>
            <nav>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Accueil</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">À propos</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/teams.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'teams.php' ? 'active' : ''; ?>">Équipe</a></li>
                </ul>
            </nav>
    </header>
    <script>
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        
        // Charger le thème sauvegardé
        const savedTheme = localStorage.getItem('theme') || 'light';
        html.setAttribute('data-theme', savedTheme);
        
        themeToggle.addEventListener('click', () => {
            const currentTheme = html.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            html.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });
    </script>
