<?php
include_once './resource/database.php';

if ( isset( $_POST['email'] ) ) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash( $password, PASSWORD_DEFAULT );

    try {
        $sqlInsert = "INSERT INTO users ( email, username, password, join_date) values
                (:email, :username, :password, now()) ";

        $statement = $db->prepare( $sqlInsert );

        $statement->execute( array( ':username'=>$username, ':email'=>$email, ':password'=>$hashedPassword ) );

        if ( $statement->rowCount() == 1 ) {
            $result = "<p style='padding: 20px color: green;'>Record updated Successfully</p>";
        }

    } catch( PDOExeception $ex ) {

        $result = "<p style='padding: 20px color: red;'>Record updation failed". $ex->getMessage().'</p>';

    }
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <meta http-equiv='X-UA-Compatible' content='ie=edge' />
    <title>Sign up Page</title>
</head>

<body>
    <h3>Registration</h3>

    <form method='POST' action=''>
        <table>
            <tr>
                <td>Email</td>
                <td><input type='email' value='' name='email' /></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type='text' value='' name='username' /></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type='password' value='' name='password' /></td>
            </tr>

            <tr>
                <td></td>
                <td><input type='submit' value='Sign Up' /></td>
            </tr>
        </table>
    </form>

    <p><a href='index.php'>Back</a></p>
</body>

</html>