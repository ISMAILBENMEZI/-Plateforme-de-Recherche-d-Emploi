<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - CareerLink</title>
    <link rel="stylesheet" href="/Plateforme-de-Recherche-d-Emploi/view/public_assets/CSS/style.css">
</head>
<body>

<nav>
    <div class="nav-container">
        <div class="logo">CareerLink</div>
        <a href="register.html" class="btn-primary">S'inscrire</a>
    </div>
</nav>

<div class="auth-container">
    <div class="auth-card">
        <h2>Connexion</h2>

        <form action="login" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="exemple@email.com" required>
            </div>

            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="********" required>
            </div>

            <button type="submit" class="btn-primary btn-full">Se connecter</button>

            <p class="auth-link">
                Pas encore de compte ? <a href="derregister">Créer un compte</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
