<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Plateforme de Recrutement</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="view/public_assets/CSS/style.css">
=======

<
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">

>>>>>>> f4f2aaca0c14df8079a587d4a075f5550974446c
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&icon_names=health_cross" /><body>

  </head>
<body>
    <!-- Navigation -->
     <style>
        #card-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

#btn-edit,
#btn-delete {
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    transition: 0.3s ease;
}

/* Modify button */
#btn-edit {
    background-color: #3498db;
}

#btn-edit:hover {
    background-color: #2980b9;
}

/* Delete button */
#btn-delete {
    background-color: #e74c3c;
}

#btn-delete:hover {
    background-color: #c0392b;
}
#btn-view {
    background-color: #10b981; /* success green */
    color: white;
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s ease;
}

#btn-view:hover {
    background-color: #059669;
}
#btn-Add{
      background-color: #333333; /* success green */
    color: white;
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s ease;

}
#btn-Add:hover {
    background-color: #3e4241;
}

     </style>
    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">

                <li><a href="home">Accueil</a></li>             
                   <li><a href="offers">Offres</a></li>



                <li><a href="Home">Accueil</a></li>
                <li><a href="offers">Offres</a></li>

                <li><a href="categories">Catégories</a></li>
           
            </ul>
            <a href="logaut" class="btn-primary">deconnexion</a>
        </div>
    </nav>
    

    <section>
        <h2 class="section-title">Catégories populaires</h2>
        <div class="categories-grid">
               <a href="addCategorie">
              <div class="category-card">
             
            <div class="category-icon">

            <button id="btn-Add">
                  +
           </button>
            </a>
            
            <h3 class="category-name">add</h3>  
 </div>
            
           
            </div>
               <!-- </a> -->
            <?php foreach($categories as $cat): ?>
                <div class="category-card">
                    <h3 class="category-name"><?= $cat->name ?></h3>
                    <!-- Action buttons -->
                    <div id="card-actions">
                       <form action="Tags" method="POST">
                        <input type="hidden" value="<?= $cat->id?>" >
                        <input type="submit"  id="btn-view" value="View" name="categoryId">

                        <input  type="submit" value="Modifier" id="btn-edit">
                         
                        <input  type="submit" value="Supprimer" id="btn-delete" name="deleteBtn">
                            </form>
                     
                       
                    </div>

                </div>
            <?php endforeach; ?>
        </div>


        </section>

</body>
</body>

</html>