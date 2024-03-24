<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ordinateur</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <!-- Bootstrap JS and Popper.js -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 0.7em;
            font-weight: 300;
            line-height: 1.7em;
            color: #d3cdcd;
        }

        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 220px;
            background: #0a0e1f;
            color: #fcf9f9;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: 11131fr;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 15px;
            font-size: 1.2em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: 11131f;
            background: #131836;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fcfafa;
            background: 11131f;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background:  #0a0e1f;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #0a0e1f;
        }

        a.article,
        a.article:hover {
            background: #0e1220 !important;
            color: #fff !important;
        }

        #content {
            width: calc(100% - 250px);
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            margin-right: 10px;
            /* Espace entre l'image et le texte, ajustez selon vos besoins */
        }
        a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}
 /* Style pour les boutons */
 .btn-dark,
        .btn-warning {
            margin-leftt: 50%;
        }

        /* Style pour le champ de recherche */
        .search-input {
            max-width: 220px;
        }
        
        
        
       
    </style>
</head>

<body>
 
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="logo_content">
                <br>
                <div class="logo">
                    <img src="images/Picsart_24-02-10_18-59-45-578.png" width="50" height="50">
                    <p> BANQUE NATIONALE DE L’HABITAT</p>
                </div>
            </div>
            <br>

            <ul class="list-unstyled components">
                <li>
                    <div class="mx-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </span>
                            <input type="text" placeholder="Search" class="form-control">
                        </div>
                    </div>
                </li>
                <br>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Object</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="ordinateur.php">Computers</a>
                        </li>
                        <li>
                            <a href="imprimante.php">Printers</a>
                        </li>
                    </ul>
                </li>
                
                </li>

                <li>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">administration</a>

                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li> <a href="user.html">User</a>
                        </li>
                        <li>
                            <a href="profil.html">Profils</a>
                        </li>
                        <li>
                            <a href="#">Role"</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#administration" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">authentification</a>
                    <ul class="collapse list-unstyled" id="administration">
                        <li>
                            <a href="#">Areas</a>
                        </li>
                        <li>
                            <a href="#">Mail Server</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
       
        <div id="content">

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <button type="button" id="sidebarCollapse" class="btn btn-dark">
            <i class="fas fa-align-left"></i>
        </button>
        <form action="index.php" method="post">
    <div class="input-group">
        <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
        </span>
        <input type="text" placeholder="Search" class="form-control" name="searchInput">
    </div>
    
</form>


      </div>


</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5M12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0M1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25"/>
</svg>
    <div class="container-fluid d-flex align-items-center justify-content-space-between">
   
        <h2 class="m-0 me-2">Computers list</h2>
        <!-- Bouton "Add" -->
        <button type="button" class="btn btn-warning ml-auto" data-toggle="modal" data-target="#exampleModal">
            Add
        </button>
  
                  
                
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a computer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="index.php" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip02" class="form-label">Network</label>
                        <input type="text" name="network" class="form-control" id="validationTooltip02" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltipUsername" class="form-label">num of series</label>
                        <div class="input-group has-validation">
                           
                            <input type="text" name="numserie" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip03" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="validationTooltip03" required>
                        <div class="invalid-tooltip">
                            Please provide a valid Description
                        </div>
                    </div>
                    
       <div class="col-md-5 position-relative">
       <label for="validationTooltip04" class="form-label">Groupe</label>
       <div class="d-flex align-items-center">
           <select name="nomgr" class="form-select custom-select mr-2" id="validationTooltip04" required>
               <?php
               // Inclure les options de groupe depuis le contrôleur
               include_once '../controllers/ComputerController.php';
               $controller = new ComputerController($computerModel);
               $controller->getAllGroupes();
               ?>
           </select>
           <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#addGroupModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
    </svg>
</button>
    
          
       </div>
   </div>
   


                    <div class="col-md-5 position-relative">
                    
    <label for="validationTooltip05" class="form-label">Location</label>
    <div class="d-flex align-items-center">
    <select name="nomL" class="form-select custom-select mr-2" id="validationTooltip04" required>
    <?php
               // Inclure les options de groupe depuis le contrôleur
               include_once '../controllers/ComputerController.php';
               $controller = new ComputerController($computerModel);
               $controller->getAllLocation();
               ?>
           </select>
           <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#addLocationModal">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                   <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
               </svg>
           </button>
    </div>



                        <div class="invalid-tooltip">
                            Please select a valid Groupe
                        </div>
                    </div>
                    <div class="col-md-3 position-relative">
                        <label for="validationTooltip05" class="form-label">ID</label>
                        <input type="text" name="idob" class="form-control" id="validationTooltip05" required>
                        <div class="invalid-tooltip">
                            Please provide a valid ID.
                        </div>
                    </div>
                    
                    <div class="col-12"><br>
                        <button class="btn btn-warning" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</div>
<div>
    </div>
</nav>
            <br>
            <div class="container">
    <table class="table  table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Idob</th>
                <th>Type</th>
                <th>Network</th>
                <th>Num of series</th>
                <th>Groupe</th>
                <th>Location</th>
                <th>Description</th>
                <th>option</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            // Inclure le contenu de index.php ici
            include 'index.php';
            
            ?>
        </tbody>
    </table>
</div>


      <!-- Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Computer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire de modification des informations de l'ordinateur -->
                <form action="../controllers/ComputerController.php" method="post" id="editForm">
    <input type="hidden" name="action" value="updatecomputer">
                    <input type="hidden" id="editComputerId" name="idob">
                    <div class="form-group">
                        <label for="editComputerType">Type</label>
                        <input type="text" class="form-control" id="editComputerType" name="type" >
                    </div> 
                    <div class="form-group"> 
                        <label for="editComputerNetwork">Network</label>
                        <input type="text" class="form-control" id="editComputerNetwork" name="network">
                    </div>
                    <div class="form-group">
                        <label for="editComputerType">Numero de serie</label>
                        <input type="text" class="form-control" id="editComputerNS" name="numserie" >
                    </div>
                    <div class="form-group">
                        <label for="editComputerNetwork">Description</label>
                        <input type="text" class="form-control" id="editComputerDesc" name="description" >
                    </div>
                    <div class="form-group">
                        <label for="editComputerType">Groupe</label>
                        <input type="text" class="form-control" id="editComputerGrp" name="nomgr">
                    </div>
                    <div class="form-group">
                        <label for="editComputerNetwork">Lieu</label>
                        <input type="text" class="form-control" id="editComputerLieu" name="nomL">
                    </div>
                    <div class="form-group">
                        <label for="editComputerNetwork">ID</label>
                        <input type="text" class="form-control" id="editComputerID" name="idob">
                    </div>
                    <!-- Ajoutez d'autres champs pour les autres informations -->
                    <button type="submit" class="btn btn-warning edit-button" data-id="<?php echo $computer['idob']; ?>" data-toggle="modal" data-target="#editModal" name="editbtn">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>




<form action="index.php" method="post" id="editForm">
<div class="modal fade" id="addGroupModal" tabindex="-1" role="dialog" aria-labelledby="addGroupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGroupModalLabel">Add a groupe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire pour ajouter un groupe -->
                <form id="addGroupForm">
                    <div class="form-group">
                        <label for="groupName">Name of groupe</label>
                        <input type="text" class="form-control" id="groupName" name="groupName" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

<form action="index.php" method="post" id="addLocationForm">
    <div class="modal fade" id="addLocationModal" tabindex="-1" role="dialog" aria-labelledby="addLocationModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLocationModalLabel">Add alocation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire pour ajouter un groupe -->
                <form id="addLocationForm">
                    <div class="form-group">
                        <label for="locationName">Name of location</label>
                        <input type="text" class="form-control" id="locationName" name="locationName" required>
                    </div>
                    <button type="submit" class="btn btn-warning" form="addLocationForm">Add</button>

                </form>
            </div>
        </div>
    </div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- edit -->
<script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {


                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text().trim();
                }).get();

                console.log(data);

                $('#editComputerType').val(data[1]);
                $('#editComputerNetwork').val(data[3]);
                $('#editComputerNS').val(data[2]);
                $('#editComputerDesc').val(data[6]);
                $('#editComputerGrp').val(data[4]);
                $('#editComputerLieu').val(data[5]);
                $('#editComputerID').val(data[0]);
                $('#editComputerId').val(data[0]);
            });
        });
    </script>

         

        </div>
    </div>
    
</body>

</html>
