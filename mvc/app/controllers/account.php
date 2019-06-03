<?php

    class Account extends Controller{

        public function index(){
            $this->view('myaccount');
        }

        public function login(){
            $dbResp = $this->model('loginUser');
            if($dbResp->checkConnection() == 'db-failure'){
                $dbResp->close();
                $this->view('404');    
            }
            else{
                if(isset($_POST['login-but'])){
                    $stat = [];
                    array_push($stat, 'signup');
            
                    $uid = mysqli_real_escape_string($dbResp->getConnection(), $_POST['uid']);
                    $pwd1 = mysqli_real_escape_string($dbResp->getConnection(), $_POST['pwd']);
            
                    if( empty($uid) || empty($pwd1)){
                        array_push($stat, 'failed');
                        $dbResp->close();
                        $this->view('myaccount', $stat);
                    }
                    else{
                        $loginAnswer = $dbResp->verifyUid($uid, $pwd1);
                        if($loginAnswer == false){
                            array_push($stat, 'failed');
                            $dbResp->close();
                            $this->view('myaccount', $stat);
                        }
                        else{
                            // $_SESSION['iduser'] = $loginAnswer['id'];
                            // $_SESSION['user'] = $loginAnswer['username'];
                            // $_SESSION['mail'] = $loginAnswer['email'];
                            array_push($stat, 'succesful');
                            $dbResp->close();
                            $this->view('myaccount', $stat);
                        }
                    }
                }
                else{
                    $this->view('myaccount', $stat);
                }
                $dbResp->close();
            }            
            
        }

        public function signup(){
            $dbResp = $this->model('signupUser');
            if($dbResp->checkConnection() == 'db-failure'){
                $dbResp->close();
                $this->view('404');    
            }
            else{
                if(isset($_POST["signup-but"])){
                    $stat = [];
                    array_push($stat, 'signup');
                    $conn = $dbResp->getConnection();
                    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
                    $mail = mysqli_real_escape_string($conn,$_POST['mail']);
                    $pwd1 = mysqli_real_escape_string($conn,$_POST['pwd']);
                    $pwd2 = mysqli_real_escape_string($conn,$_POST['pwd-repeat']);
                    unset($_POST["signup-but"]);
                 
                    if(empty($mail) || empty($uid) || empty($pwd1) || empty($pwd2)){
                        array_push($stat, 'failed');
                        $dbResp->close();
                        $this->view('myaccount', $stat);
                    }
                    else{
                        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                            array_push($stat, 'failed');
                            $dbResp->close();
                            $this->view('myaccount', $stat);
                        }
                        else{
                            if($dbResp->validateUid($uid) == false){
                                array_push($stat, 'failed, username already taken');
                                $dbResp->close();
                                $this->view('myaccount', $stat);
                            }
                            else{
                                if($pwd1 != $pwd2){
                                    array_push($stat, 'failed, match the passwords');
                                    $dbResp->close();
                                    $this->view('myaccount', $stat);
                                }
                                else{
                                    $hashedPwd = password_hash($pwd1, PASSWORD_DEFAULT);
                                    $insertAnswer = $dbResp->insertIntoDB($uid, $mail, $hashedPwd);
                                    if($insertAnswer == "err"){
                                        array_push($stat, 'failed, database error', $stat);
                                        $dbResp->close();
                                        $this->view('myaccount');    
                                    }
                                    else{
                                        $dbResp->close();
                                        array_push($stat, 'successful');
                                        $dbResp->close();
                                        $this->view('myaccount', $stat);
                                    }
                                }
                            }
                        }
                    }
                }
                else{
                    $dbResp->close();
                    array_push($stat, 'failed');
                    $dbResp->close();
                    $this->view('myaccount', $stat);
                }
            } 

        }

    }

?>