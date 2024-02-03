<?php

$a=$_GET['n1'];

$b=$_GET['n2'];
$c=$_GET['n3'];
$d=$_GET['n4'];
$e=$_GET['n5'];

include('database.php');

$query = "SELECT Question_ID, Questions FROM cg";
$result = $conn->query($query);
$query1 = "SELECT Question_ID, Questions FROM OOPM";
$result1 = $conn->query($query);

?>
<table border="5" cellspacing="0" cellpadding="10" align="center">
  <tr>
    <th>S.N</th>
    <th>Question_ID</th>
    <th>Questions</th>
    
  </tr>
<?php
print "<center><u><h1>$a</h1></u></center>";
print "<h2>Subject:- $b</h2>";
print "<h5>Marks:- $c</h5>";
print "<h5>Time:- $d Hrs</h5>";
?>

<?php

if ($result->num_rows > 0) {
  $sn=1;
  
 // while($data = $result->fetch_assoc())
 for($sn=1;$sn<=$e;$sn++)
  {
    $data = $result->fetch_assoc()
 ?>
 
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['Question_ID']; ?> </td>
   <td><?php echo $data['Questions']; ?> </td>
   
   
  <tr>
 <?php
 /* $sn++;*/}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table>




?>
