<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css') }}" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap') }}" rel="stylesheet" />
    <!-- MDB -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/utills.css') }}"> -->
    <title>Sign Up | RentPortal</title>
    <style>
        .imgbox{
            display: block;
            color: gray;
            background: #80808047;
            border-radius: 20px;
            line-height: 1.5;
            padding: 8px 0;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert');
    @include('layout.err');

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('logo.jpg') }}" alt="IMG" height="100%">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('signupUser') }}" enctype="multipart/form-data">
                    @csrf
                    <span class="login100-form-title">
                        Create account - Sign up
                    </span>
                    {{-- firstname input --}}
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="firstname" placeholder="First Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa-solid fa-book" aria-hidden="true"></i>
                        </span>
                    </div>
                    {{-- lastname input --}}
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="lastname" placeholder="Last Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa-solid fa-book" aria-hidden="true"></i>
                        </span>
                    </div>
                    {{-- phone input --}}
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="tel" name="phone" placeholder="Phone">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa-solid fa-address-book" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    {{-- email input --}}
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    {{-- password input --}}
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password_confirmation" placeholder="Re-enter Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>


                    {{-- avatar  --}}
                    <div class="imgbox validate-input border-2">
                        <input class="" style="margin-left: 5rem !important;" type="file" name="avatar" placeholder="Profile">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa-solid fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Sign Up
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ route('login') }}">
                            Login here
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <script src="{{ asset('js/main.js') }}"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>