<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>My First Full Project</title>
    <link rel="stylesheet" href="style.css">

</head>


<body data-spy="scroll" data-target=".navbar">

    <!-- Main-NavBar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">VIRTUAL ASSISTANCE</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar-Links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class=" navbar navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">TEAM</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="signup.php">SIGN UP</a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="login-page">
        <div class="container-fluid">

            <div class="row p-3">
                <div class="col-sm-8 py-3">
                    <div class="text-center">
                        <h1 class="page-text">IT’S TIME TO
                            MAKE A CHANGE</h1>
                    </div>
                </div>
                <div class="col-sm-4 py-3 bg-info">

                    <div class="container">
                        <form action="backend.php" method="post">

                            <div class="form-group">
                                <img class="img-fluid rounded-circle mx-auto d-block" src="dummi-image.png" alt="image">

                            </div>
                            <div class="form-group">

                                <select name="Login As" class="form-control">

                                    <option>LOGIN AS</option>
                                    <option>DRIVER</option>
                                    <option>MECHANIC</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="userName" name="userName" placeholder="USER NAME">
                                <div id="userName_error">
                                </div>


                            </div>

                            <div class="form-group">

                                <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
                                <div id="password_error">
                                </div>

                            </div>

                            <div class="form-group">

                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                <div id="email_error"> </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success form-control my-button" id="login">LOGIN</button>
                            </div>

                            <div class="form-group form-check">

                                <input class="form-check-input" type="checkbox"> Remember me.

                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>


    <section id="footer">
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h3>ABOUT US</h3>
                    </div>
                    <div class="col">
                        <h3>CONTACT US</h3>
                        <p>+3584437100**</p>
                    </div>
                    <div class="col">TERMS & CONDITIONS</div>
                </div>
                <hr>
                <h3 class="text-center">COPYRIGHT RESERVED</h3>
            </div>
        </div>
    </section>
    <script src="login-validation.js"></script>

    <script>
        $(document).ready(function() {
            $("button").click(function() {
                var username, password, email;
                username = $("#userName").val();
                password = $("#pwd").val();
                email = $("#email").val();
                $.ajax({
                    type: "get",
                    url: "backend.php",
                    data: {
                        "user_name": username,
                        "password": password,
                        "email": email
                    },
                    success: function(responce) {

                    }
                });

            });
        });

    </script>
</body>

</html>
