<?php session_start();
    
    $root='root';
    $db = new PDO('mysql:host=localhost;dbname=allosimplon', $root, $root);

    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `user` u JOIN `graduer` g ON u.id_user = g.id_user WHERE u.email = ?";
        $result = $db->prepare($sql);
        $result->execute([$email]);
        if($result->rowCount() > 0)
        {
            $data = $result->fetch();
           

            if (password_verify($password, $data['password'])){
                $_SESSION['id_user'] = $data['id_user'];
                $_SESSION['id_role'] = $data['id_role'];
                header("Location:/cinemate/index.php");
            }
             else {echo "Mauvais mot de passe";
             }
        }
    }
    else{
       header("Location:/cinemate/login.php");
    }
?>