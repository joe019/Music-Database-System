<style>
    #t2,#t3{
        padding: 30px; 
        margin-top: 5px; 
        cursor: pointer
    }
</style>

<div ng-controller="quizResultController">
    <div style=" height: 28vh"></div>
    <div class=" col-sm-4"></div>
    <div class=" col-sm-4" style=" color: #fff; text-align: center; font-size: 25px;">
        <div style="background-color: #96858f; padding: 30px;">Your Score : {{score}}/10</div>
        <div style="background-color: #6d7993;" id="t2" ng-click="goBack()">Play another quiz!</div>
        <div style="background-color: #9099a2;" id="t3" ng-click="goToMenu()">Back to Menu page</div>
    </div>
    <div class=" col-sm-4"></div>
</div>