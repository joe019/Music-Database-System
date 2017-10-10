<style>
    #question{
        background-color: #c0b283;
        border-radius:6px;
        padding: 10px;
    }
    #o1,#o2,#o3,#o4{
        background-color: #dcd0c0;
        padding: 10px;
        margin-top: 10px;
        border-radius:6px;
        cursor: pointer;
    }
    .col-sm-11,.col-sm-1,.col-sm-6{
        padding-left: 0px;
        padding-right: 0px;
    }
</style>

<div ng-controller="quizPageController">
    <div style=" height: 16vh"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="col-sm-12" id="question">{{qNo+1}}.{{entries[qNo].question}}</div>
        <div class="col-sm-6">
            <div class=" col-sm-11" id="o1" ng-click="clicked(1)">{{entries[qNo].option1}}</div><div class=" col-sm-1"></div>
        </div>
        <div class="col-sm-6">
            <div class=" col-sm-1"></div><div class=" col-sm-11" id="o2" ng-click="clicked(2)">{{entries[qNo].option2}}</div>
        </div>
        <div class="col-sm-6">
            <div class=" col-sm-11" id="o3" ng-click="clicked(3)">{{entries[qNo].option3}}</div><div class=" col-sm-1"></div>
        </div>
        <div class="col-sm-6">
            <div class=" col-sm-1"></div><div class=" col-sm-11" id="o4" ng-click="clicked(4)">{{entries[qNo].option4}}</div>
        </div>
    </div>
</div>