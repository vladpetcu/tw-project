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
        <link rel="stylesheet" type="text/css" href="../../css/user-index-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/user-notifications-style.css">
        <link rel="stylesheet" type="text/css" href="../../css/user-stuff-style.css">

    </head>
    <body>
        <div id="top-line">
            <img src="../../images/logo1.png" id="logo" alt="">
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
                        <ul id="notifications-ul">
                            <li id="unread-notifications">Unread</li>
                            <li id="all-notifications">All</li>
                        </ul>
                    </div>
                </div>
                <div class="notif-container" style="display:block">
                    <ol id="unread-notifications-ol">
                        <li>
                            <h5>un trip name</h5>
                            <p>we found: ceva jmk</p>
                            <div class="notif-but">
                                <button class="mark-notif">Mark as read</button>
                            </div>
                        </li>
                        <li>
                            <h5>un trip name</h5>
                            <p>we found: ceva jmk</p>
                            <div class="notif-but">
                                <button class="mark-notif">Mark as read</button>
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="notif-container" style="display:none">
                    <ol id="all-notifications-ol">
                            <li>
                                <h5>trip name</h5>
                                <p>we found: ceva jmk</p>
                            </li>
                            <li>
                                <h5>trip name</h5>
                                <p>we found: ceva jmk</p>
                            </li>
                    </ol>
                </div>



            </div>
        </main>
        <div id="bottom-line"></div>

        <script src="../../js/profile-picture.js"></script>
        <script src="../../js/notif-switch.js"></script>
    </body>
</html>