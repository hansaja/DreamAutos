<html>
<body>
<form method="post" action="ImageUp.php" enctype="multipart/form-data">
<input type="file" name="image"/>
<input type="submit" name="submit" value="Upload"/>
</form>
<?php
    
        $img = $_FILES['image']['tmp_name'];
        UploadImage($img);
    
   
    
    function UploadImage($img)
    {
        $dbcon=mysqli_connect('localhost','root','','imageup');
        $qry="insert into imagetable values ('$img')";
        $result=mysqli_query($dbcon,$qry);
        if($result)
        {
            echo " <br/>Image uploaded.";
         
        }
        else
        {
            echo " error ";
        }
    }


?>
</body>
</html>