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

<div ng-controller="createListController">
    <div style=" height: 11vh"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <form class="form-style-9" style=" position: fixed">
                    <ul>
                        <li style=" font-size: 20px">Add a new list!</li>
                        <li>
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="Name" ng-model="listName">
                        </li>
                        
                        <li style=" float: left">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="1" ng-model="entry1">
                        </li>
                        <li style=" float: right">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="2" ng-model="entry2">
                        </li>
                        
                        <li style=" float: left">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="3" ng-model="entry3">
                        </li>
                        <li style=" float: right">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="4" ng-model="entry4">
                        </li>
                        
                        <li style=" float: left">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="5" ng-model="entry5">
                        </li>
                        <li style=" float: right">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="6" ng-model="entry6">
                        </li>
                        
                        <li style=" float: left">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="7" ng-model="entry7">
                        </li>
                        <li style=" float: right">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="8" ng-model="entry8">
                        </li>
                        
                        <li style=" float: left">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="9" ng-model="entry9">
                        </li>
                        <li style=" float: right">
                            <input type="text" name="field1" class="field-style field-full align-none" 
                                   placeholder="10" ng-model="entry10">
                        </li>
  
                        <li>
                            <input type="submit" value="Submit" ng-click="addList()" style=" font-size: 15px"/>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-sm-3"></div>  
        </div>
    </div>
</div>