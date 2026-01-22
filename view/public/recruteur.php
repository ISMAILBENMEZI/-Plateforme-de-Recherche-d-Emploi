<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Recruteur - CareerLink</title>
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
</head>

<body>

    <nav>
        <div class="nav-container">
            <div class="logo">CareerLink</div>
            <ul class="nav-links">
                <li><a href="offers">Mes Offres</a></li>
                <li><a href="createNewOffer" class="btn-primary">+ Nouvelle Offre</a></li>

            </ul>
            <a href="logout">Déconnexion</a>
        </div>
    </nav>

    <div class="dashboard-container">
        <h1>Bienvenue, Recruteur !</h1>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-value">15</div>
                <div class="stat-label">Offres publiées</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">48</div>
                <div class="stat-label">Candidatures reçues</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">5</div>
                <div class="stat-label">Offres actives</div>
            </div>
        </div>

        <section class="jobs-list">
            <h2 class="section-title">Offres d'emploi récentes</h2>

            <div class="job-item">
                <div class="job-info">
                    <h3 class="job-title">Développeur Full Stack</h3>
                    <p class="job-company">Tech Innovations SA • Casablanca</p>
                    <div class="job-meta">
                        <span>CDI</span>
                        <span>Il y a 2 jours</span>
                    </div>
                </div>
                <div class="job-actions">
                    <a href="candidat" class="btn-primary"> Voir les candidats</a>
                </div>
            </div>

            <div class="job-item">
                <div class="job-info">
                    <h3 class="job-title">Chef de Projet Digital</h3>
                    <p class="job-company">Digital Marketing Pro • Rabat</p>
                    <div class="job-meta">
                        <span>Freelance</span>
                        <span>Il y a 5 jours</span>
                    </div>
                </div>
                <div class="job-actions">
                    <button name="candidat" class="btn-primary">Voir les candidats</button>
                </div>
            </div>

            <div class="job-item">
                <div class="job-info">
                    <h3 class="job-title">Analyste Financier</h3>
                    <p class="job-company">Finance Corp • Casablanca</p>
                    <div class="job-meta">
                        <span>CDI</span>
                        <span>Il y a 1 semaine</span>
                    </div>
                </div>
                <div class="job-actions">
                    <button class="btn-primary">Voir les candidats</button>
                </div>
            </div>
        </section>
    </div>

</body>

</html>