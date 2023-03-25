<?php session_start();
   
    $root='root';
    $db = new PDO('mysql:host=localhost;dbname=allosimplon', $root, $root);

    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];   
    $password2 = $_POST['password2'];


    if($password == $password2){
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
            $_SESSION['id_user']=$id_user;
            $_SESSION['id_role']= 2;
            header('Location: ../index.php');

        }else{
            //MAIL USED
            echo 'Cette email est déjà utilisé.';
        }
    }else{
        //DON'T SAME PASSWORD
        echo 'Les 2 mots de passes ne sont pas identiques';
    }

?>