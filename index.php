<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Arial";
        }

        input{
            font-size: 1.5em;
            height: 50px;
            width:200px;
        }
    </style>
</head>
<body>
    <h3>Welcome to software engineer company. Input your details here to register</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="FullName">Full Name </label><input type="text" name="FullName"></p>
        <p><label for="Email">Email </label><input type="text" name="email"></p>
        <p><label for="TechStack">Tech Stack </label><input type="text" name="TechStack"></p>
        <p><label for="YearsExp">Years of Experience </label><input type="text" name="YearsExp"></p>
        <p><label for="Education">Highest Education </label><input type="text" name="Education"></p>
        <p><label for="Portfolio">Portfolio URL </label><input type="text" name="Portfolio">
            <input type="submit" name="insertNewSoftwareEngBtn">
        </p>
</body>
</html>