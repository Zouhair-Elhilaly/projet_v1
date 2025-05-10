<?php 
$servername = "localhost"; // or the IP address of your server
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$database = "projet_web"; // replace with your database name


$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("". $conn->connect_error);
}
echo "connected succefully";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['module_name'];
    $code = $_POST['module_code'];
    if (
        !empty($name) && !empty($code) ){
        $sql = " INSERT INTO module (nom_module, code_module) VALUES ('$name', '$code') ";


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