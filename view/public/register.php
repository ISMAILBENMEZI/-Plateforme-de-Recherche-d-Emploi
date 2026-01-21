<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - CareerLink</title>
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
</head>
<body>

<nav>
    <div class="nav-container">
        <div class="logo">CareerLink</div>
        <a href="login.html" class="btn-primary">Connexion</a>
    </div>
</nav>

<div class="auth-container">
    <div class="auth-card">
        <h2>Créer un compte</h2>

        <form action="register" method="POST">
            <div class="form-group">
                <label>Nom complet</label>
                <input type="text" name="name" placeholder="Votre nom" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="exemple@email.com" required>
            </div>

            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="********" required>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="passwordConfig" placeholder="********" required>
            </div>

            <div class="form-group">
                <label>Type de compte</label>
                <select name="role">
                    <option value="candidat">Candidat</option>
                    <option value="recruteur">Recruteur</option>
                </select>
            </div>

            <button type="submit" class="btn-primary btn-full">S'inscrire</button>

            <p class="auth-link">
                Déjà inscrit ? <a href="derLogin">Se connecter</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
