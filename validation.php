<?php
session_start();
    require("");
    $username=$_POST['usr'];
    $pass=$_POST['psw'];


    $sql=mysql_query("SELECT + FROM login WHERE nombre='$username'");
    if($f2=mysql_fetch_array($sql)){
        if($pass==$f['password']){
            $_SESSION['id']=$f['id'];
            $_SESSION['user']=$f['user'];
            header("Locatoin: index.html")

        }
        else{
            echo '<script>alert("CONTRASEÑA INCORRECTA'
        }
    }


