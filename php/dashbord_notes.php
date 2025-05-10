<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - we1.com</title>
    <link rel="stylesheet" href="style_table_dashbord.css" />
</head>
<body>
<!-- start css  -->
<style>
  * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
        }
        
        /* En-tête */
        header {
            background-color: #2c3e50;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        
        .search-bar {
            flex-grow: 1;
            margin: 0 30px;
        }
        
        .search-bar input {
            width: 100%;
            max-width: 500px;
            padding: 8px 15px;
            border-radius: 20px;
            border: none;
            outline: none;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
        }
        
        .user-menu img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 20px;
            cursor: pointer;
        }
        
        /* Layout principal */
        .container {
            display: flex;
            min-height: calc(100vh - 70px);
        }
        
        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #34495e;
            color: white;
            padding: 20px 0;
        }
        
        .sidebar-menu {
            list-style: none;
        }
        
        .sidebar-menu li {
            padding: 12px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sidebar-menu li a{
            text-decoration: none;
            color: white;
        }
        
        .sidebar-menu li:hover {
            background-color: #2c3e50;
        }
        
        .sidebar-menu li.active {
            background-color: #2980b9;
        }
/* start modification  */
        /* .sidebar-menu li:focus{
            background-color: #2980b9;
        } */
        
        /* Contenu principal */
        .main-content {
            flex-grow: 1;
            padding: 30px;
        }
        
        .page-title {
            margin-bottom: 25px;
            color: #2c3e50;
        }
        
        /* Tableau des étudiants */
        .students-table {
            width: 100%;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        
        .students-table table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .students-table th, .students-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .students-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #495057;
        }
        
        .students-table tr:hover {
            background-color: #f8f9fa;
        }
        
        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .status.active {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status.inactive {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .action-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 5px;
            font-size: 13px;
        }
        
        .edit-btn {
            background-color: #ffc107;
            color: #212529;
        }
        
        .delete-btn {
            background-color: #dc3545;
            color: white;
        }

        /* thead tr th{
            background-color: black !important;
            color: white !important;
            text-align:center !important;
        }
        thead tr th{
            border: 2px solid white;
        } */
    </style>



<!-- ******************* end css -->
    <header>
        <div class="logo">we1.com</div>
        <div class="search-bar">
            <input type="text" placeholder="Rechercher...">
        </div>
        <div class="user-menu">
            <span>Admin</span>
            <img src="../../image/logo.jpg" alt="Profil admin">
            <!-- img src  -->
        </div>
    </header>
    
    <div class="container">
        <aside class="sidebar">
            <ul class="sidebar-menu">
                <li onclick="location.href='tableau_bord.php'"  >Tableau de bord</li>
                <li onclick="location.href='table_dashbord.php'" >Étudiants</li>
                <li onclick="location.href='tabledasbord_cours.php'" >Cours</li>
                <li class="active">Notes</li>
                <li onclick="location.href='table_admin.php'">Admin</li>
                <li>Aide</li>
            </ul>
        </aside>
        
        <main class="main-content">
            <h1 class="page-title">Liste des Étudiants</h1>
            
            <div class="students-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>idNote </th>
                            <th>IdModule </th>
                            <th>Note</th>
                            <th>SessionNote </th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $servernamee = "localhost"; // or the IP address of your server
                        $usernamee = "root"; // replace with your database username
                        $passwordd = ""; // replace with your database password
                        $databasee = "projet_web"; // replace with your database name

                        // Create connection
                        $conn = new mysqli($servernamee, $usernamee, $passwordd, $databasee);

                        if ($conn->connect_error) {
                            echo "conectionfailed".$conn->connect_error;
                        }
                        $sql = "SELECT * FROM note";
                        $result = $conn->query($sql);

                        if(! $result) {
                            die("CONNECTION WITH DATA INVALID LINE 65"). $conn->error;
                        }

                        // READ DATA FOR ROW
                        while($row = $result->fetch_assoc()) {
                           echo " <tr>
                            <td>" .$row["id_note"]. "</td>
                            <td>" . $row["id_etudiant"] . "</td>
                            <td> ". $row["id_module"] ."</td>
                            <td> ". $row["note"] . "</td>
                            <td> ". $row["session_note"] ."</td>
                            <td> ". $row["id_admin"] ."</td>
                            <td>
                                <button class='btn btn-primary btn-sm' href='update'  >Éditer</button>
                                <button class='action-btn  btn-danger btn-sm' href='delete'>Supprimer</button>
                            </td>

                        </tr> ";
                        }

                            //  <td>  <span class=' btn btn-primary btn-sm' href='update'    status active">Actif</span> </td>
 // <td> ". <span class="status active">Actif</span> ."</td>
                            // <td>
                            //     <button class="action-btn edit-btn">Éditer</button>
                            //     <button class="action-btn delete-btn">Supprimer</button>
                            // </td>

                        // if($conn->query($conn) === TRUE) {
                        //     echo "connection succefully";
                        // } else {
                        //     echo " connection definite". $conn->error;
                        // }

                    //    echo " <tr>
                    //         <td>#1001</td>
                    //         <td>Jean Dupont</td>
                    //         <td>jean.dupont@example.com</td>
                    //         <td>15/03/2024</td>
                    //         <td><span class="status active">Actif</span></td>
                    //         <td>
                    //             <button class="action-btn edit-btn">Éditer</button>
                    //             <button class="action-btn delete-btn">Supprimer</button>
                    //         </td>
                    //     </tr> "
                        ?>
                        <!-- <tr>
                            <td>#1002</td>
                            <td>Marie Martin</td>
                            <td>marie.martin@example.com</td>
                            <td>22/02/2024</td>
                            <td><span class="status active">Actif</span></td>
                            <td>
                                <button class="action-btn edit-btn">Éditer</button>
                                <button class="action-btn delete-btn">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1003</td>
                            <td>Pierre Bernard</td>
                            <td>pierre.bernard@example.com</td>
                            <td>10/04/2024</td>
                            <td><span class="status inactive">Inactif</span></td>
                            <td>
                                <button class="action-btn edit-btn">Éditer</button>
                                <button class="action-btn delete-btn">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1004</td>
                            <td>Sophie Petit</td>
                            <td>sophie.petit@example.com</td>
                            <td>05/01/2024</td>
                            <td><span class="status active">Actif</span></td>
                            <td>
                                <button class="action-btn edit-btn">Éditer</button>
                                <button class="action-btn delete-btn">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1005</td>
                            <td>Luc Durand</td>
                            <td>luc.durand@example.com</td>
                            <td>18/03/2024</td>
                            <td><span class="status active">Actif</span></td>
                            <td>
                                <button class="action-btn edit-btn">Éditer</button>
                                <button class="action-btn delete-btn">Supprimer</button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>