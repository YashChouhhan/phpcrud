<?php
include("connection.php");
$id=$_GET['id'];
$query= "SELECT * FROM crud WHERE id ='$id'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data)
?>
<!DOCTYPE html>
<html>
<head>
    <title>information</title>
</head>
<body>
    <form action="" method="POST">
    <h1> UPDATE INFORMATION </h1>

    <label> name :</label>
    <input type="text"  value="<?php echo $result['fname']?>"name="name"><br>

    <br><label>Email:</label>
    <input type="text" value="<?php echo $result['email']?>"name="email"><br>

    <br><label>Contact No:</label>
    <input type="text"value="<?php echo $result['cno']?>" name="cno"><br>

    <br><label>password:</label>
    <input type="text"value="<?php echo $result['pwd']?>" name="pwd"><br>

    
    <br>
        
        <input type="submit" name="UPDATE" value="UPDATE">

</form>
<?php
    if (isset($_POST['UPDATE']))
    {
        $fname=$_POST['name'];
        $email=$_POST['email'];
        $cno=$_POST['cno'];
        $pwd=$_POST['pwd'];

        $query="UPDATE crud SET fname='$fname' ,email='$email' ,cno='$cno' , pwd='$pwd' WHERE id='$id'";
        header('Location: display.php');

        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "data update successfully";
        }else
        {
            echo "failed";
        }
    }
    ?>
</body>
</html>
