<?php session_start();
   
    $root='root';
    $db = new PDO('mysql:host=localhost;dbname=allosimplon', $root, $root);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $img_artiste = $_POST['img_artiste'];
    $job = $_POST['job'];
    $film = $_POST['film'];

        $req = 'SELECT * FROM user WHERE email = ?';
        $req = $db->prepare($req);
        $req->execute([$email]); 
        //SAME PASSWORD
        if($req->rowCount() == 0){
            //MAIL DON'T USED
            $req = 'INSERT INTO user (pseudo,email,password,avatar)VALUES (?,?,?,?)';
            $req = $db->prepare($req);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $req->execute([$pseudo,$email,$password,'pas de pp']);
            $id_user = $db->lastInsertId();
            $role = 2;
            $req = 'INSERT INTO graduer (id_user,id_role) VALUES (?,?)';
            $req = $db->prepare($req);
            $req->execute([$db->lastInsertId(),$role]);
            header('Location: /cinemate/user.php');

        }else{
            //MAIL USED
            echo 'Cette email est déjà utilisé.';
        }
?>