<?php
error_reporting(1);

$selected=$_GET['selected'];

$servername=$_SERVER['SERVER_NAME'];

$conn=mysql_connect("$servername","karan","");
if(!$conn) echo 'Could not connect to database! Please try again later';
else echo 'Connected!';


mysql_select_db("rankings", $conn);

$result=mysql_query("SELECT hits from photos where name=$selected");

//echo $result;

if (mysql_num_rows($result) )
{
    echo 'already in table';
   $row = mysql_fetch_assoc($result);
   $newhits=$row['hits']+1;
   echo $newhits;
   $q="UPDATE photos SET hits=".$newhits." where name='".$selected."';";
   echo $q."<br/>";
   if(!mysql_query($q,$conn)) echo 'hits updation failed';
   else echo 'hits updated';
//update hits

}

else{                 //if(strcmp($result,"Resource id #4")==0){
$h=1;
$q="INSERT INTO photos (name, hits) VALUES ('".$selected."',".$h.");";
echo $q."<br/>";
if(!mysql_query($q,$conn)) echo "unable to execute insert query";
 else echo "insert query executed";
}


mysql_close($conn);


header("Location: photos.php");
exit;

?>
