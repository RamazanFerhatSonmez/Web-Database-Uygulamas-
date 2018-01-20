<?php
    
	session_start();
    
   $Ad = "";
   $Soyad = "" ;
   $id = 0;
   $edit_state=false;
   $db = mysqli_connect('localhost','root', '', 'davetiye');
   
   if(isset($_POST['kayıt'])){
	   $Ad=$_POST['Ad'];
	   $Soyad=$_POST['Soyad'];  

    $query = "INSERT INTO davetiyelistesi (Ad, Soyad) VALUES( '$Ad', '$Soyad')";	   
    mysqli_query($db, $query);
	$_SESSION['msg'] = "DAVETLI KAYDEDILDI";
	header('location: indexxx.php');
   }
   
   if(isset($_POST['guncelle'])){

     $Ad =$_POST['Ad'];
	   $Soyad =$_POST['Soyad']; 
     $id =$_POST['id'];
	   mysqli_query($db, "UPDATE davetiyelistesi SET Ad='$Ad' , Soyad='$Soyad' WHERE id='$id' ");
       $_SESSION['msg'] = "DAVETLI KISI  GUNCELLENDI";
       header('location: indexxx.php');
   }

    if(isset($_GET['sil'])){
       $id = $_GET['sil'];
       mysqli_query($db,"DELETE FROM davetiyelistesi WHERE id=$id");
       $_SESSION['msg'] = "DAVETLI KISI  SILINDI";
       header('location: indexxx.php');
    }


   
   $results = mysqli_query($db, "SELECT * FROM davetiyelistesi");
   
?>