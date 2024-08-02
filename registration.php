<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <form action="done.php" method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>

        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">Select Country</option>
            <option value="Egypt">Egypt</option>
            <option value="USA">USA</option>
        </select><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Mr." required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Miss" required>
        <label for="female">Female</label><br><br>

        <label>Skills:</label><br>
        <input type="checkbox" id="php" name="skills[]" value="PHP">
        <label for="php">PHP</label><br>
        <input type="checkbox" id="mysql" name="skills[]" value="MySQL">
        <label for="mysql">MySQL</label><br>
        <input type="checkbox" id="j2se" name="skills[]" value="J2SE">
        <label for="j2se">J2SE</label><br>
        <input type="checkbox" id="postgresql" name="skills[]" value="PostgreSQL">
        <label for="postgresql">PostgreSQL</label><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="OpenSource"><br><br>

        <label for="captcha">Code Verification:</label>
        <p>Sh68Sa</p>
        <input type="text" id="captcha" name="captcha" required><br>
        <label>Please Insert the code above:</label><br><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>