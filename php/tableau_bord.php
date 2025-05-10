



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - we1.com</title>
    <!-- <link rel="stylesheet" href="style_table_dashbord.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        /* .main-content .add_client{
            padding: 4px 10px;
            color: black;
            font-weight: bold;
            background-image: linear-gradient(to left, blue , white , blue);
            margin: -8px 0  10px 0;
        }
        
        .page-title {
            margin-bottom: 25px;
            color: #2c3e50;
        }
         */
       
        .main_modification .baliz{
            display: flex;
            flex-wrap: wrap;
            margin: 2px;
            border: 2px solid red;
            justify-content: space-around;
           
           
        }
       .main_modification .baliz > div{
        background-color: blueviolet;
        color: white;
        margin: 1px;
         height: 300px;
         width: 300px;
         margin-bottom: 10px;
       }
       .main_modification .baliz > div h2{
            width: 100%;
            text-align: center;
            height: 20%;
       }
/* start modification image dashbord admin */
       .main_modification .baliz > div .img{
             height: 60%; 
             background-size: cover;
           

       }
       .main_modification .add_Module .img{
        background-image: url(../../image/book.jpg) ;
        background-position: -10px;
       }
       .main_modification .add_student .img{
        background-image: url(../../image/student.jpg) ;
        background-position: -10px;
       }
       .main_modification .add_note .img{
        background-image: url(../../image/notes.jpg) ;
        background-position: -10px;
       }
       .main_modification .add_admin .img{
        background-image: url(../../image/admin.jpg) ;
        background-position: -10px;
       }
       /* end modification image dashbord admin */
        .main_modification .baliz > div .footer{
           width: 100%;
            height: 20%;
            background-color: beige;
            color: gray;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

                .main_modification .baliz > div .footer .icon i{
                    animation: animate 1s linear infinite;
                    cursor: pointer;
                    color: green ;
                }
                .main_modification .baliz > :hover{
                    transition: all .2s linear;
                    box-shadow: 0 0 8px black;
                    transform: translatey(-3px);
                }
                .main_modification .baliz > div .footer .icon i:hover{
                    animation-play-state: paused;
                      color: rgba(0, 157, 255, 0.737);
                }
            
                @keyframes animate{
                    0%,30%,40%,70%,90%{
                        scale: 1.5 1.5;
                    }
                }
        
        

       
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
                <li class="active">Tableau de bord</li>
                <li onclick="location.href='table_dashbord.php'" >Étudiants</li>
                <li onclick="location.href='tabledasbord_cours.php'" >Cours</li>
                <li onclick="location.href='dashbord_notes.php'" >Notes</li>
                <li onclick="location.href='table_admin.php'">Admin</li>
                <li>Aide</li>
            </ul>
        </aside>
        
        <main class="main-content">
            <h1 class="page-title">student space</h1>
            <!-- <button class="add_client" ><a href="../html/add_admin_student.html">add etudiant</a></button> -->
            <div class="main_modification">
                <div class="baliz">
                    <div class="add_student">
                        <h2>ADD STUDENT</h2>
                       <div class="img">
                         .
                       </div>
                        <div class="footer">
                            <h3>ADD STUDENT</h3>
                            <div class="icon"><a href="../html/add_admin_student.html"><i class="fa-solid fa-plus"></i></a></div>
                        </div>
                    </div>
                    <div class="add_Module">
                        <h2>MODULE</h2>

                        <div class="img">
                            .
                        </div>

                        <div class="footer">
                            <h3>ADD MODULE</h3>
                            <div class="icon" onclick="location.href='../html/form_module.html'" ><i class="fa-solid fa-plus"></i></div>
                        </div>
                    </div>
                    <div class="add_admin">
                        <h2>ADMIN</h2>
                       <div class="img">
                         .
                       </div>
                        <div class="footer">
                            <h3>ADD ADMIN</h3>
                            <div class="icon" onclick="location.href='../html/form_admin.html' ">
                               <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="add_note">
                        <h2>NOTES STUDENT</h2>
                       <div class="img">
                         .
                       </div>
                        <div class="footer">
                            <h3>ADD STUDENT NOTES</h3>
                            <div class="icon"><a href="../html/form_note.html"><i class="fa-solid fa-plus"></i></a></div>
                        </div>
                    </div>
                </div>
        </main>
    </div>

</body>
</html>