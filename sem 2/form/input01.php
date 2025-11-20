<?php
include 'config.php';
?>
<!doctype html>
<html>
<head>
    <title>My First Database</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
    <form class="myform" action="input01.php" method="post">
        Photography Club Member:<br>
        <label><br>Name :</br></label>
        <input name="name" type="text" class="inputvalues" placeholder="Enter Member's Name" required/><br>

        <label><br>Tingkatan :</br></label>
        <input name="tingkatan" type="text" class="inputvalues" placeholder="Enter Member's Level" required/><br>

        <label><br>Jantina :</br></label>
        <input name="jantina" type="text" class="inputvalues" placeholder="Enter Member's Gender" required/><br>

        <label><br>Photography Mark :</br></label>
        <input name="photo_mark" type="text" class="inputvalues" placeholder="Enter Member's Photography Mark" required/><br>

        <input name="submit_btn" type="submit" id="signup_btn" value="Enter"/>
        <input type="button" onclick="location.href='report02.php'"value="Report"/>
    </form>
<?php 
if (isset($_POST['submit_btn']))
     {
    $name = $_POST['name'];
    $tingkatan = $_POST['tingkatan'];
    $jantina = $_POST['jantina'];
    $photo_mark = $_POST['photo_mark'];

    $querry = "insert into club_member VALUES ('','$name', '$photo_mark', '$tingkatan', '$jantina')";
    $query_run = mysqli_query($con, $querry);

    if ($query_run) {
        echo '<script type="text/javascript"> alert("Mark registered. Enter next number") </script>';
    } 
    else {
        echo '<script type="text/javascript"> alert("Error!") </script>';
    }
}
?>