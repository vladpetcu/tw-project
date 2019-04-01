<?php
class View{
    function initHeaderLocation(string $hdr){
        header("Location: ./MVC/view/$hdr.php");
    }
};
?>
