<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>information</title>
</head>
<body>
    <form action="" method="POST">
    <h1> Employee Information </h1>

    <label> name :</label>
    <input type="text" name="name"><br>

    <br><label>Email:</label>
    <input type="text" name="email"><br>

    <br><label>Contact No:</label>
    <input type="text" name="cno"><br>

    <br><label>password:</label>
    <input type="text" name="pwd"><br>

    
    <br>
    
        <input type="submit" name="submit">
</form>
<?php
    if (isset($_POST['submit']))
    {
        $fname=$_POST['name'];
        $email=$_POST['email'];
        $cno=$_POST['cno'];
        $pwd=$_POST['pwd'];

        $query ="INSERT INTO crud VALUES('','$fname','$email','$cno','$pwd')";
        header('location: display.php');

        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "data insert successfully";
        }else
        {
            echo "failed";
        }
    }
    ?>
</body>
</html>
