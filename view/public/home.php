<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CareerLink</title>
    <link rel="stylesheet" href="../public_assets/CSS/style.css">
</head>
<body>

<nav>
    <div class="nav-container">
        <div class="logo">CareerLink</div>

        <ul class="nav-links">
            <li><a href="Home.php">Accueil</a></li>
            <li><a href="offers.php">Offres</a></li>
            <li><a href="categories.php">Catégories</a></li>

            <?php if (isset($_SESSION['user'])): ?>
                <?php if ($_SESSION['user']->role === 'candidat'): ?>
                    <li><a href="candidate_dashboard.php">Mon Dashboard</a></li>
                <?php elseif ($_SESSION['user']->role === 'recruteur'): ?>
                    <li><a href="recruiter_dashboard.php">Dashboard Recruteur</a></li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>

        <?php if (isset($_SESSION['user'])): ?>
            <a href="logout.php" class="btn-primary">Déconnexion</a>
        <?php else: ?>
            <a href="login.php" class="btn-primary">Connexion</a>
        <?php endif; ?>
    </div>
</nav>

<section class="hero">
    <h1>Trouvez votre prochain emploi</h1>
    <p>Des milliers d'opportunités vous attendent</p>

    <?php if (!isset($_SESSION['user'])): ?>
        <a href="register.php" class="btn-primary">Créer un compte</a>

    <?php elseif ($_SESSION['user']->role === 'candidat'): ?>
        <a href="candidate_dashboard.php" class="btn-primary">
            Voir mes offres recommandées
        </a>

    <?php elseif ($_SESSION['user']->role === 'recruteur'): ?>
        <a href="recruiter_dashboard.php" class="btn-primary">
            Gérer mes offres
        </a>
    <?php endif; ?>
</section>

</body>
</html>
