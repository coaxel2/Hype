<?php
require_once 'config.php';
$pageTitle = 'Contact';
include 'includes/header.php';
?>

    <section class="page-hero">
        <div class="hero-content">
            <h2>Contactez-nous</h2>
            <p>Une question ? Une suggestion ? N'hésitez pas à nous écrire</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Nos coordonnées</h3>
                    <div class="info-item">
                        <h4>Email</h4>
                        <p><a href="mailto:contact@bordeaux-activites.fr">contact@bordeaux-activites.fr</a></p>
                    </div>
                    <div class="info-item">
                        <h4>Adresse</h4>
                        <p>Bordeaux, Nouvelle-Aquitaine<br>France</p>
                    </div>
                    <div class="info-item">
                        <h4>Réseaux sociaux</h4>
                        <p>Suivez nos aventures sur les réseaux sociaux pour ne rien manquer de nos découvertes bordelaises.</p>
                    </div>
                    <div class="info-item">
                        <h4>Horaires de réponse</h4>
                        <p>Nous répondons généralement sous 48h les jours ouvrés.</p>
                    </div>
                </div>

                <div class="contact-form">
                    <h3>Envoyez-nous un message</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <select id="subject" name="subject" required>
                                <option value="">Choisissez un sujet</option>
                                <option value="suggestion">Suggestion d'activité</option>
                                <option value="question">Question générale</option>
                                <option value="collaboration">Proposition de collaboration</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer le message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
