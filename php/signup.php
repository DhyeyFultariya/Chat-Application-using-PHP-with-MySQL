<?php
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($fname)) {
        // lets check user email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) { //if email is valid
            // check email already exits in database or not
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0) { // if email already exits 
                echo "$email - This email already exist!";
            } else {
                // check user upload file or not
                if(isset($_FILES['image'])) { // if file is uploaded
                    $img_name = $_FILES['image']['name']; //getting user uploaded img name
                    $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is user to save/move file in folder 

                    // explode image and get the last extension like jpg, png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); // here we get extension of an user uploaded img file
                    
                    $extensions = ['png','jpeg', 'jpg'];

                    if(in_array($img_ext, $extensions) === true) {
                        $time = time(); // return current time
                        $new_img_name = $time.$img_name; 
                        
                        if(move_uploaded_file($tmp_name, "imags/".$new_img_name)) {
                            $status = "Active now";
                            $random_id = rand(time(), 10000000);

                            $sql2 = mysqli_query($conn, "INSERT  INTO user ()")
                        }

                    } else {
                        echo "This extension not allowed!";
                    }

                } else {
                    echo "Plese enter an image file";
                }
            }
        } else {
            echo "$email - This is not valid email!";
        }
    } else {
        echo "All Input field are required!";
    }
?>