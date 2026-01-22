<?php
session_start();

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Model\Repository\CategoryRepository;
use App\Model\Repository\SkillRepository;

$categoryRepo = new CategoryRepository();
$categories = $categoryRepo->getAll();

$selectedCategory = $_GET['category'] ?? null;

$skills = [];
if ($selectedCategory) {
    $skillRepo = new SkillRepository();
    $skills = $skillRepo->getByCategory($selectedCategory);
}
?>

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
                <li><a href="Home.php">Accueil</a></li>
                <li><a href="offers.php">Offres</a></li>
            </ul>
        </div>
    </nav>

    <!-- SELECT CATEGORY -->
    <section class="search-section">
        <div class="search-container">
            <h2 class="section-title">Choisir une catégorie</h2>
            <form method="GET" action="" class="search-bar">
                <select name="category" class="filter-select" required>
                    <option value="">-- Choisir une catégorie --</option>

                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->id ?>"
                            <?= ($selectedCategory == $category->id) ? 'selected' : '' ?>>
                            <?= $category->name ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <button type="submit" class="btn-primary">Valider</button>
            </form>
        </div>
    </section>

    <!-- SHOW SKILLS -->
    <?php if ($selectedCategory && !empty($skills)): ?>
        <section class="search-section">
            <div class="search-container">
                <h2 class="section-title">Compétences disponibles</h2>

                <form class="skills-list" method="POST" action="save_skills.php">
                    <?php foreach ($skills as $skill): ?>
                        <label class="skill-item">
                            <input type="checkbox" name="skills[]" value="<?= $skill->id ?>">
                            <?= $skill->name ?>
                        </label>
                    <?php endforeach; ?>

                    <button type="submit" class="btn-primary">Enregistrer</button>
                </form>
            </div>
        </section>
    <?php endif; ?>

</body>
</html>
