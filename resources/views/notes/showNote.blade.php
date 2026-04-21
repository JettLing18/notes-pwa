<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Note</title>
    <style>
        body{
            background-color: #b5f7f8;
       
        }
        

        .btn{
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 10px;
            background-color: #56a5fe;
            position: absolute;
            top: 20px;
            left: 18px;
        }

        .backbtn{
            position: relative;
            width: 95%;
            height: 80px;
            left: 10px;
            margin-top: 20px;
            border-radius: 12px;
            background-color: rgba(242, 240, 240, 0.55);
             backdrop-filter: blur(5px);
             box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .h4{
            font-size: 17px;
            position: absolute;
            left: 97px;
            top: 5px;
        }

        .p{
            font-size: 14px;
            position: absolute;
            left: 170px;
            top: 35px;
            text-transform: uppercase;
        }

    </style>
</head>
<body>
    <div class="backbtn">
        <h4 class="h4">JOSEPH LINDELL N. TAGSIP, JR.</h4>
        <p class="p">Section 3-G</p>
        <a class="btn" href="{{route('login')}}">BACK</a>
    </div>
</body>
</html>