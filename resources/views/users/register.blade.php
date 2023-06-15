<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/login/css/style.css">
</head>

<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">REGISTER</h3>

                    <form action="{{route('create-new-user')}}" class="login-form" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="FirstName" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="lastName" placeholder="Second Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control rounded-left" name="email" placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control rounded-left" name="phoneNumber" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>


