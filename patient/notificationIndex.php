<?php

include ("../connection.php")

?>

<html>
<style>
    .dropdown-menu{
        position: absolute;
        transform: translate3d(-250px, 40px, 0px);
        top: 0px;
        left: 0px;
        will-change: transform;
    }
            
</style>

<ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <?php
                        $id=$_SESSION['idPatient'];
                        $res=mysqli_query($conn,"select * from notification where statut='unread' and Nom='patient' and ForWho='$id'");
                        $nb=mysqli_num_rows($res);
                        if ($nb>0) {
                            ?>
                            <span class="badge badge-light" style="color: blue;"><?php echo "$nb"; ?></span>
                        <?php
                        }
                    ?>
                    
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                        if ($nb>0) {
                            while($tab=mysqli_fetch_array($res)){    
                                $idN=$tab['idNoti'];
                                $motif=$tab['motif'];
                    ?>
                    <a style="font-weight:bold" class="dropdown-item" href="voirNotification.php?idN=<?php echo $idN; ?>&typeN=<?php echo $motif; ?>">
                        <small><i><?php echo $tab['dateNoti']; ?></i></small><br/>
                        <?php echo $tab['Description'] ?>
                        <?php }}else{
                            echo "Aucune notification pour le moment ! ";
                        }
                        
                        ?>
                    </a>
                </li>
            </ul>
</html>