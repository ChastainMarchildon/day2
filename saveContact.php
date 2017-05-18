<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Contact</title>
</head>
<body>
<h1>Saving Contact...</h1>

    <?php
    //Retrives user inputted fields and displays them
        $firstName= $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        echo 'First Name: '.$firstName.'</br>';
        echo 'Last Name: '.$lastName.'</br>';
        echo 'Email: '.$email;

        // Let's connect to the database and save our file
    //Step 1 connect to the DB
    $conn = new PDO('mysql:host=localhost;dbname=phpmyadmin', 'root','');
    //Step 2 create SQL command
    $sql= "INSERT INTO contacts(firstName, lastName, email)
           VALUES(:firstName, :lastName, :email)";
    //Step 3 prepare the command to prevent attacks
    $cmd = $conn->prepare($sql);
    $cmd->bindParam('firstName', $firstName, PDO::PARAM_STR, 30);
    $cmd->bindParam('lastName', $lastName, PDO::PARAM_STR, 30);
    $cmd->bindParam('email', $email, PDO::PARAM_STR, 120);
    //Step 4 execute the sql
    $cmd ->execute();
    //Step 5 close the connection to the DB
    $conn=null;
    //Step 6 redirect to a new page
    ?>
</body>
</html>
