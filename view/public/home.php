<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CareerLink - Accueil</title>

    <!-- CSS principal -->
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
</head>
<body>

<!-- Navigation -->
<nav>
    <div class="nav-container">
        <div class="logo">CareerLink</div>

        <ul class="nav-links">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Offres</a></li>
            <li><a href="#">Catégories</a></li>
        </ul>

        <a href="derLogin" class="btn-primary">Connexion</a>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <h1>Trouvez votre prochain emploi</h1>
    <p>Des milliers d'opportunités professionnelles vous attendent</p>
    <a href="#" class="btn-primary">Voir les offres</a>
</section>

<!-- Search Section -->
<section class="search-section">
    <div class="search-container">

        <div class="search-bar">
            <input type="text" placeholder="Poste, mot-clé...">
            <input type="text" placeholder="Ville, région...">
            <button class="btn-primary">Rechercher</button>
        </div>

        <div class="filters">
            <select class="filter-select">
                <option>Type de contrat</option>
                <option>CDI</option>
                <option>CDD</option>
                <option>Stage</option>
            </select>

            <select class="filter-select">
                <option>Niveau</option>
                <option>Débutant</option>
                <option>Confirmé</option>
                <option>Senior</option>
            </select>
        </div>

    </div>
</section>

<!-- Dernières Offres -->
<div class="container">
    <h2 class="section-title">Dernières offres</h2>

    <div class="jobs-grid">

        <!-- Offre 1 -->
        <div class="job-card">
            <div class="job-header">
                <div>
                    <div class="job-title">Développeur Web</div>
                    <div class="company-name">Tech Solutions</div>
                </div>
                <div class="company-logo">TS</div>
            </div>

            <div class="job-meta">
                <div class="meta-item">📍 Casablanca</div>
                <div class="meta-item">⏱ CDI</div>
                <div class="meta-item">🎓 Bac+2</div>
            </div>

            <div class="tags">
                <div class="tag">PHP</div>
                <div class="tag">Laravel</div>
                <div class="tag">MySQL</div>
            </div>

            <div class="job-footer">
                <div class="salary">8 000 DH / mois</div>
                <button class="btn-apply">Postuler</button>
            </div>
        </div>

        <!-- Offre 2 -->
        <div class="job-card">
            <div class="job-header">
                <div>
                    <div class="job-title">Analyste Système</div>
                    <div class="company-name">Digital Corp</div>
                </div>
                <div class="company-logo">DC</div>
            </div>

            <div class="job-meta">
                <div class="meta-item">📍 Rabat</div>
                <div class="meta-item">⏱ CDD</div>
                <div class="meta-item">🎓 Bac+3</div>
            </div>

            <div class="tags">
                <div class="tag">UML</div>
                <div class="tag">Java</div>
                <div class="tag">SQL</div>
            </div>

            <div class="job-footer">
                <div class="salary">10 000 DH / mois</div>
                <button class="btn-apply">Postuler</button>
            </div>
        </div>

        <!-- Offre 3 -->
        <div class="job-card">
            <div class="job-header">
                <div>
                    <div class="job-title">Chef de Projet IT</div>
                    <div class="company-name">Innovatech</div>
                </div>
                <div class="company-logo">IT</div>
            </div>

            <div class="job-meta">
                <div class="meta-item">📍 Marrakech</div>
                <div class="meta-item">⏱ CDI</div>
                <div class="meta-item">🎓 Bac+5</div>
            </div>

            <div class="tags">
                <div class="tag">Gestion</div>
                <div class="tag">Agile</div>
                <div class="tag">Scrum</div>
            </div>

            <div class="job-footer">
                <div class="salary">12 000 DH / mois</div>
                <button class="btn-apply">Postuler</button>
            </div>
        </div>

    </div>
</div>

<!-- Categories -->
<div class="container">
    <h2 class="section-title">Catégories populaires</h2>

    <div class="categories-grid">
        <div class="category-card">
            <div class="category-icon">💻</div>
            <div class="category-name">Informatique</div>
            <div class="category-count">120 offres</div>
        </div>

        <div class="category-card">
            <div class="category-icon">📊</div>
            <div class="category-name">Finance</div>
            <div class="category-count">85 offres</div>
        </div>

        <div class="category-card">
            <div class="category-icon">🎨</div>
            <div class="category-name">Design</div>
            <div class="category-count">60 offres</div>
        </div>

        <div class="category-card">
            <div class="category-icon">🏭</div>
            <div class="category-name">Industrie</div>
            <div class="category-count">40 offres</div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    © 2026 CareerLink — Plateforme de recrutement moderne
</footer>

</body>
</html>
