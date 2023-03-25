<?php session_start();
?>

    <?php
    $root='root';
    $db = new PDO('mysql:host=localhost;dbname=allosimplon', $root, $root);

    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `user` where email = ? ";
        $result = $db->prepare($sql);
        $result->execute([$email]);
        if($result->rowCount() > 0)
        {
            $data = $result->fetch();
            if (password_verify($password, $data['password'])){
                $_SESSION['id_user']=$data['id_user'];
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