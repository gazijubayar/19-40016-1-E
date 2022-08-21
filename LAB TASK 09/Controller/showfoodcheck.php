 <?php

$uname=$phone=$address="";
	session_start();

	define('servername', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'foodie');
    
    $conn = mysqli_connect(servername, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); 
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); 

    if(isset($_GET['code']))
        {
            
            $code = $_GET['code'];

           
            $sql = "SELECT * FROM food WHERE code=$code";
            
            $res = mysqli_query($conn, $sql);
            
            $count = mysqli_num_rows($res);
            
            if($count==1)
            {
                
                $row = mysqli_fetch_assoc($res);
                 $code = $row['code'];
                $name = $row['name'];
                $price = $row['price'];
                $image= $row['image'];
            }
            else
            {
               
                header('location:Public Home.php');
            }
        }


?>

