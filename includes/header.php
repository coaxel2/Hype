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
                <img src="<?php echo SITE_URL; ?>/assets/images/logo/blanc.svg" alt="Logo Bordeaux Activités" class="logo-light">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo/noir.svg" alt="Logo Bordeaux Activités" class="logo-dark">
            </a>
            <nav>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/index.php">Accueil</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/about.php">À propos</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contact.php">Contact</a></li>
                </ul>
            </nav>
            <button class="theme-toggle" id="themeToggle" aria-label="Changer le thème">
                <span class="sun">☀️</span>
                <span class="moon">🌙</span>
            </button>
        </div>
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
