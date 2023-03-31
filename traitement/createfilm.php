<?php session_start();
   
    $root='root';
    $db = new PDO('mysql:host=localhost;dbname=allosimplon', $root, $root);

    $title = $_POST['title'];
    $first_date = $_POST['first_date'];
    $last_date = $_POST['last_date'];   
    $img_film = $_POST['img_film'];
    $iframe = $_POST['iframe'];
    $synopsis = $_POST['synopsis'];
    $bg_img = $_POST['bg_img'];
    $cover = $_POST['cover'];
    $id_category = $_POST['category'];
    $id_artiste = $_POST['artiste'];


        $req = 'SELECT * FROM film  WHERE title = ?';
        $req = $db->prepare($req);
        $req->execute([$title]); 
        if($req->rowCount() == 0){
            //TITLE DON'T USED
            $req = 'INSERT INTO film (title,first_date,last_date,img_film,iframe,synopsis,bg_img,cover)VALUES (?,?,?,?,?,?,?,?)';
            $req = $db->prepare($req);
            $req->execute([$title,$first_date,$last_date,$img_film,$iframe,$synopsis,$bg_img,$cover]);
            $req = 'INSERT INTO classifier (id_film,id_category) VALUES (?,?)';
            $req = $db->prepare($req);
            $req->execute([$db->lastInsertId(),$category]);
            header('Location: /cinemate/user.php');

        }else{
            echo 'deso jsp coder.';
        }
?>