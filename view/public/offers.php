<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Plateforme de Recrutement</title>
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
</head>

<body>
    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">

                <li><a href="Home">Accueil</a></li>
                <li><a href="offers">Offres</a></li>
                <li><a href="categories">Catégories</a></li>

            </ul>
            <a href="logout" class="btn-primary">Déconnexion</a>
        </div>
    </nav>

    <section class="search-section">
        <div class="search-container">
            <div class="search-bar">
                <input type="text" placeholder="Rechercher un poste, une entreprise...">
                <button class="btn-primary">Rechercher</button>
            </div>
            <div class="filters">
                <select class="filter-select">
                    <option>Toutes les catégories</option>
                    <option>Technologie</option>
                    <option>Marketing</option>
                    <option>Finance</option>
                </select>
                <select class="filter-select">
                    <option>Localisation</option>
                    <option>Casablanca</option>
                    <option>Rabat</option>
                    <option>Marrakech</option>
                </select>
                <select class="filter-select">
                    <option>Type de contrat</option>
                    <option>CDI</option>
                    <option>CDD</option>
                    <option>Freelance</option>
                </select>
            </div>
        </div>
    </section>
    <section>
        <h2 class="section-title">Dernières offres d'emploi</h2>
        <div class="jobs-grid">
            <?php if ((!empty($offers))): ?>
                <?php foreach ($offers as $offer): ?>
                    <div class="job-card">
                        <?php if ($sessionOffer == 'Admin'): ?>
                            <div class="card-menu">
                                <button type="button" class="menu-btn">⋮</button>
                                <div class="menu-dropdown">
                                    <form action="archiver" method="POST">
                                        <input type="hidden" name="offer_id" value="<?= $offer->getId() ?>">
                                        <input type="hidden" name="user_id" value="<?= $offer->getUserId() ?>">
                                        <button type="submit" class="menu-item archiver">archiver</button>
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>
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
                            <?php if ((!empty($offer->getSkills()))): ?>
                                <?php foreach ($offer->getSkills() as $skill): ?>
                                    <span class="tag"><?= htmlspecialchars($skill['name']) ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="job-footer">
                            <span class="salary"><?= $offer->getSalary() ?> DH</span>
                            <form method="POST" action="Postuler">
                                <input type="hidden" name='user_id' value='<?= $offer->getUserId() ?>'>
                                <input type="hidden" name='offer_id' value='<?= $offer->getId() ?>'>
                                <button class="btn-apply">Postuler</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    <script src="view/public_assets/JS/offer.js"></script>
</body>

</html>