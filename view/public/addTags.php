<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Tag</title>
<link rel="stylesheet" href="view/public_assets/CSS/AddTags.cdd">
</head>
<body>

<div class="card">
    <h2>Add New Tag</h2>
    <form action="addTags" method="POST">
        <label for="name">Tag Name</label>
        <input type="text" id="name" name="TagName" placeholder="Enter tag name" required>
        
        <label for="category">Category</label>
        <select id="category" name="categoryId" required>
            <option value="">Select a category</option>
            <?php 
            $selectedCategoryId = $_GET['categoryId'] ?? null;
             $adminServices = new \App\Services\AdminServices();
            $categories = $adminServices->getAllCategory();
            
            foreach ($categories as $category): 
            ?>
                <option value="<?= $category->id ?>" 
                    <?= ($selectedCategoryId == $category->id) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($category->name) ?>
                </option>
            <?php endforeach; ?>
        </select>
        
        <input type="submit" value="Add Tag" id="button-sbt" name="submit-TagName">
    </form>
    
    <div class="back-link">
        <a href="categories">← Back to Categories</a>
    </div>
</div>

</body>
</html>