 <!DOCTYPE html>
    <html>
    <head>
     <style>


h2{
  text-align: center;
  color: blue;
}

</style> 

<?php require("head.php"); ?>


      
      
    </head>
    <body>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
      <!DOCTYPE html>
<html>
<body>
<div style="text-align: center";>

<h1 style="color:#000080">Our Available Restaurant</h1><br>
<!-- <h3>Start typing a name in the input field below:</h3> -->

<h2>Suggestions: <span id="txtHint"></span></h2> <br>
<p>Choice Your Restaurant: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>
<div>
<script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "gethint.php?q="+str);
  xhttp.send();   
}
</script>

</body>
</html>

<br>
<br>
<br>
<hr>

<h1 style="color: red;text-align: center;">Our Product List</h1>
        
        <br>
 
         
     
           
        <?php 
        

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodie";
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM food";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $temp = $row["code"];
    $image=$row["image"];
    
       ?>
        <div style="border: 1px solid white;height: 100px;"><table style="height: 100px;width:330px;"><tr><td><img width="70px" height="80px" src="../uploads/<?php echo $image;?>"></td>
       
        
<?php 
      
       echo' <td style="text-align:center;"><b>Food Name:</b>'.$row["name"].'<br>
        <b>Price:</b> '.$row["price"].'<br>
     <button> <a href="showfood.php?code='.$temp.'">Order Now</a></button>

        </td></tr></table></div>';
         
   
  }
} else {
  echo "0 results";
}
$conn->close();
?>

       
         
  </table>            
</form>

<br>
<br>


</body>

</html>
<?php require("foot.php"); ?>
