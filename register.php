<?php
    if ($_SERVER['REQUEST_METHOD']==$_POST){
        $Username=$_POST['username'];
        $Password=$_POST['password'];
        require_once 'connect.php';
        $sql="INSERT INTO register (username ,password) VALUES($Username,$Password";

        if(mysql_querry($con ,$sql)){
            $result["success"]="1";
            $result["pesan"]="Success";
            echo json_encode($result);
            mysql_close($con);
        }
    }


?>