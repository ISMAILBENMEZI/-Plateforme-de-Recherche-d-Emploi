<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Candidat - CareerLink</title>
    <link rel="stylesheet" href="../public_assets/CSS/style.css">
</head>
<body>

<nav>
    <div class="nav-container">
        <div class="logo">CareerLink</div>
        <ul class="nav-links">
            <li><a href="home.php">Accueil</a></li>
            <li><a href="offers.php">Offres</a></li>
        </ul>
    </div>
</nav>

<!-- SELECT CATEGORY -->
<section class="search-section">
    <div class="search-container">
        <h2 class="section-title">Choisir une catégorie</h2>

        <form method="GET" action="">
            <select name="category" class="filter-select">
                <option value="">-- Choisir une catégorie --</option>

                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id ?>"
                        <?= (!empty($selectedCategory) && $selectedCategory == $category->id) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($category->name) ?>
                    </option>
                <?php endforeach; ?>

            </select>

            <button type="submit" class="btn-primary">Valider</button>
        </form>
    </div>
</section>

<!-- SHOW SKILLS -->
<?php if (!empty($skills)): ?>
<section class="search-section">
    <div class="search-container">
        <h2 class="section-title">Compétences disponibles</h2>

        <form class="skills-list" method="POST" action="">
            <?php foreach ($skills as $skill): ?>
                <label class="skill-item">
                    <input type="checkbox" name="skills[]" value="<?= $skill->id ?>">
                    <?= htmlspecialchars($skill->name) ?>
                </label>
            <?php endforeach; ?>
        </form>
    </div>
</section>
<?php endif; ?>

</body>
</html>
