<!DOCTYPE html>
<html>

<head>
    <title>Test Offer Form</title>
    <link rel="stylesheet" href="view/public_assets/CSS/addOffer.css">
</head>

<body>

    <h2>Create Offer</h2>

    <form method="POST" action="creatOffer">

        <label for="Title">Title:</label>
        <input type="text" name="title" id="Title" value="<?= $offer->title ?? '' ?>" required>

        <label for="job_name">Job Name:</label>
        <select name="job_name" id="job_name" required>
            <option value="">Select Job</option>
            <option value="1">Web Developer</option>
            <option value="2">Graphic Designer</option>
            <option value="3">Data Analyst</option>
        </select>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" value="<?= $offer->salary  ?? '' ?>" required>

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="<?= $offer->location  ?? '' ?>" required>

        <label for="deadline">Deadline:</label>
        <input type="date" name="deadline" id="deadline" value="<?= $offer->application_deadline  ?? '' ?>" required>

        <label for="skillSelect">Skills:</label>
        <select id="skillSelect">
            <option value="">Select skill</option>
            <option value="1">PHP</option>
            <option value="2">JavaScript</option>
            <option value="3">HTML/CSS</option>
            <option value="4">Photoshop</option>
            <option value="5">SQL</option>
        </select>

        <div id="skillsContainer">
            <?php if ($offer->skilles): ?>
                <?php foreach ($offer->skilles as $skilles): ?>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="submit">Create Offer</button>
    </form>
    <script src="view/public_assets/JS/addOffer.js"></script>
</body>

</html>