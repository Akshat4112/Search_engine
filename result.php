<html>
<head>
    <title>Results</title>
    <style type="text/css">
.results{
    margin-left:10%;
    margin-right:10%;
    margin-top: 20px;
}
    </style>
</head>
<body bgcolor="aqua">
<form action="result.php" method="get">
    <span><b>Write Your Keywrod: </b></span>
    <input type="text" name="user_keyword" size="120"/>
    <input type="submit" name="search" value="Search Now">
</form>
<?php
if(isset($_GET['search'])){
    $get_value=$_GET['user_query'];

    echo "<div class='results'>
$get_value;
</div>";
}
?>

</body>
</html>