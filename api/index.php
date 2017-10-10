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

$app->get('/listSongs/:songName', function($songName) use($app) {
    $db = new DbHandler();
    $data = $db->listSongs($songName);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/listSongsById/:idx', function($idx) use($app) {
    $db = new DbHandler();
    $data = $db->listSongsById($idx);
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/listSongsAll', function() use($app) {
    $db = new DbHandler();
    $data = $db->listSongsAll();
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

$app->get('/listTrivia', function() use($app) {
    $db = new DbHandler();
    $data = $db->listTrivia();
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/listQuestions', function() use($app) {
    $db = new DbHandler();
    $data = $db->listQuestions();
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->run();
