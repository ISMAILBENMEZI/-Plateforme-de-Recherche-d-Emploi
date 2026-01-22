<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Plateforme de Recrutement</title>
    <link rel="stylesheet" href="view/public_assets/CSS/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&icon_names=health_cross" /><body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">

                <li><a href="home">Accueil</a></li>             
                   <li><a href="offers">Offres</a></li>
                <li><a href="categories">Catégories</a></li>
            </ul>
            <a href="#login" class="btn-primary">Connexion</a>
        </div>
    </nav>

    <section>
        <h2 class="section-title">Catégories populaires</h2>
        <div class="categories-grid">
            
              <div class="category-card">
                <a href="addCategorie">
            <div class="category-icon">

            <span class="material-symbols-outlined">
            health_cross
            </span>
            </div></a>
            <h3 class="category-name">add</h3>  
            </div>
            <?php foreach($categories as $cat):?>
            <div class="category-card">
                <a href="Tags">
                <h3 class="category-name"><?=$cat->name?></h3>
                <input type="hidden" value="<?=$cat->id?>" name="categoryId">
                </a>
            </div>
            <?php endforeach;?>
        </div>
        </section>

</body>
</html>