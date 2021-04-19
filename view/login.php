<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Maoni</title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maoni</title>
    <link rel="icon" type="image/x-icon" href="../img/ICOMAONI.ico" />
    <link href="../img/ICOMAONI.png" rel="apple-touch-icon">
    <!-- Custom fonts for this template-->
    <link href="../bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="user_card">
                <div class="sidebar-brand d-flex align-items-center justify-content-center mb-4">
                    <div class="sidebar-brand-icon">
                        <img src="../bootstrap/img/maoni_icon.png" style="height: 45px; width: 45px" alt="Logo">
                    </div>
                    <div class="mx-3" style="color: #fff; font-size: 1rem; font-weight: 800;">MAONI</div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="email" type="email" name="" id="email" class="form-control input_user" value="" placeholder="email">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input name="password" type="password" name="" id="password" class="form-control input_pass" value="" placeholder="password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" style="color: #fff;" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <input type="submit" value="Login" style="color: #fff;" name="" onclick="Login()" class="btn btn-lg btn-primary shadow-sm">
                        </div>
                    </form>
                </div>

                <div>
                    <div class="d-flex justify-content-center links" style="color: #fff;">
                        Don't have an account? <a style="color: #0E1B51;" href="#" class="ml-2">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a style="color: #0E1B51;" href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function Login() {
            $email=urlencode(('#email').val());
            $.ajax({
                type: "POST",
                url: '../../Maoni_Api/controller/login.php',
                dataType: 'json',
                data: {
                    email: $email,
                    password: $("#password").val()
                },
                error: function(result) {
                    alert(result.responseText);
                },
                success: function(result) {
                    if (result['status'] == true) {
                        alert("Successfully!");
                        window.location.href = '/view/';
                    } else {
                        alert(result['message']);
                    }
                }
            });
        }
    </script>
</body>

</html>