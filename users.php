<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])) {
        header("location: ../login.php");
    }
?>

<?php include_once "header.php";  ?>

<body>
    
    <div class="wrapper">
        <section class="users">
            <header>
            <?php
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']  ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="assets/avatar12.jpg" alt="">
                        <div class="details">
                            <span>Amy</span>
                            <p>This is the test message</p>
                        </div>
                    </div>
                    <div class="status-dot online"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/avatar13.jpg" alt="">
                        <div class="details">
                            <span>Jake</span>
                            <p>This is the test message</p>
                        </div>
                    </div>
                    <div class="status-dot online"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/avatar14.jpg" alt=""> 
                        <div class="details">
                            <span>Kate</span>
                            <p>This is the test message</p>
                        </div>
                    </div>
                    <div class="status-dot online"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/avatar15.jpg" alt="">
                        <div class="details">
                            <span>Tom</span>
                            <p>This is the test message</p>
                        </div>
                    </div>
                    <div class="status-dot online"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/avatar17.jpg" alt="">
                        <div class="details">
                            <span>Elle</span>
                            <p>This is the test message</p>
                        </div>
                    </div>
                    <div class="status-dot online"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>

    <script src="JS/users.js"></script>

</body>
</html>