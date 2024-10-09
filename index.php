<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Chat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Let's Chat</header>
            <form action="#" encrypt="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name :</label>
                        <input type="text" name="fname" placeholder="First Name"required>
                    </div>
                    <div class="field input">
                        <label>Last Name :</label>
                        <input type="text" name="lname" placeholder="Last Name"required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email :</label>
                    <input type="text" name="email" placeholder="Enter your Email"required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter New Password"required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image"required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up ?  <a href="login.php">Login Now</a></div>
        </section>
    </div>

    <script src="JS/pass-show-hide.js"></script>
    <script src="JS/signup.js"></script>

</body>
</html>