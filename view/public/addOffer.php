<!DOCTYPE html>
<html>

<head>
    <title>Test Offer Form</title>
    <link rel="stylesheet" href="view/public_assets/CSS/addOffer.css">
</head>

<body>

    <h2><?= isset($offer) ? 'Update Offer' : 'Create Offer' ?></h2>
    <form method="POST" action="<?= isset($offer) ? 'updateOffer' : 'creatOffer' ?>">

        <label for="Title">Title:</label>
        <input type="text" name="title" id="Title" value="<?= $offer?->getTitle() ?? '' ?>" required>
        <input type="hidden" name="user_id" value="<?= $offer?->getUserId() ?? '' ?>">
        <input type="hidden" name="offer_id" value="<?= $offer?->getId() ?? '' ?>">

        <label for="job_name">Job Name:</label>
        <select name="job_name" id="job_name" required>
            <option value="">Select Category</option>
        </select>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" value="<?= $offer?->getSalary()  ?? '' ?>" required>

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="<?= $offer?->getLocation()  ?? '' ?>" required>

        <label for="deadline">Deadline:</label>
        <input type="date" name="deadline" id="deadline" value="<?= $offer?->getDeadline()  ?? '' ?>" required>

        <label for="skillSelect">Skills:</label>
        <select id="skillSelect" name="skillSelect"></select>
        <div id="skillsContainer">
            <?php if ($offer && !empty($offer->getSkills())): ?>
                <?php foreach ($offer->getSkills() as $skill): ?>
                    <input type="hidden"
                        name="skills[]"
                        value="<?= $skill['id'] ?>"
                        data-id="<?= $skill['id'] ?>">

                    <span class="addNewTags"
                        data-id="<?= $skill['id'] ?>">
                        <?= htmlspecialchars($skill['name']) ?> ×
                    </span>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="submit"><?= isset($offer) ? 'Update Offer ' : 'Create Offer' ?></button>
    </form>
    <script src="view/public_assets/JS/addOffer.js"></script>
</body>

</html>