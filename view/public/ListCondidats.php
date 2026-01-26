<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Liste des Candidats - CareerLink</title>
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
    <style>
        /* ===== STYLE PAGE CANDIDATS ===== */

        .candidates-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .candidate-card {
            background: #1a1f3a;
            border: 1px solid #2d3451;
            border-radius: 12px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .candidate-card:hover {
            transform: translateY(-5px);
            border-color: #6366f1;
        }

        .candidate-info p {
            margin-bottom: 8px;
            color: #94a3b8;
            font-size: 14px;
        }

        .candidate-name {
            font-size: 17px;
            font-weight: bold;
            color: #e2e8f0;
        }

        .candidate-job {
            color: #6366f1;
            font-weight: 500;
        }

        .candidate-actions {
            margin-top: 15px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .candidate-actions button {
            padding: 8px 14px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-size: 13px;
            background: #121633;
            color: #e2e8f0;
            transition: all 0.2s ease;
        }

        .candidate-actions button:hover {
            background: #2d3451;
            transform: translateY(-2px);
        }

        .btn-accept {
            background: #10b981 !important;
            color: white;
        }

        .btn-refuse {
            background: #ef4444 !important;
            color: white;
        }
    </style>
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
            <?php foreach ($condidats as  $condidat) { ?>
                <div class="candidate-card">
                    <div class="candidate-info">
                        <p class="candidate-name">Nom : <?= $condidat->user->getName() ?></p>
                        <p class="candidate-email">Email : <?= $condidat->user->getEmail() ?></p>
                        <p class="candidate-job">Poste : <?= $condidat->offer->getJobName() ?></p>
                        <p class="candidate-skills">Compétences :</p>
                    </div>
                    <form action="" method="POST">
                        <div class="candidate-actions">
                            <input type="hedden" name="postule" value="<?= $condidat->id ?>">
                            <input type="hidden" name="user" value="<?= $condidat->user->getId() ?>">
                            <button name="Profil">Voir Profil</button>

                            <button name="Telecharger"> Télécharger CV</button>

                            <button name="accepter" class="btn-accept">Accepter</button>


                            <button name="refuser" class="btn-refuse">Refuser</button>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </section>
    </div>

</body>

</html>