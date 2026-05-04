<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">


    <style>
        body {

            font-family: system-ui, sans-serif;
            margin: 0;
            padding: 0;
        }


        .auth-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px; 
        }


        .auth-card {
            width: 90%;          
            max-width: 400px;    

            backdrop-filter: blur(5px);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,.1);
            box-sizing: border-box; 
        }


        .auth-card h5 {
            font-size: 1.2rem;   
            margin-bottom: 15px;
        }


        .auth-card input.form-control {
            padding: 10px;
            font-size: 1rem;     
        }

        .have-account{
            text-decoration: none;
            position: relative;
            display: block;
            text-align: center;
            color: #000000;
            top: 10px;
            margin-bottom: 10px;
        }

        .fa-user-plus{
            color: #000000;
            position: relative;
            top: -39px;
            left: 43px;
            font-size: 20px;
        }

        .fa-arrow-right-to-bracket{
            position: relative;
            top: -30px;
            left: 90px;
            color: #ffffff;
            transition: color 0.3s ease;
        }

        .fa-arrow-right-to-bracket:hover{
            color: #000000;
    }
    </style>
</head>
<body>


<div class="auth-container">
    <form action="{{ route('register.store') }}" method="POST" class="auth-card">
        @csrf


        <h5 class="text-center mb-3">Create Account</h5>



        <div class="mb-2">
            <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>


        <div class="mb-2">
            <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>


        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Admin Key (optional)</label>
            <input type="text" name="admin_key" class="form-control">
        </div>


        <button type="submit" class="btn btn-dark w-100">
            Register
        </button>


        <a class="have-account" href="{{ route('login') }}" class="d-block text-center mt-3">
            Already have an account? Login
        </a>
    </form>
</div>


</body>
</html>
