<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Tags</title>
    <link rel="stylesheet" href="tags.css">
</head>
<body>
    <style>
        /* Base */
body {
    font-family: Arial, sans-serif;
    background-color: #0f172a;
    margin: 0;
    padding: 40px;
    color: #e5e7eb;
}

.section-title {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    color: #f9fafb;
}

/* Grid */
.tags-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 20px;
    max-width: 900px;
    margin: 0 auto;
}

/* Cards */
.tag-card {
    background-color: #1e293b;
    border-radius: 12px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid #334155;
}

.tag-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.8);
    border-color: #6366f1;
}

/* Tag name */
.tag-name {
    font-size: 18px;
    font-weight: 600;
    color: #e5e7eb;
    margin: 0;
}

/* Add tag card */
.add-tag {
    background-color: #020617;
    border: 2px dashed #6366f1;
}

.add-tag a {
    text-decoration: none;
}

.tag-plus {
    display: inline-block;
    font-size: 38px;
    color: #6366f1;
    margin-bottom: 10px;
}

/* Hover effect for add */
.add-tag:hover {
    background-color: #020617;
    border-color: #818cf8;
}

    </style>

<section>
    <h2 class="section-title">Tags populaires</h2>

    <div class="tags-grid">
        <!-- Add tag card -->
        <div class="tag-card add-tag">
            <a href="addTags">
                <span class="tag-plus">+</span>
            </a>
            <h3 class="tag-name">Ajouter</h3>
        </div>

        <!-- Tag cards -->
         <?php foreach($Tags as $tag):?>
        <div class="tag-card">
            <h3 class="tag-name"><?=$tag->name?></h3>
        </div>
        <?php endforeach;?>

    </div>
</section>

</body>
</html>

