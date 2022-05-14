<! DOCTYPE html>
    <html>
        <head>
            <title>opreation en php</title>
            <meta charset = "UTF-8">
            <meta name = "viewport" content ="width= device-width , initial-scale=1.0">
            <link rel='stylesheet' href='home.css'>
        </head>
        <body
             <?php
                $servername="localhost";
                $username='root';
                $password='edgar';
                
                $prenom=$_POST['prenom'];
                $mail=$_POST['mail'];
                $tel=$_POST['telephone'];
                $avis=$_POST['avis'];
                $dateinscrit=$_POST['dateinscription'];
                try{
                    $donne=new PDO("mysql:host=$servername;dbname=citation",$username,$password);
                    $donne->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $sth=$donne->prepare("
                                         INSERT INTO user(PRENOM,MAIL,TELEPHONE,VotreAvis)
                                         VALUES(:prenom,:mail,:tel,:avis)");
                    $sth->bindParam(':prenom',$prenom);
                    $sth->bindParam(':mail',$mail);
                    $sth->bindParam(':tel',$tel);
                    $sth->bindParam(':avis',$avis);
                    $sth->execute();
                    header("location:remerciement.html");
                }
                catch(PDOException $m){
                    echo'erreur '.$m->getMessage();
                    echo'A la ligne '.$m->getLine();
                }
             ?>
        </body>
    </html>