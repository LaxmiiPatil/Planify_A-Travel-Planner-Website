<?php
$con=mysqli_connect("localhost","root","","travelling");
if(isset($_POST['btn']))
{
    $fnm=$_POST['fnm'];
    $lnm=$_POST['lnm'];
    $mono=$_POST['mono'];
    $gen=$_POST['gen'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $add=$_POST['add'];
    $fullName= $fnm . " " . $lnm;
    // echo $fnm . "<br> " . $lnm . "<br> " . $mono . " <br>" . $gen . "<br> " . $mail . " <br>" . $pass . "<br> " . $add;
 $sql = "INSERT INTO `registration` (`Name`, `mono`, `gen`, `mail`, `pass`, `add`) 
            VALUES ('$fullName', '$mono', '$gen', '$mail', '$pass', '$add')";
    if(mysqli_query($con,$sql))
    {
        header('location:index.html');
    }
    else
    {
        echo "Data not inserted";
    }   

}
   
?>

<!-- $sql="INSERT INTO `registration`(`Name`, `mono`, `gen`, `mail`, `pass`, `add`) VALUES ('$fullName','$mono','$gen','$mail','$pass','$add')"; -->
