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
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $sql = " SELECT * from admin_et where nom_admin = '$name' and password_admin = '$pass'";
    // $sql = " INSERT INTO admin_et(id_admin, nom_admin , email , password_admin) values(1,'zouhair','$name' , '$pass')";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "Connexion réussie ! Bienvenue $nom.";
    header("location:tableau_bord.php");
    exit();
} else {
    // header("location:../html/dashbord.html");
    echo "Nom d'utilisateur ou mot de passe incorrect.";
    exit();
}

}


?>