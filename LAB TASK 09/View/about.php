 <link rel="stylesheet" type="text/css" href="../CSS/style.css">
<?php require("head.php"); ?>
<h1 class="my-content"><br>
<!-- <span>This is a Food delivery Website</span> -->
<br>
<br>
</h1>

<div class="comment-box">
        <form id="form" method="post">
            <div >
                <label for="name" >Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <br>
            <div >
                <label for="email" >Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email" required>
            </div>
            <div >
                <label for="msg">Message:</label>
                <br>
                <textarea id="msg" name="msg"placeholder="Enter your message" style="resize: none;" required></textarea>
            </div>
            <button id="btn"> Send </button>
        </form>
	</div>

<?php
	if(file_exists('../Model/data.json'))  
           {  
                $current_data = file_get_contents('../Model/data.json');  
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     'name'               =>     $_POST['name'],
                     'email'            =>   $_POST['email'],
                     'msg'          =>     $_POST["msg"]      
                );  
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('../Model/data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           } 
?>
<div class="table-color">
	<table class="table-center">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>Comment</th>
                          </tr>  
                          <?php   
                          $data = file_get_contents("../Model/data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {   
                              echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["msg"].'</td>
                               </tr>';    
                          }  
                          ?>  
     </table>  
 </div>
</div>
<?php require("foot.php"); ?>