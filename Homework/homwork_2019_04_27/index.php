<?php 
    $view='home';
    if(isset($_GET['view'])){
    $view=$_GET['view'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<style>
    /* footer */
    .nav-link {
        padding: 0 10px 0 10px;
    }

    /* end footer */

    /* nav menu header */
    #menu-bar {
        margin: auto;
    }

    #nav-bar-menu li {
        padding-left: 20px;
    }

    /* end nav menu header */
}


</style>


<body>




<div id="body">
    <nav class="container">
        <!-- menu bar -->
        <nav>
            <div class="d-flex">
            
                <div class="p-2 mr-auto">
                    <img class="rounded" width="64px" height="64px" src="picture/adidas-logo2.png" alt="adidas">
                </div>
                
                <div id="menu-bar" class="p-2">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light ml-5">
                        <button class="navbar-toggler ml-5" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav-bar-menu" class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item ">
                                    <a class="nav-link text-dark" href="index.php?view=home">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Products
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.php?view=products">Category one</a>
                                        <a class="dropdown-item" href="index.php?view=products">Category two</a>
                                        <a class="dropdown-item" href="index.php?view=products">Category three</a>
                                        <a class="dropdown-item" href="index.php?view=products">Category four</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="index.php?view=about_us">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="index.php?view=contact_us">Contact us</a>
                                </li>
                                <li class="nav-item">
                                    <a onclick="hidebox()" class="nav-link text-dark" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                
            </div>
        </nav>
        <!--end menu bar -->

        <!-- main content -->
        <section>
            <?php 
              
                include("$view.php");
                
            ?>
        </section>

        <!-- end main content -->

        <!-- footer -->
        <footer>
            <div class="d-flex flex-row bg-primary">
                <div class="p-2 text-monospace" style="color:white">copyright 2019 All right</div>
                <div class="p-2 ml-auto">
                    <ul class="nav nav-item">
                        <li class="nav-link border-right"><a class="text-light" href="index.php?view=home">Home</a></li>
                        <li class="nav-link border-right"><a class="text-light" href="index.php?view=about_us">About us</a></li>
                        <li class="nav-link "><a class="text-light" href="index.php?view=contact_us">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--end footer -->
    </nav>

    <button id="to-top" class="btn btn-success">GO UP</button>

</div>
    <!-- login form -->

    <div id="login-form" class="form-group mt-5 ml-5">
        <h2>Login</h2>

        <label for="">Email</label>
        <input class="form-control" type="text" placeholder="Email">
        <label for="">Password</label>
        <input class="form-control" type="password" name="" id="" placeholder="password">
        <input type="checkbox" name="" id="">Remember me<br />
        <a class="btn btn-success" href="#">Login</a>
        <span id="b-info" onclick="document.getElementById('login-form').style.display='none';document.getElementById('body').style.opacity='1'"
            class="btn btn-info">X</span>
    </div>

 <script type="text/javascript">
 //hide login form
        function hidebox() {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('body').style.opacity="0.4";
        }

// button scroll up
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 50 ){
            $('#to-top').fadeIn();
        }else{
            $('#to-top').fadeOut();
        }
    });
    $('#to-top').click(function(){
        $('html,body').animate({scrollTop : 0},800);
    }); 
});

// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
//     document.getElementById("to-top").style.display = "block";
//   } else {
//     document.getElementById("to-top").style.display = "none";
//   }
// }

// // When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }
    </script>
</body>

</html>