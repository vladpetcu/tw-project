<?php

    class News extends Controller{

        public function index(){

            $dbResp = $this->model('dbNews');
            if($dbResp->checkConnection() == 'db-failure'){
                $this->view('404');    
            }
            else{
                $news = $dbResp->getNewsFromDB();
                $this->view('news', $news);
            }
        }
    }

?>