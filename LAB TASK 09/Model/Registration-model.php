 <?php 
require_once 'db_connect.php';
function adduser($data){
     $conn = db_conn();
     $selectQuery = "INSERT INTO `registration`( `name`, `e-mail`, `username`, `password`, `gender`, `dob`) VALUES ( :name, :email, :username, :password, :gender, :day)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
          
          ':name' => $data['name'],
          ':email' => $data['e-mail'],
          ':username' => $data['username'],
          ':password' => $data['password'],
          ':gender' => $data['gender'],
          ':day' => $data['date']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

?>