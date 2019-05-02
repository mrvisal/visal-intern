<footer>
                <div class="d-flex flex-row bg-primary">
                    <div class="p-2 text-monospace" style="color:white">copyright 2019 All right</div>
                    <div class="p-2 ml-auto">
                        <ul class="nav nav-item">
                            <li class="nav-link border-right"><a class="text-light" href="index.php?view=home">Home</a>
                            </li>
                            <li class="nav-link border-right"><a class="text-light" href="index.php?view=about_us">About
                                    us</a></li>
                            <li class="nav-link "><a class="text-light" href="index.php?view=contact_us">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <!--end footer -->
        </nav>

        <button id="to-top" class="btn btn-danger">TOP</button>

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
        <span id="b-info"
            onclick="document.getElementById('login-form').style.display='none';document.getElementById('body').style.opacity='1'"
            class="btn btn-info">X</span>
    </div>
    

    <script type="text/javascript">
        //hide login form
        function hidebox() {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('body').style.opacity = "0.4";
        }

        // button scroll up
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#to-top').fadeIn();
                } else {
                    $('#to-top').fadeOut();
                }
            });
            $('#to-top').click(function () {
                $('html,body').animate({ scrollTop: 0 }, 800);
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