<?php
$servernamee = "localhost:607"; // or the IP address of your server
$usernamee = "root"; // replace with your database username
$passwordd = ""; // replace with your database password
$databasee = "projet_web"; // replace with your database name

// Create connection
$conn = new mysqli($servernamee, $usernamee, $passwordd, $databasee);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ");
}else{
    echo "connection successfully";
}
// echo "Connected successfully!" ;

if($_SERVER['REQUEST_METHOD'] == "POST"){
   
// 2. Récupérer les données du formulaire
$email = $_POST['username'];
$password = $_POST['password'];

// 3. Préparer et exécuter la requête SQL
//  $sql = "INSERT INTO etudiant(id_etudiant , nom,password) VALUES (1,'$nom', '$email')"; 
 


// Requête pour chercher l'utilisateur
$sql = "SELECT * FROM  etudiant WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Connexion réussie ! Bienvenue $nom.";
    header("location:../html/dashbord.html");
} else {
    header("location:../html/dashbord.html");
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}





// end compar 
// if ($conn->query($sql) === TRUE) {
//     echo "Données insérées avec succès !";
//     header("location: ../html/dashbord.html");
// } else {
//     echo "Erreur dans la exucution des donnee : " . $sql . "<br>" . $conn->error;
// }

// 4. Fermer la connexion
$conn->close();
}

?>

