<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    require_once 'connect.php';
    $sql=mysql_querry($db,"SELECT * FROM register WHERE username='$Username'AND password='$Password'");
    $hasil=mysqli_num_row($sql);
    $respon=array();

    if($hasil>0){
        $respon['hasil']='1';
        $respon['pesan']='Success';
    }else{
        $respon['hasil']='0';
        $respon['pesan']='Failed';
    }echo json_encode($respon);


}
?>