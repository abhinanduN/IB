$data["email"]=$_POST["email"] 
$data["password"]=$_POST["password"] 


file_put_contents("filename.txt", serialize($data));
