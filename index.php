<?php
    session_start();
    if(isset($_SESSION['unique_id'])) {
        header("location: users.php");
    }
?>

<?php include_once "header.php";  ?>
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