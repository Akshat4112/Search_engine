<!DOCTYPE html>
<html>
<head>
    <title>Insert Site</title>

</head>
<body bgcolor="gray">
<form action="insert_site.php" method="post" enctype="multipart/form-data">
    <table width="500" border="2" cellspacing="2"align="center" bgcolor="orange">
        <tr>
            <td colspan="5" align="center"><h2>Inseritng new website: </h2></td>
        </tr>
        <tr>
            <td align="right"><b>Site Title</b></td>
            <td><input type="text" name="site_title" /></td>
        </tr>
        <tr>
            <td align="right"><b>Site Link</b></td>
            <td><input type="text" name="site_link" /></td>
        </tr>
        <tr>
            <td align="right"><b>Site Keyword</b></td>
            <td><input type="text" name="site_keyword" /></td>
        </tr>
        <tr>
            <td align="right"><b>Site Description</b></td>
            <td><textarea cols="25" rows="8" name="site_desc"></textarea> </td>
        </tr>
        <tr>
            <td align="right"><b>Site Image</b></td>
            <td><input type="file" name="site_image" /></td>
        </tr>
        <tr>
            <td colspan="5" align="center"><input type="submit" name="submit" value="Add site now" /></td>
        </tr>


    </table>
</form>

</body>
</html>
<?php

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'search');

if(isset($_POST['submit'])){
     $site_title = $_POST['site_title'];
     $site_link = $_POST['site_link'];
     $site_keyword = $_POST['site_keyword'];
     $site_desc = $_POST['site_desc'];
     $site_image = $_FILES['site_image']['name'];
     $site_image_tmp = $_FILES['site_image']['tmp_name'];


     if($site_title== '' OR $site_link=='' OR $site_desc=="" OR $site_keyword==''){
         echo '<script>alert("Please fill all the fields")</script>';
         exit();
     }
     else{

     }

     $inser_query="insert into sites (site_title,site_link,site_keywords,site_desc,site_image) values('$site_title','$site_link','$site_keyword','$site_desc','$site_image')";
     move_uploaded_file($site_image_tmp,"images/{$site_image}");

     if($run_query=mysqli_query($conn,$inser_query)){
         echo 'Recoed inserted successfully';
     }
}

?>