<style>
    table{
        border-collapse:separate;
        border:1px solid black;
        border-radius:6px;
        border-top: none;
    }
    th{
        padding: 20px;
        font-size: 20px;
        background-color: #dcd0c0;
        border-top : 1px solid black;
        font-family: monospace; 
    }
    td{
        padding: 20px;
        background-color: #f4f4f4;
        border-top: 1px solid black;
        width: 65%;
        font-size: 20px;
        font-family: sans-serif; 
    }
    #songName{
        font-family: Georgia;
        text-align: center;
        background-color: #c0b283;
        border-radius:6px 6px 0px 0px; 
    }
</style>

<style>
    #star1,#star2,#star3,#star4,#star5{
        cursor: pointer;
    }
</style>

<div ng-controller="songDetailsController">
    <div style=" height: 16vh"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <table>
            <tr>
                <th colspan="2" id="songName">{{details[0].songTitle}}</th>
            </tr>
            <tr>
                <th>Year Released</th>
                <td>{{details[0].releaseYear}}</td>
            </tr>
            <tr>
                <th>Album</th>
                <td>{{details[0].album}}</td>
            </tr>
            <tr>
                <th>Artist</th>
                <td>{{details[0].artist}}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{details[0].genre}}</td>
            </tr>
            <tr>
                <th>MDbS Rating</th>
                <td>{{details[0].rating}}</td>
            </tr>
            <tr>
                <th>Your Rating</th>
                <td>
                    <i class="fa fa-star-o" id="star1" ng-show="!oneStar" ng-click="storeRating(1)"></i>
                    <i class="fa fa-star" ng-show="oneStar"></i>
                    <i class="fa fa-star-o" id="star2" ng-show="!twoStar" ng-click="storeRating(2)"></i>
                    <i class="fa fa-star" ng-show="twoStar"></i>                    
                    <i class="fa fa-star-o" id="star3" ng-show="!threeStar" ng-click="storeRating(3)"></i>
                    <i class="fa fa-star" ng-show="threeStar"></i>
                    <i class="fa fa-star-o" id="star4" ng-show="!fourStar" ng-click="storeRating(4)"></i>
                    <i class="fa fa-star" ng-show="fourStar"></i>
                    <i class="fa fa-star-o" id="star5" ng-show="!fiveStar" ng-click="storeRating(5)"></i>
                    <i class="fa fa-star" ng-show="fiveStar"></i>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-sm-3"></div>
</div>