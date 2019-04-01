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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <div class="new-topic">
                    <form id="new-topic-form" method="POST">
                        <h3>Let's find a new trip &#x1F6EB;</h3>
                        <hr>
                        <div class="form-divs">
                            <h4>‍‍&#x1F427;&nbsp;What are you interested in?</h4>
                            <ul id="interested-in">
                                <li>
                                    <input type="checkbox" id="icb1">
                                    <label for="icb1"><img src="../../images/form/i1.jpg" alt=""></label>
                                    <h5>City Break</h5>
                                </li>
                                <li>
                                    <input type="checkbox" id="icb2">
                                    <label for="icb2"><img src="../../images/form/i2.jpg" alt=""></label>    
                                    <h5>Adventure</h5>
                                </li>
                                <li>
                                    <input type="checkbox" id="icb3">
                                    <label for="icb3"><img src="../../images/form/i3.jpg" alt=""></label>    
                                    <h5>Culture & History</h5>
                                </li>
                                <li>
                                    <input type="checkbox" id="icb4">
                                    <label for="icb4"><img src="../../images/form/i4.jpg" alt=""></label>    
                                    <h5>Honeymoon</h5>
                                </li>
                                <li>
                                    <input type="checkbox" id="icb5">
                                    <label for="icb5"><img src="../../images/form/i5.jpg" alt=""></label>    
                                    <h5>Beaches & Islands</h5>
                                </li>
                                <li>
                                    <input type="checkbox" id="icb6">
                                    <label for="icb6"><img src="../../images/form/i6.jpg" alt=""></label>
                                    <h5>Family</h5>    
                                </li>                            
                            </ul>
                        </div>
                        <div class="form-divs">
                            <h4>&#x1F5FA;&nbsp;Where are you traveling from?</h4>
                            <div class="search-city-container">
                                <input type="search" placeholder="Search city..." name="search-city" id="isearch-city">
                            </div>
                        </div>
                        <div class="form-divs">
                            <h4>&#x1F4B0;&nbsp;What is your maximum budget?</h4>
                            <div class="budget-container">
                                <div class="speech-bubble" id="budget-bubble">0</div>
                                <input type="range" name="ibudgetname" min="0" max="1000" value="0" step="10" class="slider" id="ibudget">
                            </div>
                            <h4>&#x1F468;&#x200D;&#x1F469;&#x200D;&#x1F467;&#x200D;&#x1F466;&nbsp;&nbsp;&nbsp;How many people?</h4>
                            <div class="people-container">
                                <input type="number" min="1" value="1" id="ipeople">
                            </div>
                            <h5 id="h5-crt-budget">Current budget:  <span id="current-budget">0</span> &euro; / ticket</h5>
                        </div>
                        <div class="form-divs">
                            <h4>&#x2708;&nbsp;What kind of flight do you want?</h4>
                            <div class="flight-container">
                                <select name="flights" id="flight-type">
                                    <option value="oneway">One-way</option>
                                    <option value="round">Round</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-divs" id="leaving-date-container">
                                <h4>&#x1F3DD;&nbsp;Leaving on</h4>
                                <input type="date" id="ileavingdate">
                            </div>                        
                        <div class="form-divs" id="coming-date-container">
                            <h4>&#x1F3E0;&nbsp;Coming back in</h4>
                            <input type="date" id="icomingdate">
                        </div>
                        <div class="form-divs" id="weather-preferences-container">
                            <h4>&#x1F31E;&nbsp;What preferences you have for the weather?</h4>
                            <ul class="weather-ul">
                                <li class="weather-pref-li">
                                    <label for="imindegrees">Minimum&nbsp;<input type="number" id="imindegrees">&nbsp;&deg;C</label>
                                </li>
                                <li class="weather-pref-li">
                                    <label for="imaxdegrees">Maximum&nbsp;<input type="number" id="imaxdegrees">&nbsp;&deg;C</label>
                                </li>
                                <li class="weather-pref-li">
                                    <label for="isky">
                                        <select name="isky-options" id="">
                                            <option value="sunny">Sunny</option>
                                            <option value="cloudy">Cloudy</option>
                                            <option value="broken-clouds-to">Broken clouds to</option>
                                        </select>&nbsp;sky
                                    </label>
                                </li>
                                <li class="weather-pref-li">
                                    <label for="ihumidity">Humidity&nbsp;
                                        <input type="number" min="0" max="100" id="imaxdegrees">&nbsp;%</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-divs">
                            <h4>&#x1F60F;&nbsp;Give a suitable name to your trip</h4>
                            <input type="text" id="itripname">
                        </div>
                        <div class="add-topic-button-div">
                            <img src="../../images/verified.jpg" id="verified" alt="">
                            <img src="../../images/wrong.jpg" id="wrong" alt="">
                            <button type="submit" id="add-trip" title="Add topic">Add Trip</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <div id="bottom-line"></div>


        <script src="../../js/today-date.js"></script>
        <script src="../../js/form-display.js"></script>
        <script src="../../js/add-trip.js"></script>
    </body>
</html>