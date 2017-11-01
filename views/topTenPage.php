<div ng-controller="topTenPageController">
    <div style=" height: 16vh"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <div class=" col-sm-12" style="padding: 14px; font-size : 19px; border-bottom: 1px solid grey;
                     background-color: #bbb; text-align: center">
                    Top Rated Songs
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <div class=" col-sm-12" style="padding: 14px; font-size : 19px; border-bottom: 1px solid grey;
                     background-color: #ddd;" ng-repeat="songs in topTenArray">
                    <div class=" col-sm-10">
                        {{$index + 1}}. {{songs.songTitle}} ({{songs.releaseYear}})
                    </div>
                    <div class=" col-sm-2">
                        {{songs.rating}}/5 ({{songs.noOfVotes}})
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>
