<?php
    include_once '../controller/init-uh.php';
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TripInspire</title>
        <link rel="stylesheet" type="text/css" href="https://tripinspire.localhost/mvc/public/css/user-index-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://tripinspire.localhost/mvc/public/css/user-notifications-style.css">
        <link rel="stylesheet" type="text/css" href="https://tripinspire.localhost/mvc/public/css/user-stuff-style.css">

    </head>
    <body>
        <div id="top-line">
            <img src="https://tripinspire.localhost/mvc/public/images/logo1.png" id="logo" alt="">
        </div>
        <main class="main-section">
            <div class="menu-sidebar">
                <?php
                    include_once 'header.php';
                ?>
            </div>
            <div class="content-container">
                <div class="notif-bar">
                    <div>
                        <h3>&#x1f514;&nbsp;My notifications</h3>
                        <hr>
                    </div>
                </div>
                <div class="notif-container" style="display:block">
                    <ol id="unread-notifications-ol">
                        <?php                       
                            if(!isset($data[2])){
                                echo '
                                <div id="no-topics-displayed">
                                    <p>You have no notifications.<br>We are looking for the best trips to suit your preferences!</p>
                                    <div id="gif-container">
                                        <img src="https://tripinspire.localhost/mvc/public/images/pinguin.gif" alt="">
                                    </div>
                                </div>
                                ';
                            }
                            else{
                                $myNotifs = $data[2];
                                for($i = 0; $i < count($myNotifs); $i++){
                                    echo '
                                        <li>
                                            <h5>'. ucfirst($myNotifs[$i]['tripname']).' - '. $myNotifs[$i]['price'].' EUR'.'</h5>
                                            <p>'. $myNotifs[$i]['fromcity'] .' to '. $myNotifs[$i]['tocity'] .'</p>
                                            <a href="'.$myNotifs[$i]['flight'].'">Go to</a>
                                            <div class="notif-but">
                                                <button class="mark-notif">Delete</button>
                                            </div>
                                        </li>
                                    ';
                                }
                            }

                        ?>
                    </ol>
                </div>
            </div>
        </main>
        <div id="bottom-line"></div>

        <script src="https://tripinspire.localhost/mvc/public/js/profile-picture.js"></script>
    </body>
</html>