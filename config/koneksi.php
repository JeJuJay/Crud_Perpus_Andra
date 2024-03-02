<?php

class Koneksi
{
    public function koneksi(){
    $kon = mysqli_connect('localhost', 'root', '', 'ukk_database');
    return $kon;
    }
}