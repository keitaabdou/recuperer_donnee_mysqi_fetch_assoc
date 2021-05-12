<?php
include_once('config/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Comment récupérer des données de mysql en utilisant PHP (mysqi_fetch_assoc) </title>

</head>
<body>
    <div class="container">
        <h3 class="text-center">Comment récupérer des données de mysql en utilisant PHP (mysqi_fetch_assoc)</h3>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- creation du tableau -->
                <table width="100%"  class="table-dark table-hover table-bordered">
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Genre</th>
                        <th>Education</th>
                        <th>Adresse</th>
                    </tr>

                    <!-- requête de sélection -->
                    <?php

                        $query=mysqli_query($con,"SELECT*FROM utilisateur");
                    //On initialise le compteure a 1
                    $cnt=1;

                    while($row=mysqli_fetch_assoc($query))
                    {
                    ?>
                        <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['nom'] ?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['contact']?></td>
                            <td><?php echo $row['genre']?></td>
                            <td><?php echo $row['education']?></td>
                            <td><?php echo $row['adresse']?></td>
                        </tr>
                    <?php
                    $cnt=$cnt+1;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
