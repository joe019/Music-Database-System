<div ng-controller="triviaPageController">
    <div style=" height: 11vh"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div style="padding: 14px; font-size : 19px; border-bottom: 1px solid grey;background-color: #ddd;" 
                     ng-repeat="trivia in triviaArray">
                    {{trivia.fact}}
                </div>
            </div>
        </div>
    </div>
</div>