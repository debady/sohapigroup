<?php 

    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if($_POST['newletter'] == "newletter"){
            $varRecup_email = htmlspecialchars(trim($_POST['email']));
            $mail = new PHPMailer(true);

            $mail->isSMTP();                                
            $mail->Host = 'smtp.gmail.com';                 
            $mail->SMTPAuth = true;                         
            $mail->Username = 'debadychatue@gmail.com';    
            $mail->Password = 'asvg abbp envg uuzq';         
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
            $mail->Port = 587;                              

            $mail->setFrom('debadychatue@gmail.com', 'Sohapigroup-Dev');  // L'expéditeur
            $mail->addAddress('cyber10email@gmail.com');                  // Le destinataire

            $mail->isHTML(true);                            
            $mail->Subject = 'ABONNER A LA NEW LETTER';       
            $mail->Body    = "
                Cet adresse Email <strong> $varRecup_email   </strong> s'est abonner à la new letter

            ";

            $mail->send();

            echo "<script>
                    window.location.href = '../index.php?status=success_newletter';
                </script>";

        }
        
        elseif($_POST['newletter'] != "newletter" and
            isset($_POST['nom']) && !empty($_POST['nom']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['object']) && !empty($_POST['object']) &&
            isset($_POST['message']) && !empty($_POST['message'])
        ) {
            $varRecup_nom = htmlspecialchars(trim($_POST['nom']));
            $varRecup_email = htmlspecialchars(trim($_POST['email']));
            $varRecup_object = htmlspecialchars(trim($_POST['object']));
            $varRecup_message = htmlspecialchars(trim($_POST['message']));

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();                                
                $mail->Host = 'smtp.gmail.com';                 
                $mail->SMTPAuth = true;                         
                $mail->Username = 'debadychatue@gmail.com';    
                $mail->Password = 'asvg abbp envg uuzq';         
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
                $mail->Port = 587;                              

                $mail->setFrom('debadychatue@gmail.com', 'Sohapigroup-Dev');  // L'expéditeur
                $mail->addAddress('cyber10email@gmail.com');                  // Le destinataire

                $mail->isHTML(true);                            
                $mail->Subject = 'UN NOUVEAU CONTACT';       
                $mail->Body    = "
                    Mr/Mme <strong> $varRecup_nom  </strong> prend contact avec vous dans le but 
                    <strong>$varRecup_object </strong>.<br>
                    Et à laissé comme message <br> <br><strong>$varRecup_message</strong>  <br> <br>
                    Son adresse email est  <strong>$varRecup_email </strong><br>
                    <strong>C'était le </strong> ".date('d/m/Y H:i')." <br><br>

                   <img src='https://scontent.fabj7-1.fna.fbcdn.net/v/t1.6435-9/29215932_218026615605296_1831535713288454144_n.jpg?stp=dst-jpg_p180x540_tt6&_nc_cat=105&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeH_6wCGWTNareNWZLsL7la8GL-weJ0G5DcYv7B4nQbkN0mBy27Sxr2DOq9pDbz19RlnTfWGwROPvtjcFXi3JMmN&_nc_ohc=cKeVkCahSzUQ7kNvgGBPCGE&_nc_zt=23&_nc_ht=scontent.fabj7-1.fna&_nc_gid=A_4lvbvguH5Fe5ostbIg0Zp&oh=00_AYBE2qD-6lo2mv4_474xa_K8h-_RsPmW-9qv1R6XZBY9dA&oe=67C9606F' >

                ";

                $mail->send();

                echo "<script>
                        // window.location.href = '../index.php?status=success';
                    </script>";
                exit();
                
            } catch (Exception $e) {
                echo "<script>
                        // window.location.href = '../index.php?status=error';
                    </script>";
            }

        } else {
            echo "<script>
                        // window.location.href = '../index.php?status=error_champs';
                    </script>";
        }

    } else {
        header('Location: ../index.php');
    }

?> 

