<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'config.php';
$pageTitle = 'Équipe';
include 'includes/header.php';
?>

<section class="page-content">
    <div class="container">
        <h2 class="team-title">L'équipe</h2>
        <div class="team-list">
            <div class="team-block">
                <span class="team-role">Direction</span>
                <span class="team-member" data-role="Direction">Clément</span>
            </div>
            <div class="team-block">
                <span class="team-role">Communication</span>
                <span class="team-member" data-role="Communication">Charlène</span>
                <span class="team-member" data-role="Communication">Amandine</span>
                <span class="team-member" data-role="Communication">Maëlle</span>
            </div>
            <div class="team-block">
                <span class="team-role">Événementiel</span>
                <span class="team-member" data-role="Événementiel">Lucie</span>
                <span class="team-member" data-role="Événementiel">Mélanie</span>
                <span class="team-member" data-role="Événementiel">Déborah</span>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
document.querySelectorAll('.team-member').forEach(member => {
    member.addEventListener('mouseenter', function() {
        if (!this.dataset.original) {
            this.dataset.original = this.textContent;
        }
        this.textContent = this.dataset.role;
        this.classList.add('hovered');
    });
    member.addEventListener('mouseleave', function() {
        if (this.dataset.original) {
            this.textContent = this.dataset.original;
            this.classList.remove('hovered');
        }
    });
});
</script>

<style>
.page-content {
    padding: 80px 0;
    background: white;
}
.team-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 2.5rem;
    font-weight: 700;
    letter-spacing: -0.02em;
    color: var(--primary-color, #e57373);
}
.team-list {
    max-width: 700px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 50px;
}
.team-block {
    display: flex;
    align-items: center;
    gap: 30px;
    border-bottom: 1.5px solid #222;
    padding-bottom: 30px;
    flex-wrap: wrap;
}
.team-role {
    min-width: 150px;
    font-size: 1.1rem;
    letter-spacing: 0.12em;
    color: #444;
    text-transform: uppercase;
    font-weight: 500;
}
.team-member {
    font-size: 2rem;
    color: #222;
    font-weight: 400;
    cursor: pointer;
    transition: color 0.2s, background 0.2s;
    background: none;
    border-radius: 6px;
    padding: 0 10px;
    display: inline-block;
}
.team-member.hovered {
    color: var(--primary-color, #e57373);
    background: #fbe9e7;
}
@media (max-width: 600px) {
    .team-block {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        padding-bottom: 20px;
    }
    .team-member {
        font-size: 1.2rem;
    }
    .team-role {
        min-width: 0;
    }
}
</style>
