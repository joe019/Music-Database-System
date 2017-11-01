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

    $scope.registerUser = function ()
    {
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
                        $window.sessionStorage["userId"] = data["id"];
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
    }

    $scope.loginUser = function ()
    {
        $http.get("api/logUser/" + $scope.userName + "/" + $scope.passWord).success(function (data) {
            if (angular.equals(data, []))
                alert("Unable to login");
            else
            {
                $window.sessionStorage["userId"] = data[0]["sNo"];
                $window.location = "#/menuPage";
            }
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

//Top Ten
app.controller('topTenPageController', function ($scope, $http, $window) {
    $scope.topTenArray = [];

    $scope.listTopTen = function ()
    {
        $http.get("api/listTopTen").success(function (data) {
            $scope.topTenArray = data;
            $scope.apply();
        });
    }
    $scope.listTopTen();
});

//Songs
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
    $scope.ratingValue = 0;
    $scope.oneStar = false;
    $scope.twoStar = false;
    $scope.threeStar = false;
    $scope.fourStar = false;
    $scope.fiveStar = false;

    $scope.listSongById = function ()
    {
        $http.get("api/listSongById/" + $window.sessionStorage["songIndex"]).success(function (data) {
            $scope.details = data;
        });
        $scope.getUserRating();
    }

    $scope.getUserRating = function ()
    {
        $http.get("api/getUserRating/" + $window.sessionStorage["userId"] + "/" + $window.sessionStorage["songIndex"]).success(function (data) {
            $scope.ratingValue = data[0]["rating"];
            if ($scope.ratingValue == 5)
            {
                $scope.oneStar = true;
                $scope.twoStar = true;
                $scope.threeStar = true;
                $scope.fourStar = true;
                $scope.fiveStar = true;
            }
            else if ($scope.ratingValue == 4)
            {
                $scope.oneStar = true;
                $scope.twoStar = true;
                $scope.threeStar = true;
                $scope.fourStar = true;
            }
            else if ($scope.ratingValue == 3)
            {
                $scope.oneStar = true;
                $scope.twoStar = true;
                $scope.threeStar = true;
            }
            else if ($scope.ratingValue == 2)
            {
                $scope.oneStar = true;
                $scope.twoStar = true;
            }
            else if ($scope.ratingValue == 1)
            {
                $scope.oneStar = true;
            }

        });
    }

    $scope.storeRating = function (ratingValue)
    {
        if (ratingValue == 5)
        {
            $scope.oneStar = true;
            $scope.twoStar = true;
            $scope.threeStar = true;
            $scope.fourStar = true;
            $scope.fiveStar = true;
        }
        else if (ratingValue == 4)
        {
            $scope.oneStar = true;
            $scope.twoStar = true;
            $scope.threeStar = true;
            $scope.fourStar = true;
        }
        else if (ratingValue == 3)
        {
            $scope.oneStar = true;
            $scope.twoStar = true;
            $scope.threeStar = true;
        }
        else if (ratingValue == 2)
        {
            $scope.oneStar = true;
            $scope.twoStar = true;
        }
        else if (ratingValue == 1)
        {
            $scope.oneStar = true;
        }
        $scope.ratingArray = {
            userId: $window.sessionStorage["userId"],
            songId: $window.sessionStorage["songIndex"],
            rating: ratingValue
        }

        $http.put("api/storeRating", $scope.ratingArray).success(function (data) {
            $scope.apply();
        });
    }

    $scope.listSongById();
});

//Artists
app.controller('artistsPageController', function ($scope, $http, $window) {
    $scope.artistArray = [];

    $scope.listArtists = function ()
    {
        $http.get("api/listArtists").success(function (data) {
            $scope.artistArray = data;
            $scope.apply();
        });
    }

    $scope.showSongs = function (idx)
    {
        $window.sessionStorage["artistName"] = $scope.artistArray[idx]["artistName"];
        window.location = "#/artistSongs";
    }

    $scope.listArtists();
});

app.controller('artistSongsController', function ($scope, $http, $window) {
    $scope.artistSongsArray = [];
    $scope.showArtistSongs = function ()
    {
        $http.get("api/showArtistSongs/" + $window.sessionStorage["artistName"]).success(function (data) {
            $scope.artistSongsArray = data;
            $scope.apply();
        });
    }
    $scope.songDetails = function (idx)
    {
        $window.sessionStorage["songIndex"] = $scope.artistSongsArray[idx].sNo;
        window.location = "#/songDetails";
    }
    $scope.showArtistSongs();
});

//Lists
app.controller('listsPageController', function ($scope, $http, $window) {
    $scope.listArray = [];

    $scope.showLists = function ()
    {
        $http.get("api/showLists").success(function (data) {
            $scope.listArray = data;
            $scope.apply();
        });
    }

    $scope.goToListItems = function (idx)
    {
        $window.sessionStorage["listId"] = $scope.listArray[idx]["listId"];
        window.location = "#/listItems";
    }

    $scope.createList = function ()
    {
        window.location = "#/createList";
    }

    $scope.showLists();
});

app.controller('listItemsController', function ($scope, $http, $window) {
    $scope.listItemsArray = [];
    $scope.sNo = [];
    $scope.goToListItems = function ()
    {
        $http.get("api/showListItems/" + $window.sessionStorage["listId"]).success(function (data) {
            $scope.listItemsArray = data;
            $scope.apply();
        });
    }
    $scope.songDetails = function (idx)
    {
        $window.sessionStorage["songName"] = $scope.listItemsArray[idx].listEntry;
        $http.get("api/getSNo/" + $window.sessionStorage["songName"]).success(function (data) {
            $scope.sNo = data;
            $window.sessionStorage["songIndex"] = $scope.sNo[0].sNo;
            window.location = "#/songDetails";
        });
    }

    $scope.goToListItems();

});

app.controller('createListController', function ($scope, $http, $window) {
    $scope.listName = "";
    $scope.entry1 = "";
    $scope.entry2 = "";
    $scope.entry3 = "";
    $scope.entry4 = "";
    $scope.entry5 = "";
    $scope.entry6 = "";
    $scope.entry7 = "";
    $scope.entry8 = "";
    $scope.entry9 = "";
    $scope.entry10 = "";
    $scope.entries = [];

    $scope.addList = function ()
    {
        $scope.listNameArray = {
            listName: $scope.listName,
            userId: $window.sessionStorage["userId"]
        };
        $http.put("api/addListName", $scope.listNameArray).success(function (data) {
            $scope.listName = "";
            $window.sessionStorage["listName"] = data["listName"];
        });

        $scope.entries.push($scope.entry1);
        $scope.entries.push($scope.entry2);
        $scope.entries.push($scope.entry3);
        $scope.entries.push($scope.entry4);
        $scope.entries.push($scope.entry5);
        $scope.entries.push($scope.entry6);
        $scope.entries.push($scope.entry7);
        $scope.entries.push($scope.entry8);
        $scope.entries.push($scope.entry9);
        $scope.entries.push($scope.entry10);

        $http.get("api/getListId/" + $window.sessionStorage["listName"]).success(function (data) {
            for (i = 1; i < 11; i++) {
                $scope.listEntries = {
                    listId: data[0].listId,
                    listEntry: $scope.entries[i - 1],
                    listPosition: i
                };
                $http.put("api/addListEntries", $scope.listEntries).success(function (data) {

                });
            }
            $scope.entry1 = "";
            $scope.entry2 = "";
            $scope.entry3 = "";
            $scope.entry4 = "";
            $scope.entry5 = "";
            $scope.entry6 = "";
            $scope.entry7 = "";
            $scope.entry8 = "";
            $scope.entry9 = "";
            $scope.entry10 = "";
            $scope.apply();
        });

    }


});

//Quiz
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
        if (num == 1)
        {
            if ($scope.entries[$scope.qNo].answer === $scope.entries[$scope.qNo].option1)
            {
                $scope.op1 = true;
                $scope.score++;
            }
            else
            {
                window.alert("Correct answer : " + $scope.entries[$scope.qNo].answer);
            }
        }
        else if (num == 2)
        {
            if ($scope.entries[$scope.qNo].answer === $scope.entries[$scope.qNo].option2)
            {
                $scope.op2 = true;
                $scope.score++;
            }
            else
            {
                window.alert("Correct answer : " + $scope.entries[$scope.qNo].answer);
            }
        }
        else if (num == 3)
        {
            if ($scope.entries[$scope.qNo].answer === $scope.entries[$scope.qNo].option3)
            {
                $scope.op3 = true;
                $scope.score++;
            }
            else
            {
                window.alert("Correct answer : " + $scope.entries[$scope.qNo].answer);
            }
        }
        else if (num == 4)
        {
            if ($scope.entries[$scope.qNo].answer === $scope.entries[$scope.qNo].option4)
            {
                $scope.op4 = true;
                $scope.score++;
            }
            else
            {
                window.alert("Correct answer : " + $scope.entries[$scope.qNo].answer);
            }
        }
        $scope.qNo++;

        if ($scope.qNo == 10)
        {
            $window.sessionStorage["score"] = $scope.score;
            window.location = "#/quizResult";
        }

    }

    $scope.listQuestions();
});

app.controller('quizResultController', function ($scope, $http, $window) {
    $scope.score = $window.sessionStorage["score"];
    $scope.goBack = function () {
        window.location = "#/quizPage";
    }
    $scope.goToMenu = function () {
        window.location = "#/menuPage";
    }
});

//Trivia
app.controller('triviaPageController', function ($scope, $http, $window) {
    $scope.triviaArray = [];
    $scope.newTrivia = "";
    $scope.listTrivia = function ()
    {
        $scope.newTrivia = "";
        $http.get("api/listTrivia").success(function (data) {
            $scope.triviaArray = data;
            $scope.apply();
        });
    }

    $scope.addTrivia = function ()
    {
        $scope.triviaArray = {
            newTrivia: $scope.newTrivia
        };
        $http.put("api/addTrivia", $scope.triviaArray).success(function (data) {
            if (data != false)
                alert("Trivia added successfully!");
            $scope.listTrivia();
            $scope.apply();
        });
    }

    $scope.listTrivia();
});


//window.alert(JSON.stringify(data));
//$window.sessionStorage["template_index"] = index;
//window.sessionStorage.clear();
//window.location = "index.html";