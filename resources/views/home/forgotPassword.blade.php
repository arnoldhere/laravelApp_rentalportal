<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css') }}"
        rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap') }}"
        rel="stylesheet" />
    <!-- MDB -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/utills.css') }}"> --}}
    <title>Set password | RentPortal</title>
</head>

<body>

    @include('sweetalert::alert')
    @include('layout.err')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 ">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('frgtPwdimg.png') }}" alt="IMG" width="100%" height="auto">
                </div>
                <form class="login100-form validate-form" 8
                    <span class="login100-form-title">
                        Set Your Password
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="email" placeholder="Your Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <!-- <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" placeholder="New Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password_confirmation"
                            placeholder="Re-enter New Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div> -->

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Next
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>
