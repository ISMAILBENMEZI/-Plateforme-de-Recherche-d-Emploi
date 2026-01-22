<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CareerLink - Accueil</title>

    <!-- CSS principal -->
    <link rel="stylesheet" href="view/public_assets/CSS/style.css">
</head>
<body>

<!-- Navigation -->
<nav>
    <div class="nav-container">
        <div class="logo">CareerLink</div>

        <ul class="nav-links">
            <li><a href="home">Accueil</a></li>
            <li><a href="offers">Offres</a></li>
            <li><a href="categories">Catégories</a></li>
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

<footer>
    © 2026 CareerLink — Plateforme de recrutement moderne
</footer>

</body>
</html>
