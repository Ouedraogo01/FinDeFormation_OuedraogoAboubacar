<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }

        section{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            
            
            background-image: url('../image/hotel1.jpg');
            background-position: center;
            background-size: cover;
            
        }
        .form-box{
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2{
            font-size: 2em;
            color: #fff;
            text-align: center;
        }
        .inputbox{
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #fff;
        }
        .inputbox label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }
        input:focus ~ label,
        input:valid ~ label{
            top: -5px
        }
        .inputbox input{
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
        }
        .inputbox i{
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }

        .forget{
            margin: -15px 0 15px;
            font-size: .9em;
            color: #fff;
            display: flex;
            justify-content: center;
        }

        
        
        .forget label a{
            color: #fff;
            text-decoration: none;
        }
        .forget label a:hover{
            text-decoration: underline;
        }
        button{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <h2>Administration Login</h2>

                    <div class="inputbox">
                        <i class="far fa-envelope" style="position: absolute; right: 8px; color: #fff; font-size: 1.2em; top: 20px;"></i>
                        <input type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <div class="inputbox">
                        <i class="fas fa-lock" style="position: absolute; right: 8px; color: #fff; font-size: 1.2em; top: 20px;"></i>
                        <input type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <label for="password">{{ __('Password') }}</label>
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <div class="forget">
                        <label for="remember"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" style="color: #fff; text-decoration: none">{{ __('Forgot Your Password?') }}</a>
                        @endif
                    </div>

                    <button type="submit">{{ __('Login') }}</button>
                </form>
            </div>
        </div>
    </section>

    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
</body>
</html>