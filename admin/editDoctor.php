<?php session_start() ?>
                    <?php
                        include('../connection.php');
                        if($_POST['registerbtn']){
                            $email=$_POST['email'];
                            $lastname=$_POST['lastname'];
                            $firstname=$_POST['firstname'];
                            $tel=$_POST['tel'];
                            $password=$_POST['password'];
                            $sp=$_POST['sp'];
                            $adresse=$_POST['adresse'];
                            $fee=$_POST['fee'];
                            $id=$_SESSION['id'];
                            $req="select * from medecin where idM!='$id' && (email='$email' || tel='$tel' || password='$password')";
                            $res=mysqli_query($conn,$req);
            
                            $nbreresultR=mysqli_num_rows($res);
            
                            if($nbreresultR>=1){
                                echo '<script>alert("Ce medecin déjà existe !")</script>';
                            }else{
                                echo '<script>alert("Successful update")</script>';
                                $reg="update medecin set nom='$lastname', prenom='$firstname',tel='$tel',email='$email',adresse='$adresse',fee='$fee',specialite='$sp',password='$password' where idM='$id'";
                                mysqli_query($conn, $reg);
                                echo '<script language="javascript">document.location.replace("viewDoctors.php")</script>';
            
                            }
                        }
                
                    ?>
                    