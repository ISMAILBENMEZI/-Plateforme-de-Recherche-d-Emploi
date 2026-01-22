<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dark Input Page</title>
<style>
    * {
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        margin: 0;
        height: 100vh;
        background: #0f1115;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #e5e7eb;
    }

    .card {
        background: #181b22;
        padding: 30px;
        width: 350px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .card h2 {
        text-align: center;
        margin-bottom: 20px;
        font-weight: 500;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-size: 14px;
        color: #aab0c0;
    }

    input, textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border-radius: 6px;
        border: 1px solid #2a2f3a;
        background: #0f1115;
        color: #e5e7eb;
        outline: none;
        transition: border 0.2s, box-shadow 0.2s;
    }

    input::placeholder,
    textarea::placeholder {
        color: #6b7280;
    }

    input:focus,
    textarea:focus {
        border-color: #4f46e5;
        box-shadow: 0 0 0 2px rgba(79,70,229,0.3);
    }

   #button-sbt {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 6px;
        background: #4f46e5;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        transition: background 0.2s;
    }

    #button-sbt:hover {
        background: #4338ca;
    }
</style>
</head>
<body>

<div class="card">
    

    <form action="../../index.php" method="POST">
    <label for="name">Name of Tag</label>
    <input type="text" id="name" name="TagName" placeholder="Enter your name">

    <input type="submit" value="Submit" id="button-sbt" name="submit-TagName">
    </form>
</div>

</body>
</html>
