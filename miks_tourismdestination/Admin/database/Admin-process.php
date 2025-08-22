<?php
$conn = mysqli_connect("localhost", "root", "", "intro_php_mysql_db") or die('connection error');


if (isset($_POST['sub'])) {
    $email = $_POST['Email'];      // or $_POST['email'] based on input name
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users_tb WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($user) {
        if (password_verify($pass, $user["password"])) {
            header("Location: http://localhost/Sabillo/miks_tourismdestination/Admin/view/index.php?page=Dashboard");
            die();
        } else {
            echo "<script>alert ('Password does not match')</script>";
        }
    } else {
        echo "<div class='alert alert-danger'>Email does not exist</div>";
    }
}
			 if(isset($_POST [ 'heroftBtn' ])){
// GET the DATA AND STORED it TO the variable
				 $title = $_POST [ 'title' ]; 
				 $desc = $_POST [ 'desc' ];
				  $img = $_POST [ 'img' ]; 
				  $id = $_POST [ 'id' ]; 

// preparatory variable 
				  $imgsql = ""; 
				  $imglink = 0;

// validate image link 
				 IF(! empty($img)) 
				 { $imglink = 1;

// preparatory 
					$imgsql = " card_img = '$img'"; }

//END VALIDATION 
//PREPARE FOR QUERY
    $cardsql = "UPDATE `card_tb` 
				   SET `card_title`='$title',
					   `card_prg`='$desc',
					   ".$imgsql."
				 WHERE `card_id`='$id'
				"; 

//EXECUTE QUERY
    $cardquery = mysqli_query($conn, $cardsql);

//CHECK FOR QUERY
   if($cardquery) { 
		//header('location: home.php'); 

	} else { 
		echo "Error: ".mysqli_error($conn); 
	} 
}


if (isset($_POST['carouselBtn'])) {
    // GET the DATA and store it to variables
    $title = $_POST['title'] ?? '';
    $desc = $_POST['desc'] ?? '';
    $img  = $_POST['img'] ?? '';
    $id   = $_POST['id'] ?? '';

    // Preparatory variables
    $imgsql  = '';
    $imglink = 0;

    // Validate image link
    if (!empty($img)) {
        $imglink = 1;
        // Escape input to prevent SQL injection
        $img = mysqli_real_escape_string($conn, $img);
        $imgsql = ", carousel_img = '$img'";
    }

    // Escape other inputs too
    $title = mysqli_real_escape_string($conn, $title);
    $desc  = mysqli_real_escape_string($conn, $desc);
    $id    = mysqli_real_escape_string($conn, $id);

    // Prepare query
    $carouselsql = "UPDATE `carousel_tb`
                SET `carousel_title` = '$title',
                    `carousel_desc` = '$desc'"
                . $imgsql .
               " WHERE `carousel_id` = '$id'";

    // Execute query
    $carouselquery = mysqli_query($conn, $carouselsql);

    // Check for query result
    if ($carouselquery) {
        //echo "✅ Carousel updated successfully!";
        // You can redirect if needed
        // header('Location: home.php');
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}

$getcardDatasql = "SELECT * FROM card_tb";
             $getcardDataquery = mysqli_query($conn, $getcardDatasql);

$getDatasql = "SELECT * FROM msg_tb";
             $getDataquery = mysqli_query($conn, $getDatasql);

$getcarouselDatasql = "SELECT * FROM carousel_tb";
             $getcarouselDataquery = mysqli_query($conn, $getcarouselDatasql);

    if (isset($_POST['btnpf'])) {

        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $image = $_POST['img'];
        $fullname = $_POST['Fullname'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];

        $updatesql = "UPDATE users_tb
                        SET img = '$image',
                            fullname = '$fullname',
                            email  = '$email',
                            phone   = '$phone'
                        WHERE id = '$id'";
            $updatequery = mysqli_query($conn, $updatesql);
        if ($updatequery == true){
            $msg = "<lable style= color:green;>Recod successfully updated.</label>";
        }else{
            $msg = "<lable style= color:red;>There is an error in updating recods.</label>";
            header ('location: process_data.php?msg=' .$msg);
        }
    }

    $getDatasql = "SELECT * FROM users_tb";
             $getquery = mysqli_query($conn, $getDatasql);
?>