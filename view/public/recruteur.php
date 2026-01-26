<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Recruteur - CareerLink</title>
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
</head>

<body>

    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">
                <li><a href="offers">Mes Offres</a></li>
                <li><a href="addOffer" class="btn-primary">+ Nouvelle Offre</a></li>

            </ul>
            <a href="logout">Déconnexion</a>
        </div>
    </nav>

    <section>
        <h2 class="section-title">Mes offres d'emploi</h2>
        <div class="jobs-grid">
            <?php if ((!empty($offers))): ?>
                <?php foreach ($offers as $offer): ?>
                    <div class="job-card">
                        <div class="card-menu">
                            <button type="button" class="menu-btn">⋮</button>

                            <div class="menu-dropdown">
                                <form action="goToUpdateOffer" method="POST">
                                    <input type="hidden" name="offer_id" value="<?= $offer->getId() ?>">
                                    <input type="hidden" name="user_id" value="<?= $offer->getUserId() ?>">
                                    <button type="submit" class="menu-item update">Update</button>
                                </form>

                                <form action="deleteOffer" method="POST">
                                    <input type="hidden" name="offer_id" value="<?= $offer->getId() ?>">
                                    <input type="hidden" name="user_id" value="<?= $offer->getUserId() ?>">
                                    <button type="submit" class="menu-item delete"
                                        onclick="return confirm('Are you sure you want to delete this offer?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="job-header">
                            <div>
                                <h3 class="job-title"><?= $offer->getTitle() ?></h3>
                                <p class="company-name"><?= $offer->getJobName() ?></p>
                            </div>
                            <div class="company-logo">TI</div>
                        </div>
                        <div class="job-meta">
                            <span class="meta-item">📍 <?= $offer->getLocation() ?></span>
                            <span class="meta-item">⏰ CDI</span>
                            <span class="meta-item">🕐 <?= $offer->getDeadline() ?></span>
                        </div>
                        <div class="tags">
                            <?php if ((!empty($offer->getSkills()))):?>
                                <?php foreach ($offer->getSkills() as $skill):?>
                                    <span class="tag"><?= htmlspecialchars($skill['name']) ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="job-footer">
                            <span class="salary"><?= $offer->getSalary() ?> DH</span>
                            <div class="job-actions">
                                <a href="candidat" class="btn-primary"> Voir les candidats</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <script src="view/public_assets/JS/recruteur.js"></script>
</body>

</body>

</html>