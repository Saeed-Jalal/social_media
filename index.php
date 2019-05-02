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
                    <a class="nav-link" href="signup.php">SIGNUP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="about">
        <div class="container text-center">
            <h2>ABOUT US</h2>
            <h3>Its Time to make the change</h3>
            <h4>We accelerate our vision and collective
                ability to pursue the platform opportunity
                and leapfrog our region into the digital future. </h4>
        </div>
    </section>
    <hr>
    <section id="team">
        <div class="container-fluid">
            <h1 class="text-center">TEAM</h1>

            <div class="row team">
                <div class="col p-3 team-card">
                    <div class="card bg-info py-3">

                        <img class="img-fluid rounded-circle mx-auto d-block" src="dummi-image.png" alt="image">


                        <div class="card-body">
                            <h3 class="card-title">Muhammad Saeed</h3>
                            <p class="card-text">CEO</p>

                        </div>
                    </div>
                </div>
                <div class="col p-3 team-card">
                    <div class="card bg-info py-3" style="align-items: center width:200px">

                        <img class="img-fluid rounded-circle mx-auto d-block" src="dummi-image.png" alt="image">


                        <div class="card-body">
                            <h3 class="card-title">Syed Shoaib Jalal</h3>
                            <p class="card-text">CTO</p>

                        </div>
                    </div>
                </div>
                <div class="col p-3 team-card">
                    <div class="card py-3 bg-info" style="align-items: center width:200px">

                        <img class="img-fluid rounded-circle mx-auto d-block" src="dummi-image.png" alt="image">


                        <div class="card-body">
                            <h3 class="card-title">Syed Hamza Jalal</h3>
                            <p class="card-text">CMO</p>

                        </div>
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
<script>
    function loginform(){
        alert("success");
    }
    </script>


    <script src="signup-validation.js"></script>
    <script src="login-validation.js"></script>
</body>

</html>
