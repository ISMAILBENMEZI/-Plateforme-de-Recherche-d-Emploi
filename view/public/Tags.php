<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Tags</title>
    <link rel="stylesheet" href="view/public_assets/CSS/tags.css">
</head>
<body>
    <style>
        /* Base */

    </style>

<div class="back-link">
    <a href="categories">← Retour aux Catégories</a>
</div>

<section>
    <h2 class="section-title">Tags</h2>

    <div class="tags-grid">
        <!-- Add tag card -->
        

        <!-- Tag cards -->
        <?php if (!empty($Tags)): ?>
            <?php foreach($Tags as $tag): ?>
                <div class="tag-card">
                    <h3 class="tag-name"><?= htmlspecialchars($tag->name) ?></h3>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no-tags">
                <p>Aucun tag trouvé pour cette catégorie</p>
            </div>
        <?php endif; ?>
    </div>
</section>

</body>
</html>