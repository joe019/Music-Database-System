<?php

class DbHandler {

    private $db;

    function __construct() {
        require_once 'NotORM.php';
        include_once 'dbconnection.php';
        $pdo = new PDO('mysql:dbname=' . $dbname . ';host=' . $dbhost, $dbuser, $dbpass);
        $this->db = new NotORM($pdo);
    }

    public function regUser($userDetails) {
        $this->db->tbl_user()
                ->insert($userDetails);
    }

    public function checkUserName($un) {
        $this->db->tbl_user()
                ->where('userName = ?', $un);
    }

    public function logUser($un, $pw) {
        return $this->db->tbl_user()
                        ->where('userName = ?', $un)
                        ->and('passWord = ?', md5($pw));
    }

    public function listSongs($songName) {
        return $this->db->tbl_songs()
                        ->where("songTitle like ?", "$songName%")
                        ->order('songTitle', 'releaseYear');
    }

    public function listSongsById($idx) {
        return $this->db->tbl_songs()
                        ->where("sNo = ?", $idx);
    }

    public function listSongsAll() {
        return $this->db->tbl_songs()
                        ->order('songTitle', 'releaseYear');
    }

    public function addSong($songArray) {
        return $this->db->tbl_songs()
                        ->insert($songArray);
    }

    public function songExists($songTitle, $artist) {
        return $this->db->tbl_songs()
                        ->where('songTitle = ?', $songTitle)
                        ->and('artist = ?', $artist);
    }

    public function listTrivia() {
        return $this->db->tbl_trivia();
    }

    public function listQuestions() {
        return $this->db->tbl_quiz()
                        ->limit(10);
    }

}
