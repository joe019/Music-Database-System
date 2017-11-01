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
        return $this->db->tbl_user()
                        ->insert($userDetails);
    }

    public function checkUserName($un) {
        return $this->db->tbl_user()
                        ->where('userName = ?', $un);
    }

    public function logUser($un, $pw) {
        return $this->db->tbl_user()
                        ->where('userName = ?', $un)
                        ->and('passWord = ?', md5($pw));
    }

    //Top Ten
    public function listTopTen() {
        return $this->db->tbl_songs()
                        ->order('rating desc', 'totalPoints desc')
                        ->limit(10);
    }

    //Songs
    public function listSongsAll() {
        return $this->db->tbl_songs()
                        ->order('songTitle', 'releaseYear');
    }

    public function listSongs($songName) {
        return $this->db->tbl_songs()
                        ->where("songTitle like ?", "$songName%")
                        ->order('songTitle', 'releaseYear');
    }

    public function listSongById($idx) {
        return $this->db->tbl_songs()
                        ->where("sNo = ?", $idx);
    }

    public function getUserRating($uid, $sid) {
        return $this->db->tbl_ratings()
                        ->where("userId = ?", $uid)
                        ->and("songId = ?", $sid);
    }

    public function storeRating($ratingDetails) {
        return $this->db->tbl_ratings()
                        ->insert($ratingDetails);
    }

    public function updateRating($songId, $rating) {
        $x = array("rating" => $rating);

        $this->db->tbl_songs()
                ->where('sNo = ?', $songId)
                ->update($x);
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

    //Artists
    public function listArtists() {
        return $this->db->tbl_songs()
                        ->select('distinct(artist) as artistName')
                        ->order('artistName asc');
    }

    public function showArtistSongs($aName) {
        return $this->db->tbl_songs()
                        ->where('artist = ?', $aName);
    }

    //Lists
    public function showLists() {
        return $this->db->tbl_lists();
    }

    public function showListItems($idx) {
        return $this->db->tbl_listitems()
                        ->where('listId = ?', $idx)
                        ->order('listPosition');
    }

    public function getSNo($songName) {
        return $this->db->tbl_songs()
                        ->where('songTitle = ?', $songName);
    }

    public function addListName($listNameArray) {
        return $this->db->tbl_lists()
                        ->insert($listNameArray);
    }

    public function addListEntries($listEntries) {
        return $this->db->tbl_listitems()
                        ->insert($listEntries);
    }

    public function getListId($listName) {
        return $this->db->tbl_lists()
                        ->where('listName = ?', $listName);
    }

    //Quiz
    public function listQuestions($numbers) {
        return $this->db->tbl_quiz()
                        ->where('qID = ? or qID = ? or qID = ? or qID = ? or qID = ? or qID = ? or qID = ? or qID = ? or qID = ? or qID = ?', $numbers[0], $numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5], $numbers[6], $numbers[7], $numbers[8], $numbers[9]);
    }

    //Trivia
    public function listTrivia() {
        return $this->db->tbl_trivia();
    }

    public function addTrivia($triviaArray) {
        return $this->db->tbl_trivia()
                        ->insert($triviaArray);
    }

}
