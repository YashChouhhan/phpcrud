<?php
include("connection.php");
$query= "SELECT * FROM crud";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0){

?>
    <h2 align="center"> Display Records</h2>
    <center>
        <table border="3" cellspacing="8" width="70%">
        <tr>
            <th width="10%"> id</th>
            <th width="10%">name</th>
            <th width="10%">email</th>
            <th width="10%">mobile</th>
            <th width="10%">password</th>

            <th width="20%">opration</th>
            
        </tr>
        <style>
            .update,.delete, .insert{
                background-color: green;
                color: white;
                cursor:pointer;
            }
            .delete{
                background-color: red;
            }
            .insert{
                background-color: black;
            }

            </style>
     

    <?php
        while($result=mysqli_fetch_assoc($data))
        {
            echo"
                <tr>
                    <td>".$result['id']."</td>
                    <td>".$result['fname']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['cno']."</td>
                    <td>".$result['pwd']."</td>

                    <td>
                    <a href ='update.php?id=$result[id]'>
                    <input type='submit'  value='UPDATE' class='update'> </a>

                    <a href='delete.php?id=$result[id]'>
                    <input type='submit'  value='DELETE' class='delete'>  </a>

                    
                    <a href='insert.php?id=$result[id]'>
                    <input type='submit'  value='INSERT' class='insert'>  </a>
                     </td>
                    
                </tr>    
            ";
   }
}
?>
</table>
</center>