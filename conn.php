
<?php
//connect to database 
$conn = mysqli_connect('localhost', 'root','');
    
if(!$conn){
    die('Connction Failed');
}
$db_select = mysqli_select_db($conn,'ccsw321_cinema_group');

if(!$db_select){
    die('could not find ccsw321_cinema_groupdatabase');
}
//varibels
$firstName = $_POST['first'];
$lastName = $_POST['last'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone'];
$ccNumber = $_POST['cnum'];
$expiration = $_POST['ex'];
$code = $_POST['code'];
$city = $_POST['city'];
$Dbirth = $_POST['start'];
$gender = $_POST['gender'];
$Tickect_t = $_POST['type'];
$Tickect_n = $_POST['numt'];
$language = $_POST['lan'];




 
//if the user press subimt the information will added to the batabase  
    
if(isset($_POST["submit"])){


  

    $query = "INSERT INTO signup (firstName, lastName,email,phone,ccNumber,expiration,code,city,Dbirth,gender,Tickect_t,Tickect_n,lan)
    VALUES ('$firstName', '$lastName',' $email','$phoneNumber'
    ,'$ccNumber','$expiration','$code','$city','$Dbirth','$gender','$Tickect_t','$Tickect_n','$language')";


	  $result =mysqli_query($conn,$query);

      

      include 'select.php';
      include 'calculation.php';

} 
    
else

{
    echo "Failure!";}
    
?>
