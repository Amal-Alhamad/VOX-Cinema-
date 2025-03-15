
 <?php
    //connect to database 
    $conn = mysqli_connect('localhost', 'root', '');

    if (!$conn) {
        die('Connction Failed');
    }
    $db_select = mysqli_select_db($conn, 'ccsw321_cinema_group');

    if (!$db_select) {
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

    //select from phone number 

    $sql = "SELECT firstName,lastName,email,phoneNumber,Dbirth,gender,Tickect_t,Tickect_t,lan 
            FROM inserttable WHERE phoneNumber='$phoneNumber'";

    $result = mysqli_query($conn, $sql);

    if ($result) {


        echo "Account Successfully Created " . "<br>" . "<br>";
        echo "First Name : ", "$firstName" . "<br>",
             "Last Name : ", "$lastName" . "<br>",
             "Email : ", "$email" . "<br>",
             "Phone Number : ", "$phoneNumber" . "<br>",
             "City : ", "$city" . "<br>",
             "Date Birth : ", "$Dbirth" . "<br>",
             "Gender : ", "$gender" . "<br>",
             "Tickect Type : ", " $Tickect_t" . "<br>",
             "Tickect Number : ", " $Tickect_n" . "<br>",
             "Language : ", "$language" . "<br>";
    } else {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);





    ?>                   