<?php
class Connection{
    public function connect(){
        $usr = "maoniuser";
        $pwd = "maoniuser";
        return new PDO("mysql:host=localhost;dbname=maoni",$usr,$pwd);
    }
}