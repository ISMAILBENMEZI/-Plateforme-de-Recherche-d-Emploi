<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Liste des Candidats - CareerLink</title>
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
</head>

<body>

    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">
                <li><a href="offers">Mes Offres</a></li>
                <li><a href="candidates">Candidats</a></li>
                <li><a href="creatOffer">+ Nouvelle Offre</a></li>
            </ul>
            <a href="logout" class="btn-primary">Déconnexion</a>
        </div>
        </div>
    </nav>

    <div class="container">
        <h1>Liste des Candidats</h1>

        <section class="candidates-list">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="candidate-card">
                    <div class="candidate-info">
                        <p class="candidate-name">Nom : <?= $row['name'] ?></p>
                        <p class="candidate-email">Email : <?= $row['email'] ?></p>
                        <p class="candidate-job">Poste : <?= $row['job'] ?></p>
                        <p class="candidate-skills">Compétences : <?= $row['skills'] ?></p>
                        <p class="candidate-status">Statut : <?= $row['status'] ?></p>
                    </div>

                    <div class="candidate-actions">
                        <a href="voirProfil.php?id=<?= $row['user_id'] ?>">
                            <button>Voir Profil</button>
                        </a>

                        <a href="telechargerCV.php?id=<?= $row['postule_id'] ?>">
                            <button>Télécharger CV</button>
                        </a>

                        <a href="changerStatut.php?id=<?= $row['postule_id'] ?>&status=acceptée">
                            <button class="btn-accept">Accepter</button>
                        </a>

                        <a href="changerStatut.php?id=<?= $row['postule_id'] ?>&status=refusée">
                            <button class="btn-refuse">Refuser</button>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </section>
    </div>

</body>

</html>