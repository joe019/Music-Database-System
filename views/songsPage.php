<style>
    #custom-search-input{
        width: 33.4%;
        padding: 3px;
        border: solid 1px black;
        border-radius: 6px;
        background-color: #fff;
    }

    #custom-search-input input{
        border: 0;
        box-shadow: none;
    }

    #custom-search-input button{
        margin: 2px 0 0 0;
        background: none;
        box-shadow: none;
        border: 0;
        color: #666666;
        padding: 0 8px 0 10px;
        border-left: solid 1px black;
    }

    #custom-search-input .glyphicon-search{
        font-size: 23px;
    }    
</style>

<style type="text/css">
    .form-style-9{
        max-width: 450px;
        background: #FAFAFA;
        padding: 30px;
        margin: 50px auto;
        box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
        border-radius: 10px;
        border: 2px solid #373737;
        width: 50vw;
    }
    .form-style-9 ul{
        padding:0;
        margin:0;
        list-style:none;
    }
    .form-style-9 ul li{
        display: block;
        margin-bottom: 10px;
        min-height: 35px;
    }
    .form-style-9 ul li  .field-style{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        padding: 8px;
        outline: none;
        border: 1px solid #B0CFE0;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;

    }.form-style-9 ul li  .field-style:focus{
        box-shadow: 0 0 5px #B0CFE0;
        border:1px solid #B0CFE0;
    }
    .form-style-9 ul li .field-full{
        width: 100%;
    }
    .form-style-9 ul li input[type="button"],
    .form-style-9 ul li input[type="submit"] {
        -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
        -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
        box-shadow: inset 0px 1px 0px 0px #3985B1;
        background-color: #216288;
        border: 1px solid #17445E;
        display: inline-block;
        cursor: pointer;
        color: #FFFFFF;
        padding: 8px 18px;
        text-decoration: none;
        font: 12px Arial, Helvetica, sans-serif;
    }
    .form-style-9 ul li input[type="button"]:hover,
    .form-style-9 ul li input[type="submit"]:hover {
        background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
        background-color: #28739E;
    }
</style>

<div ng-controller="songsPageController">
    <div style=" height: 11vh"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div style="padding: 14px; font-size : 19px; border-bottom: 1px solid grey;background-color: #ddd; 
                     cursor:pointer; " ng-repeat="songs in songsArray" ng-click="songDetails($index)">
                    {{songs.songTitle}} ({{songs.releaseYear}})
                </div>
            </div>
            <div class="col-sm-5">
                <div id="custom-search-input" style=" position: fixed">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg"  placeholder="Search a song"
                               ng-model="searchSong" ng-change="nameChange()"/>
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="button">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <div style=" height: 11vh"></div>
                <form class="form-style-9" style=" position: fixed">
                    <ul>
                        <li style=" font-size: 20px">Add a new song!</li>
                        <li>
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="Title" ng-model="songTitle">
                        </li>
                        <li>
                            <input type="text" name="field3" class="field-style field-full align-none" 
                                   placeholder="Year released" ng-model="releaseYear"/>
                        </li>
                        <li>
                            <input type="text" name="field3" class="field-style field-full align-none" 
                                   placeholder="Album" ng-model="album"/>
                        </li>
                        <li>
                            <input type="text" name="field3" class="field-style field-full align-none" 
                                   placeholder="Artist" ng-model="artist"/>
                        </li>
                        <li>
                            <input type="text" name="field3" class="field-style field-full align-none" 
                                   placeholder="Genre" ng-model="genre"/>
                        </li>
                        <li>
                            <input type="submit" value="Submit" ng-click="addSong()" style=" font-size: 15px"/>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>

