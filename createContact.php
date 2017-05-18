<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Contact</title>
</head>
<body>
    <form action="saveContact.php" method="post">
        <fieldset>
            <label for="firstName">First Name:</label>
            <input name="firstName" id="firstName"/>

            <label for="lastName">Last Name:</label>
            <input name="lastName" id="lastName"/>

            <label for="email">Email:</label>
            <input name="email" id="email"/>
        </fieldset>
        <button type="submit">Submit</button>
    </form>
</body>
</html>