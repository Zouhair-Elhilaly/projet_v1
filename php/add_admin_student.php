
<?php

//************* start php *********************** */


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

//   !empty($_POST['email']) && !empty($_POST['password']))

if ($_SERVER['REQUEST_METHOD'] == "POST" ) {

    $name = $_POST['name'];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $family_name = $_POST['family_name'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $inscription = $_POST['inscription'];

    if (
        !empty($name) && !empty($family_name) &&
        !empty($birthday) && !empty($email) &&
        !empty($password) && !empty($phone) && !empty($inscription)
    ) {
        $sql = "INSERT INTO etudiant(nom, prenom, date_naissance, tel_e, email, password, num_insc)
                VALUES ('$name', '$family_name', '$birthday', '$phone', '$email', '$password', '$inscription')";

        if ($conn->query($sql) === TRUE) {
            header("Location: table_dashbord.php");
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
}
    ?>