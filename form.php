<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="new.php"> <!--action="<?php $_SERVER['PHP_SELF'];?>"-->
        <label for="fname">Firstname</label>
        <input type="text" name="fname" id="lname" placeholder="fname"><br>
        <label for="lname">Lastname</label>
        <input type="text" name="lname" id="lname" placeholder="lname"><br>
        <label for="Address">Address</label>
        <input type="text" name="address" id="address" placeholder="address"><br>
        <label for="age">Age</label>
        <input type="number" name="Age" id="Age" placeholder="Age"><br>
        <label for="Religon">Religon</label>
        <select name="Religon"id="Religon">
            <option>Christianity</option>
            <option>Muslim</option>
            <option>Hindu</option>
            <option>Buddhist</option>
            </select>
        <button>Submit</button>
            
    </form>
    <!-- <?php
        echo $_POST['fname'];
    ?> -->
</body>
</html>