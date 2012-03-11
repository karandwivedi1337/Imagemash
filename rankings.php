<?php error_reporting(1);

$image_folder="/images";
$file_type=".JPG";

$conn=mysql_connect("$servername","karan","");
if(!$conn) echo 'Could not connect to database! Please try again later';

mysql_select_db("rankings", $conn);

$result=mysql_query("SELECT * from photos order by hits desc");

$number=mysql_num_rows($result);

$rank=1;

while ($row = mysql_fetch_assoc($result)) {

$image_name=$row['name'].".JPG";

$servername=$_SERVER['SERVER_NAME'];

echo "Rank $rank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>";
echo "<img src=\"$image_folder/$image_name\" style=\"width:150px; height:150px; border:1px; margin-right:25px; float:left;\">";
echo "<br/>";
if($rank%7==0) break;

$rank++;

  //display images according to ranks
}

echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
echo "&nbsp;<a href=/photos.php>Back to ImageMesh</a>";

?>
