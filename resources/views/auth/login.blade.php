<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Galery Sekolah</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/assets/theme/images/logosekolah.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="/assets/assets/theme/css/style.css" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
            Preloader start
            ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
        ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#">
                                    <h4>Login</h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="POST" action="{{ url('/login') }}">
                                    @csrf
                                    @if ($errors->has('both'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('both') }}
                                        </div>
                                    @elseif ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @elseif ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                            <i class="fa fa-eye" id="togglePassword"></i>
                                        </div>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
    
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    
    <script src="/assets/assets/theme/plugins/common/common.min.js"></script>
    <script src="/assets/assets/theme/js/custom.min.js"></script>
    <script src="/assets/assets/theme/js/settings.js"></script>
    <script src="/assets/assets/theme/js/gleek.js"></script>
    <script src="/assets/assets/theme/js/styleSwitcher.js"></script>
</body>

</html>
