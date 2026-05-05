<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <style>
        body{
            font-family: system-ui, sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #b7b7b7, #616161);
        }

        .main-wrapper{
            width: 350px;
            padding: 30px;
        }

        .weather-card,
        .login-container{
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(8px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            border-radius: 14px;
        }

        .weather-card{
            text-align: center;
            padding: 12px;
            margin-bottom: 12px;
        }

        .weather-card h5{
            margin: 0 0 8px;
            font-size: 18px;
            font-weight: 500;
        }

        .weather-temp{
            font-size: 28px;
            font-weight: 700;
        }

        .weather-desc{
            font-size: 14px;
            text-transform: capitalize;
        }

        .login-container{
            padding: 20px 25px;
        }

        .text-center{
            text-align: center;
            font-weight: 700;
            font-size: 35px;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .input-group{
            position: relative;
            margin-bottom: 18px;
        }

        .input-group label{
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #333;
        }

        .input-row{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .input-row i{
            width: 22px;
            text-align: center;
            color: #111;
        }

        .input-field{
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #e8f0fe;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
        }

        .btn{
            width: 100%;
            background-color: #212529;
            color: white;
            padding: 11px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 700;
            margin-top: 5px;
        }

        .btn:hover{
            background-color: #000;
        }

        .create-account{
            display: block;
            margin-top: 18px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">

        <div class="weather-card" id="weather">
            @if(isset($weather))
                <h5>{{ $weather['city'] }}</h5>
                <div class="weather-temp">{{ $weather['temp'] }}°C</div>
                <div class="weather-desc">{{ $weather['description'] }}</div>
            @else
                <div>Loading weather...</div>
            @endif
        </div>

        <div class="login-container">
            <h2 class="text-center">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-group">
                    <label>Email</label>
                    <div class="input-row">
                        <i class="fa-solid fa-envelope"></i>
                        <input class="input-field" id="email" type="email" name="email" placeholder="admin2@email.com" required>
                    </div>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <div class="input-row">
                        <i class="fa-solid fa-lock"></i>
                        <input class="input-field" id="password" type="password" name="password" placeholder="••••••" required>
                    </div>
                </div>

                <button class="btn" type="submit">Login</button>

                <a class="create-account" href="{{ route('register') }}">Create an Account</a>
            </form>
        </div>

    </div>

    <script>
        async function loadWeather() {
            try {
                const res = await fetch('/weather');
                const data = await res.json();

                document.getElementById('weather').innerHTML = `
                    <h5>${data.name}</h5>
                    <div class="weather-temp">${data.main.temp}°C</div>
                    <div class="weather-desc">${data.weather[0].description}</div>
                `;
            } catch (error) {
                console.error("Weather load failed", error);
            }
        }

        loadWeather();
        setInterval(loadWeather, 60000);
    </script>

</body>
</html>