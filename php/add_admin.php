
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_web";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erreur connexion : " . $conn->connect_error);
}
else{
    echo "connection active";
}

if ($_SERVER['REQUEST_METHOD'] == "POST" ) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
//hashing the password
    if (
        !empty($name) && !empty($email) &&
        !empty($password)) {
        $sql = "INSERT INTO admin_et(nom_admin, email, password_admin)
                VALUES ('$name','$email', '$hash')";

        if ($conn->query($sql) === TRUE) {
            header("Location: tableau_bord.php");
            exit();
        } else {
            echo "Erreur lors de l'insertion : " . $conn->error;
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
    }else{
        echo "erreur de requete";
    }

    ?>