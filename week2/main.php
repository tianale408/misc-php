<!DOCTYPE html>
<html>
    <head>
        <title>A Swimming Pool Calculator</title>
        <style>
            body {
                background-color: aquamarine;
                margin-left: auto;
                font-family: monospace;
                color: purple;
            }

            .container{
                width: 400px;
                margin: 0 auto;
                padding: 3%;
                background-color: #66ffff;
            }


            .right {
                text-align: right;
            }
            .center {
                display: block;
                margin-left: 70%;
                margin-top: 10%;
                cursor: pointer;

            }
            

        </style>
    </head>
    <body>
    <div class="container">
    <h1>Swimming Pool Calculator</h1>

    <iframe src="https://giphy.com/embed/l4FGtHdWM8m1hXI76" width="380" height="250" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/summer-summer2017-aarati-l4FGtHdWM8m1hXI76"></a></p>
    <p>How much water will it take to fill an above-ground pool?</p>
        <form method = "get" action = "calculate.php">
            <table>
                <tr><td class="right">Enter The Diameter:</td><td><input type="text" name="diameter" width="100"></td></tr>
                <tr><td class="right">Enter The Depth:</td><td><input type="text" name="depth" width="100"></td></tr>
                <tr><td class="center"><input type="submit" value="Submit"</td></tr>
            </table>
        </form>
    </div>
    </body>
</html>