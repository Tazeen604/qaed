<?php
include("db_con.php");
if(!empty($_GET["edate"])){ 
    
    $edate=$_GET['edate'];
    $sqlcheck="select startdate from training_details where enddate='$edate'";
    $res=mysqli_query($conn,$sqlcheck);
    $row=mysqli_fetch_array($res);
  $strdate=  $row['startdate'];
   try{
       
        $sqlTehsil="SELECT distinct tehsil FROM training_details where enddate ='$edate'";
        $resTehsil=mysqli_query($conn,$sqlTehsil);
    }
    catch(Exception $e) {
        echo $e->getMessage();
}
 echo '<option value="">Select Tehsil</option>'; 
while($rowTehsil=mysqli_fetch_array($resTehsil)) 
{
            echo '<option value="'.$rowTehsil['tehsil'].'">'.$rowTehsil['tehsil'].'</option>'; 
        } 
    
}


// Training Title
if(!empty($_GET["tehsil_title"])){ 
    include("db_con.php");
    $tehsil=$_GET['tehsil_title'];
    try{
        $sqlTitle="SELECT distinct training_title FROM training_details where tehsil ='$tehsil'";
        $resTitle=mysqli_query($conn,$sqlTitle);
        if (!$resTitle) {
            echo("Error:".mysqli_error($conn));
            exit();
        }
    }
    catch(Exception $e) {
        echo $e->getMessage();
}
 
        echo '<option value="">Select Training Title</option>'; 
while($rowTitle=mysqli_fetch_array($resTitle)) 
{
            echo '<option value="'.$rowTitle['training_title'].'">'.$rowTitle['training_title'].'</option>'; 
        } 
    
   
    }
?>


