<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }


        #notfound {
            position: relative;
            height: 100vh;
            background: #252424;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 767px;
            width: 100%;
            line-height: 1.4;
            padding: 110px 40px;
            text-align: center;
            /* background: #fff; */
            /* -webkit-box-shadow: 0 15px 15px -10px rgba(0, 0, 0, 0.1); */
            /* box-shadow: 0 15px 15px -10px rgba(0, 0, 0, 0.1); */
        }

        .notfound .notfound-404 {
            position: relative;
            height: 180px;
        }

        .notfound .notfound-404 h1 {
            font-family: 'Roboto', sans-serif;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 165px;
            font-weight: 700;
            margin: 0px;
            color: #fffdfd;
            text-transform: uppercase;
        }

        .notfound .notfound-404 h1>span {
            color: #ff0000;
        }

        .notfound h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 22px;
            font-weight: 400;
            text-transform: uppercase;
            color: #ffffff;
            margin-top: 0px;
            margin-bottom: 25px;
        }

        .btn-back {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 8px 32px;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-family: 'Roboto', sans-serif;
            transition-duration: 0.4s;
        }

        .btn-back:hover {
            background-color: rgb(158, 0, 0);
        }


        @media only screen and (max-width: 767px) {
            .notfound h2 {
                font-size: 18px;
            }
        }

        @media only screen and (max-width: 480px) {
            .notfound .notfound-404 h1 {
                font-size: 141px;
            }
        }
    </style>
</head>

<body>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>4<span>0</span>4</h1>
            </div>
            <h2>the page you requested could not found</h2>
            <a class="btn-back" href="javascript:history.back()">Return Back</a>
        </div>
    </div>
</body>

</html>