<?php

while($row = mysqli_fetch_assoc($sql)) {
    $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                    <div class="content">
                        <img src="php/images/'. $row['img'] .'" alt="">
                        <div class="details">
                            <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                            <p>This is the test message</p>
                        </div>
                    </div>
                    <div class="status-dot online"><i class="fas fa-circle"></i></div>
                </a>';
}

?>