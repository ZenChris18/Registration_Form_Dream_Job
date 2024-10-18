<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Engineer Registration</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
        }
        input, select {
            font-size: 1.5em;
            height: 50px;
            width: 250px;
            margin: 10px 0;
        }
        label {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h3>Welcome to Software Engineer Company. Please register your details below:</h3>
    <form action="core/handleForms.php" method="POST">
        <p>
            <label for="FullName">Full Name: </label>
            <input type="text" name="FullName" id="FullName" required>
        </p>
        <p>
            <label for="Email">Email: </label>
            <input type="email" name="email" id="Email" required>
        </p>
        <p>
            <label for="TechStack">Tech Stack: </label>
            <select name="TechStack" id="TechStack" onchange="showOtherTechStack(this)">
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="C#">C#</option>
                <option value="PHP">PHP</option>
                <option value="Ruby">Ruby</option>
                <option value="Go">Go</option>
                <option value="Rust">Rust</option>
                <option value="Other">Other</option>
            </select>
        </p>

        <p id="otherTechStackField" style="display:none;">
            <label for="OtherTechStack">Please specify: </label>
            <input type="text" name="OtherTechStack" id="OtherTechStack" placeholder="Enter your tech stack">
        </p>

        <p>
            <label for="YearsExp">Years of Experience: </label>
            <input type="number" name="YearsExp" id="YearsExp" min="0" required>
        </p>
        <p>
            <label for="Education">Highest Education: </label>
            <input type="text" name="Education" id="Education" required>
        </p>
        <p>
            <label for="Portfolio">Portfolio URL: </label>
            <input type="url" name="Portfolio" id="Portfolio" placeholder="https://example.com" required>
        </p>
        <p>
            <input type="submit" name="insertNewSoftwareEngBtn" value="Register">
        </p>
    </form>

    <script src="js/scripts.js"></script>
</body>
</html>
