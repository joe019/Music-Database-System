<?php

require_once 'includes/DbHandler.php';
date_default_timezone_set("Asia/Kolkata");
require 'Slim/Slim.php';
if (!isset($_SESSION)) {
    session_start();
}
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

function getConnection() {
    $dbhost = 'localhost';
    $dbname = 'db_music';
    $dbuser = 'root';
    $dbpass = '';
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}


$app->put('/regUser', function() use($app) {
    $db = new DbHandler();
    $putData = json_decode($app->request()->getBody());

    $userDetails = array(
        "userName" => $putData->userName,
        "emailId" => $putData->emailId,
        "passWord" => md5($putData->passWord)
    );

    $data = $db->regUser($userDetails);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/checkUserName/:un', function($un) use($app) {
    $db = new DbHandler();
    $data = $db->checkUserName($un);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/logUser/:un/:pw', function($un, $pw) use($app) {
    $db = new DbHandler();
    $data = $db->logUser($un, $pw);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

//MDbS Top Ten
$app->get('/listTopTen', function() use($app) {
    $db = new DbHandler();
    $data = $db->listTopTen();
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

//Songs
$app->get('/listSongsAll', function() use($app) {
    $db = new DbHandler();
    $data = $db->listSongsAll();
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/listSongs/:songName', function($songName) use($app) {
    $db = new DbHandler();
    $data = $db->listSongs($songName);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/listSongById/:idx', function($idx) use($app) {
    $db = new DbHandler();
    $data = $db->listSongById($idx);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->put('/addSong', function() use($app) {
    $db = new DbHandler();
    $Rdata = json_decode($app->request()->getBody());

    //Debugging...
    //$temp = $Rdata->songTitle;
    //print_r($temp);

    $songArray = array(
        "songTitle" => $Rdata->songTitle,
        "releaseYear" => $Rdata->releaseYear,
        "album" => $Rdata->album,
        "artist" => $Rdata->artist,
        "genre" => $Rdata->genre
    );

    $data = $db->addSong($songArray);

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/songExists/:title/:artist', function($songTitle, $artist) use($app) {
    $db = new DbHandler();
    $data = $db->songExists($songTitle, $artist);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/getUserRating/:uid/:sid', function($uid,$sid) use($app) {
    $db = new DbHandler();
    $data = $db->getUserRating($uid,$sid);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->put('/storeRating', function() use($app) {
    $db = new DbHandler();
    $putData = json_decode($app->request()->getBody());

    $ratingDetails = array(
        "userId" => $putData->userId,
        "songId" => $putData->songId,
        "rating" => $putData->rating
    );
     
    $db->updateRating($putData->songId,$putData->rating);
    
    $data = $db->storeRating($ratingDetails);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

//Artists
$app->get('/listArtists', function() use($app) {
    $db = new DbHandler();
    $data = $db->listArtists();
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

//Lists
$app->get('/showLists', function() use($app) {
    $db = new DbHandler();
    $data = $db->showLists();
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/showArtistSongs/:aName', function($aName) use($app) {
    $db = new DbHandler();
    $data = $db->showArtistSongs($aName);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/showListItems/:idx', function($idx) use($app) {
    $db = new DbHandler();
    $data = $db->showListItems($idx);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/getSNo/:songName', function($songName) use($app) {
    $db = new DbHandler();
    $data = $db->getSNo($songName);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->put('/addListName', function() use($app) {
    $db = new DbHandler();
    $Rdata = json_decode($app->request()->getBody());

    $listNameArray = array(
        "listName" => $Rdata->listName,
        "userId" => $Rdata->userId
    );

    $data = $db->addListName($listNameArray);

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->put('/addListEntries', function() use($app) {
    $db = new DbHandler();
    $Rdata = json_decode($app->request()->getBody());

    $listEntries = array(
        "listId" => $Rdata->listId,
        "listEntry" => $Rdata->listEntry,
        "listPosition" => $Rdata->listPosition
    );

    $data = $db->addListEntries($listEntries);

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/getListId/:listName', function($listName) use($app) {
    $db = new DbHandler();
    $data = $db->getListId($listName);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

//Quiz
$app->get('/listQuestions', function() use($app) {
    $db = new DbHandler();
    
    $min = 1;
    $max = 45;
    $quantity = 10;
    $numbers = range($min, $max);
    shuffle($numbers);
    $numbers = array_slice($numbers, 0, $quantity);
    
    $data = $db->listQuestions($numbers);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

//Trivia
$app->get('/listTrivia', function() use($app) {
    $db = new DbHandler();
    $data = $db->listTrivia();
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->put('/addTrivia', function() use($app) {
    $db = new DbHandler();
    $Rdata = json_decode($app->request()->getBody());

    $triviaArray = array(
        "fact" => $Rdata->newTrivia
    );

    $data = $db->addTrivia($triviaArray);

    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->run();
