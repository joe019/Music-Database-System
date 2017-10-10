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
                <th>Rating</th>
                <td>{{details[0].rating}}</td>
            </tr>
            <tr>
                <th>Your Rating</th>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="col-sm-3"></div>
</div>