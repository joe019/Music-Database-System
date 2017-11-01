<style>
    .tile {  
        width: 70%;
        height: 24vh;
        display: inline-block;
        box-sizing: border-box;
        background: #fff;		
        padding: 5px;
        cursor: pointer;
    }

    .blue {
        background: #2E8DEF;
    }

    .blue:hover {
        background: #2672EC;
    }	
</style>

<div ng-controller="listsPageController">
    <div style=" height: 11vh"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <div style="padding: 14px; font-size : 20px; border-bottom: 1px solid grey;background-color: #ddd; cursor: pointer" 
                     ng-repeat="list in listArray" ng-click="goToListItems($index)">
                    {{list.listName}}
                </div>
            </div>

            <div class="col-sm-3" ng-click="createList()">
                <div class="tile blue" style="text-align: center; font-size: 30px; font-family: sans-serif">
                    Add<br>a new<br>list!
                </div>
            </div>  

        </div>
    </div>
</div>