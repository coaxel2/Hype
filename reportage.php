<?php
require_once 'config.php';
require_once 'functions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$reportage = getReportageById($id);

if (!$reportage) {
    header('Location: index.php');
    exit;
}

$pageTitle = $reportage['titre'];
include 'includes/header.php';
?>

    <article class="reportage-detail">
        <div class="reportage-header">
            <div class="container">
                <a href="index.php" class="back-link">← Retour aux reportages</a>
                <h1><?php echo htmlspecialchars($reportage['titre']); ?></h1>
                <div class="reportage-meta">
                    <span class="location">📍 <?php echo htmlspecialchars($reportage['lieu']); ?></span>
                    <span class="date">📅 <?php echo date('d/m/Y', strtotime($reportage['date'])); ?></span>
                </div>
            </div>
        </div>

        <div class="reportage-featured-image">
            <img src="<?php echo htmlspecialchars($reportage['image']); ?>" 
                 alt="<?php echo htmlspecialchars($reportage['titre']); ?>">
        </div>

        <div class="container">
            <div class="reportage-content">
                <div class="description">
                    <p><?php echo nl2br(htmlspecialchars($reportage['description'])); ?></p>
                </div>

                <?php if (isset($reportage['galerie']) && !empty($reportage['galerie'])): ?>
                    <div class="gallery">
                        <h2>Galerie photos</h2>
                        <div class="gallery-grid">
                            <?php foreach ($reportage['galerie'] as $photo): ?>
                                <div class="gallery-item">
                                    <img src="<?php echo htmlspecialchars($photo); ?>" 
                                         alt="Photo du reportage">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="reportage-navigation">
                <a href="index.php" class="btn btn-primary">Voir tous les reportages</a>
            </div>
        </div>
    </article>

<?php include 'includes/footer.php'; ?>
