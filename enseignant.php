<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/mundiap.png">    <title>Mundiapolis</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index-2.php" class="logo">
                    <img src="assets/img/mundiap.png" width="40" height="40">
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">

                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="notification.php">Voir tous les Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>

                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>

                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="index-2.php"><i class="fa fa-home"></i> <span>Accueil</span></a>
                        </li>
                        <li>
                            <a href="demande.php"><i class="fa fa-envelope-open-o"></i> <span>Liste de demande</span></a>
                        </li>
                        <li>
                            <a href="emploi.php"><i class="fa fa-calendar-o"></i> <span>Emploi du temps</span></a>
                        </li>
                        <li>
                            <a href="disponibilite.php"><i class="fa fa-list"></i><span>Disponibilité enseignant</span></a>
                        </li>
                       
                        <li>
                            <a href="notification.php"><i class="fa fa-bell-o"></i> <span>Notifications</span></a>
                        </li>
                        <li>
                            <a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendrier</span></a>
                        </li>
                        <li>
                        <a href="disposalle.php"><i class="fa fa-home"></i> <span>Disponibilite salle</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-cog"></i> <span> Paramétrage </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="active"><a href="enseignant.php">Enseignant</a></li>
                                  <li ><a href="etudiant.php">Etudiant</a></li>
                                  <li><a href="filiere.php"> Filière</a></li>
                                  <li><a href="salle.php"> Salle</a></li>

                                  <li ><a href="classe.php"> Classe</a></li>
                                 
                                 

                                </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 ">
                        <h2>Liste des Enseignants</h2>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_enseignant.php" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Ajouter Enseignant</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group form-focus">
                            <input type="text" placeholder="Chercher enseignant ...." class="form-control floating" name="chercher_valeur">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Nom d'enseignant</th>
                                        <th>Adresse d'enseignant</th>
                                        <th>Telephone d'enseignant</th>
                                        <th>Email d'enseignant</th>
                                        <th>Mot de passe d'enseignant</th>
                                        <th>Statut vacataire</th>
                                        <th class="text-left">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include("config.php");

                                // Exécuter une requête de sélection
                                $requeteSelect = "SELECT * FROM enseignant";
                                $result = $mysqli->query($requeteSelect);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>". $row['nom_enseignant'] ."</td>";
                                    echo "<td>". $row['adresse'] ."</td>";
                                    echo "<td>". $row['telephone'] ."</td>";
                                    echo "<td>". $row['email_enseignant'] ."</td>";
                                    echo "<td>". $row['password'] ."</td>";
                                    echo "<td>". $row['statut_enseignant'] ."</td>";
                                    echo "<td><a href=\"edit_enseignant.php?id_enseignant=".$row['id_enseignant']."\" style=\"margin-right:10px; color:green;\"><i class=\"fa fa-pencil m-r-5\"></i></a>
                                     <a href=\"delete_enseignant.php?id_enseignant=" . $row['id_enseignant'] . "\" style=\"margin-right:10px; color:red;\" onClick=\"return confirm
                                     ('Êtes-vous sûr de vouloir supprimer cet enseignant ?');\"><i class=\"fa fa-trash-o m-r-5\"></i></a></td>";
                                    echo "</tr>";
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
    $(document).ready(function() {
        // Événement de clic sur le bouton de recherche
        $('a.btn-success').click(function() {
            // Récupérer la valeur de recherche
            var searchValue = $('input[name="chercher_valeur"]').val().toLowerCase();

            // Parcourir toutes les lignes du tableau
            $('table tbody tr').each(function() {
                var rowText = $(this).text().toLowerCase();

                // Afficher ou masquer les lignes en fonction de la correspondance avec la valeur de recherche
                if (rowText.indexOf(searchValue) !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>
</body>
</html>
