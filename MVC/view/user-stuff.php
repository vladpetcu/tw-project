<?php
	include_once 'init-uh.php';
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
                <div id="ad-panorama">
                    <img src="../../images/ad-panorama/1.jpg" alt="">
                    <img src="../../images/ad-panorama/2.jpg" alt="">
                    <img src="../../images/ad-panorama/3.jpg" alt="">
                    <img src="../../images/ad-panorama/4.jpg" alt="">
                    <img src="../../images/ad-panorama/5.jpg" alt="">
                    <img src="../../images/ad-panorama/6.jpg" alt="">
                    <img src="../../images/ad-panorama/7.jpg" alt="">
                    <img src="../../images/ad-panorama/8.jpg" alt="">
                    <img src="../../images/ad-panorama/9.jpg" alt="">
                </div>
                <div class="topics-container">
                    <h3>&#x1F440;&nbsp;My trips</h3>
                    <hr>
                    <div class="my-topics">
                        <div class="topics">
                            <h4>Trip name/ identifier</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie
                            </p>
                            <div class="topic-buttons-div">
                                <button class="active-inactive-topic" value="on">Deactivate</button>
                                <button class="delete-topic">Delete</button>
                            </div>            
                        </div> 
                        <div class="topics">
                            <h4>Trip name/ identifier</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuri was popularised in the 1960s with
                            </p>
                            <div class="topic-buttons-div">
                                <button class="active-inactive-topic" value="on">Deactivate</button>
                                <button class="delete-topic">Delete</button>
                            </div>
                        </div>
                        <div id="no-topics-displayed">
                            <p>You have no trips.<br>In order to have one, complete the form above.</p>
                            <div id="gif-container">
                                <img src="../../images/pinguin.gif" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div id="bottom-line"></div>
        

        <script src="../../js/trips-buttons.js"></script>
    </body>
</html>