<header class="main-header">
    <div class="profile-container">
        <?php
            if(isset($_SESSION["iduser"])){
                include_once '../controller/profile-render.php';
                $picture = getUserPic();
                echo '<img src="../../images/profiles/' . $picture . '" alt="">';
                echo '<form id="profile-form" name="profile-form-name" action="../controller/profile-render.php" method="POST" enctype="multipart/form-data">
                        <label for="profile-pic-input"><img src="../../images/pic-upload.png" alt=""></label>
                        <input type="file" name="profile-pic" id="profile-pic-input">
                    </form>';    
                $name = getUserName();
                echo '<h2>' . $name . '</h2>';
            }
            else{
                header("Location: 404.php?header-error");
                exit();
            }
        ?>

    </div>
    <nav>
        <ul>
            <li>
                <a href="user-index.php" title="Home"><i class="fa fa-fw fa-home"></i></a>
            </li>
            <li>
                <a href="user-stuff.php" title="My Stuff"><i class="fa fa-fw fa-user"></i></a>
            </li>
            <li>
                <a href="user-notifications.php" title="Notifications"><i class="fa fa-fw fa-newspaper-o"></i></a>
            </li>
            <li>
                <a href="../controller/logout-ctrl.php" title="Log Out"><i class="fa fa-fw fa-sign-out"></i></a>
            </li>
        </ul>
    </nav>
</header>