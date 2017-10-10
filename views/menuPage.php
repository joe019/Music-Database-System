<style>
    .row{
        height: 44vh;
        padding-top: 40px;
    }

    .tile {  
        width: 100%;
        height: 34vh;
        display: inline-block;
        box-sizing: border-box;
        background: #fff;		
        padding: 20px;
        margin-bottom: 30px;
        cursor: pointer;
    }

    .title {
        margin-top: 0px;
        font-family: Miltonian;
        font-weight: 900;
        text-align: center;
        font-size: 80px;
    }

    #single{
        padding-top: 45px;
    }

    .purple, .blue, .red, .orange, .green, .darkPurple {
        color: #fff;
    }

    .darkPurple {
        background: #643EBF;
    }
    .darkPurple:hover {
        background: #5133AB;
    }		

    .red {
        background: #BF1E4B;
    }

    .red:hover {
        background: #AC193D;
    }		

    .green {
        background: #00A600;
    }

    .green:hover {
        background: #008A00;
    }		

    .blue {
        background: #2E8DEF;
    }

    .blue:hover {
        background: #2672EC;
    }	

    .orange {
        background: #DC572E;
    }

    .orange:hover {
        background: #D24726;
    }	

    .purple {
        background: #A700AE;
    }

    .purple:hover {
        background: #8C0095;
    }	
</style>

<div ng-controller="menuPageController">
    <div class="container">
        <div style=" height: 11vh"></div>
        <div class="row">
            <div class="col-sm-4" ng-click="goToTopTen()">
                <div class="tile darkPurple">
                    <h3 class="title">MDbS Top 10</h3>
                </div>
            </div>
            <div class="col-sm-4" ng-click="goToSongs()">
                <div class="tile red">
                    <h3 class="title" id="single">Songs</h3>
                </div>
            </div>
            <div class="col-sm-4" ng-click="goToArtists()">
                <div class="tile orange">
                    <h3 class="title" id="single">Artists</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4" ng-click="goToLists()">
                <div class="tile green">
                    <h3 class="title" id="single">Lists</h3>
                </div>
            </div>
            <div class="col-sm-4" ng-click="goToQuiz()">
                <div class="tile blue">
                    <h3 class="title" id="single">Quiz</h3>
                </div>
            </div>  
            <div class="col-sm-4" ng-click="goToTrivia()">
                <div class="tile purple">
                    <h3 class="title" id="single">Trivia</h3>
                </div>
            </div> 
        </div>
    </div>
</div>