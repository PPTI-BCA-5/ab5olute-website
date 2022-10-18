<?php 
error_reporting(0);
session_start();
$targetfolder = "./uploadSL/"; //nanti ganti jadi ./uploadSL/

date_default_timezone_set("Asia/Jakarta");
$namadocasli = $_FILES['fileSL']['name'];
$_SESSION["namadoc"] = $namadocasli;
//echo $namadocasli . "<br>";
$formatfile = substr($namadocasli, strpos($namadocasli, ".") + 1);
$namafile = $_POST['department'] . " - " . date("d F Y") .  " - " . $_POST['binusian'] . " - " . $_POST['name'] . "." . $formatfile;
$tempfolder = "./tempSL/";
$namatemp = "TMP".$namafile;
$namamentah = $_FILES['fileSL']['name'];
//echo $formatfile . "<br>";

   //function save data +if

   function saveData(){
      rename("./tempSL/".$_SESSION["namafile"],"./uploadSL/".$_SESSION["namafile"]);
      session_destroy();
      include "yes.php";
      
   }

if(!isset($_SESSION["status"])){
   if(move_uploaded_file($_FILES['fileSL']['tmp_name'], $tempfolder .$namafile))
   {
         

      

      if($formatfile == "php"){
         echo "<script>alert('Tidak Boleh upload ginian');document.location.href='./uploadbro'</script>";
      }else{
         

         
         // $namafile = $_POST['department'] . " - " . date("d F Y") .  " - " . $_POST['binusian'] . " - " . $_POST['name'] . "." . $formatfile;
         //echo $namafile;
         $matkul = $_POST['department'];
         $nimbinusian = $_POST['binusian'];
         $namaorang = $_POST['name'];
         //identify wildcard for [SL gapenting apa] - [tanggal] - NIM - Nama.[gapentingapa]
         $wildcard = glob("./uploadSL/*{$matkul} - * - {$nimbinusian} - {$namaorang}*");
         
         //var_dump($wildcard);
         // print_r($wildcard);
         // echo count($wildcard);



         //validate if udah ada minimal 1 file SL atas nama dan nim dia
         if(!isset($_SESSION["status"])){
            
         $_SESSION["glob_matkul"]= $matkul;
         $_SESSION["glob_nim"]=$nimbinusian;
         $_SESSION["glob_nama"]=$namaorang;
         $_SESSION["thefiles"] = $namamentah;
         $_SESSION["targetfolder"] = $targetfolder;
         $_SESSION["tempfolder"] = $tempfolder;
         $_SESSION['namafile'] = $namafile;
         $_SESSION['namatemp'] = $namatemp;
            if(count($wildcard)>0){
               //TODO:LOL
               echo "debug: 0x001d - Duplicate >0 file";
               echo "<script>document.location.href='./duplicatefound'</script>";
               
            }else{
               //echo "Masuk ELSE";
               //echo $_SESSION["status"];
               
               
               saveData();
            }
         }

      }
   }else{
      echo "Server Error";
   }
}else if($_SESSION["status"]=="replace"){
      $new_nim = $_SESSION["glob_nim"];
      $new_matkul = $_SESSION["glob_matkul"];
      $new_nama = $_SESSION["glob_nama"];
      $newwildcard = glob("./uploadSL/*{$new_matkul} - * - {$new_nim} - {$new_nama}*");
      unlink($newwildcard[0]);
      saveData();

      session_destroy();
   }else if($_SESSION["status"]=="savenew"){
      saveData();
      session_destroy();
   }



?>