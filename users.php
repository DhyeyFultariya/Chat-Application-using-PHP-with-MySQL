<?php include_once "header.php";  ?>

<body>
    
    <div class="wrapper">
        <section class="users">
            <header>
            <?php

            ?>
                <div class="content">
                    <img src="./assets/avatar1.jpg" alt="">
                    <div class="details">
                        <span>Lily</span>
                        <p>Active now</p>
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