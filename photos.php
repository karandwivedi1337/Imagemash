<html>

<script type="text/javascript">
   //document.write("this is a test of JS");
</script>

<?php error_reporting(1);

  //echo rand(1,30);

$image_folder="/images";
$file_type=".JPG";

$start=1;
$total=14;

echo "<center><h1>IMAGEMASH</h1></center>";
echo "<center><h2>Left Or Right. Hit to Rate</h2></center>";

$random1=0;
$random2=0;

while(true){
$random1=mt_rand($start,$total);
$random2=mt_rand($start,$total);
if($random1!=$random2) break;
else continue;
}

//echo $random1.$random2;

$image_name1=$random1.$file_type;
$image_name2=$random2.$file_type;
//echo $image_name;

$servername=$_SERVER['SERVER_NAME'];
//echo "<img src=\"$image_folder/$image_name\" />";


for($i=0;$i<3;$i++)
echo "<br/>";

echo "<a href=\"http://$servername/update.php?selected=$random1\"><img src=\"$image_folder/$image_name1\"  style=\"width:200px; height:200px; border:10px; margin-left:400px; margin-right:75px; solid blue; float:center;\"/></a>";

echo "<a href=\"http://$servername/update.php?selected=$random2\"><img src=\"$image_folder/$image_name2\" style=\"width:200px; height:200px; border:10px; solid blue; float:center;\"/></a>";

for($i=0;$i<9;$i++)
echo "<br/>";

echo "<center><a href=\"http://$servername/rankings.php\">Top Rated Images</center>";
echo "<br/>";
echo "<center><a href=\"http://www.mobremote.com\">Remote control PC via SMS</a></center>";
echo "<br/>";
echo "&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "Created By:<a href=\"http://www.iamkaran.in\">Karan Dwivedi</a>";


?>
</body>

</html>
