<?php
require_once 'config.php';
require_once 'functions.php';

$reportages = getReportages();
$pageTitle = 'Hypé';
include 'includes/header.php';
?>

    <section class="hero-fullscreen">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h2>
                <img src="assets/images/logo/bblanc.svg" alt="Hypé" style="max-width: 320px; width: 100%; height: auto;">
            </h2>
            <div class="hero-cta">
                <a href="#activites" class="btn btn-primary">Découvrir</a>
                <a href="about.php" class="btn btn-secondary">En savoir plus</a>
            </div>
        </div>
        <a href="#activites" class="scroll-indicator">
            <span>↓</span>
        </a>
    </section>

    <section id="activites" class="reportages-grid">
        <div class="container">
            <h2>Nos dernières sorties</h2>
            <div class="grid">
                <?php foreach ($reportages as $reportage): ?>
                    <article class="reportage-card">
                        <a href="reportage.php?id=<?php echo $reportage['id']; ?>">
                            <div class="card-image">
                                <img src="<?php echo htmlspecialchars($reportage['image']); ?>" 
                                     alt="<?php echo htmlspecialchars($reportage['titre']); ?>">
                            </div>
                            <div class="card-content">
                                <h3><?php echo htmlspecialchars($reportage['titre']); ?></h3>
                                <p class="date"><?php echo date('d/m/Y', strtotime($reportage['date'])); ?></p>
                                <p class="location"><?php echo htmlspecialchars($reportage['lieu']); ?></p>
                                <p class="excerpt"><?php echo htmlspecialchars($reportage['extrait']); ?></p>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
