<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <style>
        body{

            font-family: system-ui, sans-serif;
            justify-content: center;
            align-items: center;
            height: 100vh;
            display: flex;
            backdrop-filter: blur(5px);
            background: linear-gradient(135deg, #b7b7b7, #616161);
            
        }

        .login-container{

            backdrop-filter: blur(5px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
            padding: 30px;
            border-radius: 12px;
            max-width:320px;
            width: 70%;
        }

        .text-center{
            font-family: 'Poppins', sans-serif;
            text-align: center;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            font-size: 30px;
            height: 100px;
            margin-top: -10px;
            margin-bottom: -40px;
        }

        .input-group{
            position: relative;
            margin-bottom: 20px;
        }

        .input-group .label{
            position: absolute;
            top: -7px;
            left: 27px;
            color: #000000;
            font-size: 18px;
            font-weight: 600;
        }

        .input-group .input-field{
            width: 240px;
            padding: 10px 2px;
            padding-left: 35px; /* 👈 ADD THIS */
            border: 1px solid #ccc;
            background-color: #f6f0f0;
            border-radius: 15px;
            margin-top: 15px;    
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .input-group .input-field:focus{
            border-color: #353535;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            outline: none;
        }

        .btn{
            text-align: center;
            background-color: #000000;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 16px;
            width: 250px;
            position: relative;
            left: 14px;
            outline: none;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #fffafa;
            font-weight: 600;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn:hover{
            background-color: #feffff;
            box-shadow: 0 0 10px rgba(192, 192, 192, 0.7);
            color: #000000;
        }

        .fa-arrow-right-to-bracket{
            position: relative;
            top: 0.3px;
            left: -145px;
            color: #ffffff;
            transition: color 0.3s ease;
        }

        .btn:hover + .fa-arrow-right-to-bracket{
            color: #000000;
        }

        .create-account{
            display: block;
            position: relative;
            top: 15px;
            text-align: center;
            text-decoration: none;
            color: #000000;
            font-weight: 600;
        }

        .fa-user, .fa-key{
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-10%);
            color: #000000;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2 class ="text-center">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <input class="input-field" id="email" type="email" name="email" placeholder="Email" required  >
            </div>

            <div class="input-group">
                <i class="fa-solid fa-key"></i>
                <input class="input-field" id="password" type="password" name="password" placeholder="Password" required >
            </div>

            <button class="btn" type="submit">Login</button>

            <a class="create-account" href="{{ route('register') }}">Create an Account</a>
        </form>
</body>
</html>