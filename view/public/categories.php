<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Plateforme de Recrutement</title>
    <link rel="stylesheet" href="view/public_assets/CSS/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&icon_names=health_cross" />
</head>
<style>
    #btn-tags {
    padding: 8px 16px;
    background-color: #3b82f6;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s;
    margin-right: 5px;
}

#btn-tags:hover {
    background-color: #2563eb;
}

#card-actions {
    display: flex;
    gap: 5px;
    margin-top: 10px;
    flex-wrap: wrap;
    justify-content: center;
}

#card-actions form {
    margin: 0;
}
</style>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">
                <li><a href="home">Accueil</a></li>
                <li><a href="offers">Offres</a></li>
                <li><a href="categories">Catégories</a></li>
            </ul>
            <a href="logaut" class="btn-primary">deconnexion</a>
        </div>
    </nav>

    <section>
        <h2 class="section-title">Catégories populaires</h2>
        <div class="categories-grid">
    
            <!-- Add Category Card -->
            <div class="category-card">
                <div class="category-icon">
                    <form action="addCategorie" method="POST">
                        <input type="submit" value="+" id="btn-Add">
                        <h3 class="category-name">Ajouter Catégorie</h3>
                    </form>
                </div>
            </div>

            <!-- Add Tags Card -->
            <div class="category-card">
                <div class="category-icon">
                    <form action="addTags" method="GET">
                        <input type="submit" value="+" id="btn-Add">
                        <h3 class="category-name">Ajouter Tags</h3>
                    </form>
                </div>
            </div>

            <!-- Display Categories -->
            <?php foreach ($categories as $cat): ?>
                <div class="category-card">
                    <h3 class="category-name"><?= htmlspecialchars($cat->name) ?></h3>
                    <div id="card-actions">
                        <form action="Tags" method="POST" style="display: inline;">
                            <input type="hidden" value="<?= $cat->id ?>" name="categoryId">
                            <input type="submit" value="Tags" id="btn-tags" name="viewTags">
                        </form>
                        <form action="categories" method="POST" style="display: inline;">
                            <input type="hidden" value="<?= $cat->id ?>" name="categoryId">
                            <input type="submit" value="Modifier" id="btn-edit" name="edit">
                            <input type="submit" value="Supprimer" id="btn-delete" name="deleteBtn">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</body>
</html>