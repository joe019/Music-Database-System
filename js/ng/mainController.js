var app = angular.module('musicApp', ["ngRoute"]);

app.config(function ($routeProvider) {
    $routeProvider
            .when("/", {
                templateUrl: "views/homePage"
            })
            .when('/:page', {
                templateUrl: function ($routeParams) {
                    return 'views/' + $routeParams.page + '.php';
                }
            })
            .when('/:page/:child*', {
                templateUrl: function ($routeParams) {
                    return 'views/' + $routeParams.page + '/' + $routeParams.child + '.php';
                }
            })
            .otherwise({
                redirectTo: '/views/homePage'
            });
});

app.controller('GlobalController', function ($scope, $http, $window) {

});

app.controller('homePageController', function ($scope, $http, $window) {
    $scope.registerUser = function () {
        $http.get("api/checkUserName/" + $scope.userName).success(function (data) {
            if (angular.equals(data, []))
            {
                if ($scope.passWord === $scope.repeatPassWord)
                {
                    $scope.regArray = {
                        userName: $scope.userName,
                        emailId: $scope.emailId,
                        passWord: $scope.passWord
                    }
                    $http.put("api/regUser", $scope.regArray).success(function (data) {
                        $window.location = "#/menuPage";
                    });
                }
                else
                {
                    alert("Passwords do not match!");
                }
            }
            else
            {
                alert("User name already exists!");
                $scope.userName = "";
                $scope.emailId = "";
                $scope.passWord = "";
                $scope.repeatPassWord = "";
            }
        });
        $scope.checkUserName();

    }
    $scope.loginUser = function () {
        $http.get("api/logUser/" + $scope.userName + "/" + $scope.passWord).success(function (data) {
            if (angular.equals(data, []))
                alert("Unable to login");
            else
                $window.location = "#/menuPage";
        });
    }

});

app.controller('menuPageController', function ($scope, $http, $window) {
    $scope.goToTopTen = function ()
    {
        $window.location = "#/topTenPage";
    }
    $scope.goToSongs = function ()
    {
        $window.location = "#/songsPage";
    }
    $scope.goToArtists = function ()
    {
        $window.location = "#/artistsPage";
    }
    $scope.goToLists = function ()
    {
        $window.location = "#/listsPage";
    }
    $scope.goToQuiz = function ()
    {
        $window.location = "#/quizPage";
    }
    $scope.goToTrivia = function ()
    {
        $window.location = "#/triviaPage";
    }
});

app.controller('songsPageController', function ($scope, $http, $window) {
    $scope.songsArray = [];
    $scope.searchSong = "";
    $scope.songTitle = "";
    $scope.releaseYear = "";
    $scope.album = "";
    $scope.artist = "";
    $scope.genre = "";

    $scope.listSongs = function (songName)
    {
        $http.get("api/listSongs/" + songName).success(function (data) {
            $scope.songsArray = data;
            $scope.apply();
        });
    }

    $scope.listSongsAll = function ()
    {
        $http.get("api/listSongsAll").success(function (data) {
            $scope.songsArray = data;
            $scope.apply();
        });
    }

    $scope.nameChange = function ()
    {
        if (($scope.searchSong).length == 0)
            $scope.listSongsAll();
        else
            $scope.listSongs($scope.searchSong);
    }

    $scope.addSong = function ()
    {
        $http.get("api/songExists/" + $scope.songTitle + "/" + $scope.artist).success(function (data) {
            if (angular.equals(data, []))
            {
                $scope.songDetails = {
                    songTitle: $scope.songTitle,
                    releaseYear: $scope.releaseYear,
                    album: $scope.album,
                    artist: $scope.artist,
                    genre: $scope.genre
                };

                $http.put("api/addSong", $scope.songDetails).success(function (data) {
                    if (data != false)
                        alert("Song added successfully!");
                    $scope.apply();
                });
            }
            else
            {
                alert("Song already exists!");
            }
            $scope.songTitle = "";
            $scope.releaseYear = "";
            $scope.album = "";
            $scope.artist = "";
            $scope.genre = "";
        });
    }

    $scope.songDetails = function (idx)
    {
        $window.sessionStorage["songIndex"] = $scope.songsArray[idx].sNo;
        window.location = "#/songDetails";
    }

    $scope.listSongsAll();
});

app.controller('songDetailsController', function ($scope, $http, $window) {
    $scope.details = [];
    $scope.listSongsById = function ()
    {
        $http.get("api/listSongsById/" + $window.sessionStorage["songIndex"]).success(function (data) {
            $scope.details = data;
            $scope.apply();
        });
    }
    $scope.listSongsById();
});

app.controller('triviaPageController', function ($scope, $http, $window) {
    $scope.triviaArray = [];
    $scope.listTrivia = function ()
    {
        $http.get("api/listTrivia").success(function (data) {
            $scope.triviaArray = data;
            $scope.apply();
        });
    }
    $scope.listTrivia();
});

app.controller('quizPageController', function ($scope, $http, $window) {
    $scope.entries = [];
    $scope.qNo = 0;
    $scope.score = 0;

    $scope.listQuestions = function ()
    {
        $http.get("api/listQuestions").success(function (data) {
            $scope.entries = data;
            $scope.apply();
        });
    }

    $scope.clicked = function (num)
    {
             //alert($scope.entries[$scope.qNo].answer);
             if(num==1)
             {
                if ($scope.entries[$scope.qNo].answer === $scope.entries[$scope.qNo].option1)
                {
                    $scope.score++;
                }
            }
            else if(num==2)
             {
                if ($scope.entries[$scope.qNo].answer === $scope.entries[$scope.qNo].option2)
                {
                    $scope.score++;
                }
            }
            else if(num==3)
             {
                if ($scope.entries[$scope.qNo].answer === $scope.entries[$scope.qNo].option3)
                {
                    $scope.score++;
                }
            }
            else if(num==4)
             {
                if ($scope.entries[$scope.qNo].answer === $scope.entries[$scope.qNo].option4)
                {
                    $scope.score++;
                }
            }
        $scope.qNo++;
        if($scope.qNo == 10)
        {
            $window.sessionStorage["score"] = $scope.score;
            window.location = "#/quizResult";
        }
    }
    $scope.listQuestions();
});

app.controller('quizResultController', function ($scope, $http, $window) {
    $scope.score = $window.sessionStorage["score"]; 
});


//window.alert(JSON.stringify(data));
//$window.sessionStorage["template_index"] = index;
//window.sessionStorage.clear();
//window.location = "index.html";