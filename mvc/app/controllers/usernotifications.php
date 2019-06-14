<?php

    class UserNotifications extends Controller{
        
        public function index(){
            $stat = [];
            $dbResp = $this->model('getSetProfile');
            if($dbResp->checkConnection() == 'db-failure'){
                $dbResp->close();
                $username = 'undefined-user';
                $picture = 'default-user.jpg';
            }
            else{
                $username = $dbResp->getProfile($_SESSION["iduser"]);
                $picture = $dbResp->getPicture($_SESSION["iduser"]);
            }
            array_push($stat, $username);
            array_push($stat, $picture);

            $dbNotifs = $this->model('userNotifs');
            if($dbNotifs->checkConnection() == 'db-failure'){
                $dbNotifs->close();
            }
            else{
               $notif = [];
               $notif = $dbNotifs->getMyNotifications($_SESSION['iduser']);
               if(count($notif) > 0){
                   array_push($stat, $notif);
               }

            }
            
            $this->view('usernotifications', $stat);
        }

        public function changepic(){
            $dbResp = $this->model('getSetProfile');
            if($dbResp->checkConnection() == 'db-failure'){
                $dbResp->close();
                $this->view('404');    
            }
            else{
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $id = $_SESSION["iduser"];
                    $file = $_FILES["profile-pic"];
                    $fileName = $_FILES["profile-pic"]['name'];
                    $fileTmpName = $_FILES["profile-pic"]['tmp_name'];
                    $fileSize = $_FILES["profile-pic"]['size'];
                    $fileError = $_FILES["profile-pic"]['error'];
                    $fileType = $_FILES["profile-pic"]['type'];

                    $fileExt = explode('.', $fileName);
                    $fileActualExt = strtolower(end($fileExt));

                    $allowed = array('jpg', 'jpeg', 'png');
                    if(in_array($fileActualExt, $allowed)){
                        if($fileError === 0){
                            if($fileSize < 1000000){
                                $fileNameNew = "p" . $id . "." . $fileActualExt;
                                $fileDestination = $_SERVER["DOCUMENT_ROOT"].'/pr/mvc/public/images/profiles/' . $fileNameNew;

                                if(move_uploaded_file($fileTmpName, $fileDestination)){
                                    $dbResp->updatePicStatus($id, $fileActualExt);
                                    // $this->view('userindex');
                                    header('location:http://localhost/pr/mvc/public/user/index');
                                }
                                else{
                                    $this->index();                        
                                }
                            }
                            else{
                                $this->index();
                            }
                        }
                        else{
                            $this->index();
                        }
                    }
                    else{
                        $this->index();
                    }
                }
            }
        }

        public function logout(){
            if(isset($_POST["logout-but"])){
                session_unset();
                session_destroy();
                sleep(1);
                header('Location: https://tripinspire.localhost/mvc/public/home/index');
            }
            else{
                $this->index();
            }
        }
    }
?>