<?php
@session_start();
@session_destroy();
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>هيئة التفتيش - تعديل كلمة السر </title>
    <!-- Cairo Font -->
    <script type="application/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap-->




    <link href="{{ asset('frontend/styles/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('frontend/styles/login-styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/login-responsive.css') }}" />
</head>

<body>

    <div class="container pt-5 pb-5">
        <div class="row col-12 pt-5">
            <div class=" col-md-4 col-sm-2">
                <img src="{{ asset('frontend/images/logo.svg') }}" alt="logo" class="logo">
            </div>
            <div class=" col-md-8 col-sm-12 col-12">
                <h5 class="login-h5">وزارة الداخلــــــــــــــــــية</h5>
                <p class="login-p">الادارة العامة لشئون التفتيش</p>
                <h2 class="login-h2">المطــــور</h2>
            </div>
        </div>
        <div class=" row col-12 d-flex justify-content-between">
            <div class="col-5 col-md-5 d-block reset-pass">
                <form action="{{ route('reset_password') }}" method="post">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <input type="hidden" name="firstlogin" value="{{ $firstlogin }}">
                    <input type="hidden" name="military_number" value="{{ $military_number }}">

                    <label for="username" class="login-label-2">ادخل كلمه المرور</label> <br>
                    <input type="password" name="password" id="username" class="login-input"><br>

                    <label for="username" class="login-label-2">تاكيد كلمه المرور</label> <br>
                    <input type="password" name="password_confirm" id="username" class="login-input"><br>

                    {{-- <div class="password-container">
                        <input type="password" name="password_confirm" id="username"class="login-input">
                        <label class="toggle-password" onclick="togglePasswordVisibility()">
                            <i id="toggleIcon" class="fa fa-eye"></i>
                        </label>
                    </div> --}}
                    <div class="btns  ">
                        <button class="btn1" type="submit"> ارسال </button> &nbsp; &nbsp; &nbsp;

                    </div>
                </form>
            </div>
            <div class="col-7 col-md-6">
                <img src="{{ asset('frontend/images/login.svg') }}" alt="background" class="background">
            </div>
        </div>
    </div>


    {{-- @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
            integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--     <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
     -->
        <script>
            function togglePasswordVisibility() {
                var passwordField = document.getElementById("password");
                var toggleIcon = document.getElementById("toggleIcon");

                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    toggleIcon.classList.remove("fa-eye");
                    toggleIcon.classList.add("fa-eye-slash");
                } else {
                    passwordField.type = "password";
                    toggleIcon.classList.remove("fa-eye-slash");
                    toggleIcon.classList.add("fa-eye");
                }
            }
        </script>
    @endsection --}}
</body>

</html>
