<?php include('server.php'); 

    if(isset($_GET['duzenle'])){
		
	   $id = $_GET['duzenle'];
       $edit_state = true;	   
	   $record = mysqli_query($db, "SELECT * FROM davetiyelistesi WHERE id=$id");	
	   $rec = mysqli_fetch_array($record);
	   $Ad = $rec['Ad'];
	   $Soyad = $rec['Soyad'];
	   $id = $rec['id'];
	
	}
?>
<!DOCTYPE html>
<html>
<head>
     <title>Davetiye Listesi</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php if (isset($_SESSION['msg'])): ?>
	      <div class="msg">
		       <?php
			    echo $_SESSION['msg'];
                unset($_SESSION['msg']);				
               ?>
		  </div>
    <?php endif ?>		  
	
    <table>
	     <thead>
		    <tr>
			   <th>AD</th>
			   <th>SOYAD</th>
               <th colspan="2">İşlem</th>
            </tr>
		</thead>
        <tbody>
		    <?php while($row = mysqli_fetch_array($results)){ ?>
              <tr>
                <td><?php echo $row['Ad']; ?></td>
				<td><?php echo $row['Soyad']; ?></td>
				<td>
					<a href="indexxx.php?duzenle=<?php echo $row['id']; ?>" class="duz_btn" >Duzenle</a>
				</td>
				<td>
					<a href="server.php?sil=<?php echo $row['id']; ?>" class="sill_btn">Sil</a>
				</td>
              </tr>
            <?php } ?> 			  
		</tbody>
	</table>
	<form method="post" action="server.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class = "input-group">
		 <label>DAVETLININ :: </label>
		 <label>   </label>
	     <label>ADI</label>
		 <input type="text" name="Ad" value="<?php echo $Ad; ?>">
	</div>	 
	<div class = "input-group">
	     <label>SOYADI</label>
		 <input type="text" name="Soyad" value="<?php echo $Soyad; ?>">
	</div>	
	<div class = "input-group">
	<?php if($edit_state == false): ?>
	      <button type="sumbit" name="kayıt" class="btn">Kaydet</button>
	<?php else: ?>	 
		 <button type="sumbit" name="guncelle" class="btn">Guncelle</button>
	<?php endif ?>
	</div>	
	
	
	</form>
</body>			
</html>