<?php
error_reporting( ~E_NOTICE ); // avoid notice
 require_once 'db.php';
 
 if(isset($_POST['guardar']))
 {
  $nombreusuario = $_POST['idusuario'];

  $imgFile = $_FILES['acta']['name'];
  $tmp_dir = $_FILES['acta']['tmp_name'];
  $imgSize = $_FILES['acta']['size'];

  $imgFile1 = $_FILES['curp']['name'];
  $tmp_dir1 = $_FILES['curp']['tmp_name'];
  $imgSize1 = $_FILES['curp']['size'];

  $imgFile2 = $_FILES['foto']['name'];
  $tmp_dir2 = $_FILES['foto']['tmp_name'];
  $imgSize2 = $_FILES['foto']['size'];

  $imgFile3 = $_FILES['boleta']['name'];
  $tmp_dir3 = $_FILES['boleta']['tmp_name'];
  $imgSize3 = $_FILES['boleta']['size'];
  
  $imgFile4 = $_FILES['reganv']['name'];
  $tmp_dir4 = $_FILES['reganv']['tmp_name'];
  $imgSize4 = $_FILES['reganv']['size'];

  $imgFile5 = $_FILES['regrev']['name'];
  $tmp_dir5 = $_FILES['regrev']['tmp_name'];
  $imgSize5 = $_FILES['regrev']['size'];
  
  if(empty($nombreusuario)){
    $errMSG = "Please select Username";

  }else if(empty($imgFile && $imgFile1 && $imgFile2 && $imgFile3 && $imgFile4 && $imgFile5)){
    include("avanzado.php");
    echo'<script type="text/javascript">
    alert("Error de inicio de sesion");
    </script>';
  }
  else
  {
   $upload_dir = 'educandos/avanzado/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
   $imgExt1 = strtolower(pathinfo($imgFile1,PATHINFO_EXTENSION));
   $imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION));
   $imgExt3 = strtolower(pathinfo($imgFile3,PATHINFO_EXTENSION));
   $imgExt4 = strtolower(pathinfo($imgFile4,PATHINFO_EXTENSION));
   $imgExt5 = strtolower(pathinfo($imgFile5,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   //rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
   $userpic1 = rand(1000,1000000).".".$imgExt1;
   $userpic2 = rand(1000,1000000).".".$imgExt2;
   $userpic3 = rand(1000,1000000).".".$imgExt3;
   $userpic4 = rand(1000,1000000).".".$imgExt4;
   $userpic5 = rand(1000,1000000).".".$imgExt5;
    
   // allow valid image file formats
   if(in_array($imgExt && $imgExt1 && $imgExt2 && $imgExt3 && $imgExt4 && $imgExt5, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000 && $imgSize1 < 5000000 && $imgSize2 < 5000000 && $imgSize3 < 5000000 && $imgSize4 < 5000000 && $imgSize5 < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
     move_uploaded_file($tmp_dir1,$upload_dir.$userpic1);
     move_uploaded_file($tmp_dir2,$upload_dir.$userpic2);
     move_uploaded_file($tmp_dir3,$upload_dir.$userpic3);
     move_uploaded_file($tmp_dir4,$upload_dir.$userpic4);
     move_uploaded_file($tmp_dir5,$upload_dir.$userpic5);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = header("location:avanzado.php");
   }
  }
  
  
   if(!isset($errMSG))
   {// if no error occured, continue ....
   $stmt = $DB_con->prepare('INSERT INTO avanzado(acta,curp,foto,certificado,reganv,regrev,idusuario) VALUES(:upic, :upic1, :upic2, :upic3, :upic4, :upic5, :uname)');
   $stmt->bindParam(':upic',$userpic);
   $stmt->bindParam(':upic1',$userpic1);
   $stmt->bindParam(':upic2',$userpic2);
   $stmt->bindParam(':upic3',$userpic3);
   $stmt->bindParam(':upic4',$userpic4);
   $stmt->bindParam(':upic5',$userpic5);
   $stmt->bindParam(':uname',$nombreusuario);

   if($stmt->execute())
   {
    $successMSG = "new record succesfully inserted ...";
    header("location:index.php");
   }
   else
   {
    $errMSG = header("location:avanzado.php");
   }
 }
}
?>