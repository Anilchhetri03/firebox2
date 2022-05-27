<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <style>
        /* signinandsignup.php */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: poppins;
            text-decoration: none;
        }

        body {
            margin: 8%;

        }

        div.login-form {
            width: 450px;
            background-color: white;
            box-shadow: 0px 5px 10px black;
            margin-left: 350px;
            margin-Top: 170px;
        }

        div.login-form h2 {
            text-align: center;
            background-color: #204969;
            padding: 12px 0px;
        }

        div.login-form form {
            padding: 30px 60px;
        }

        div.login-form form div.input-field {
            display: flex;
            flex-direction: row;
            margin: 10px 0px;
        }

        div.login-form form div.input-field i {
            color: darkslategray;
            padding: 10px 14px;
            background-color: #2ff4f6;
            margin-right: 4px;


        }

        div.login-form form div.input-field input {
            background-color: #2ff4f6;
            padding: 10px;
            border: none;
            width: 100%;
            padding-left: 15px;
        }

        div.login-form form button {
            width: 100%;
            background-color: #5bd1d7;
            padding: 8px;
            border: none;
            font-size: 16px;
            font-weight: 500;
            color: 15px 0;
            transition: background-color 0.4s;
        }

        div.login-form form button:hover {
            background-color: #41b6e6;
        }

        div.login-form form div.extra {
            font-size: 18px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            text-decoration: none;
            padding-top: 10px;
        }

        div.login-form form div.extra a:first-child {
            color: darkgray;
        }



        div.login-form form div.extra a:last-child {
            color: darkgray;
        }

        /* /signinandsignup.php */

        /* admin panel.php */

        .adminpaneldisplay {
            background-color: #2ff4f6;
        }

        div.header {
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
        }

        div.header button {
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550px;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }

        /* /admin panel.php */
        /* signinandsignup.php */
    </style>
    <title>Busyatra</title>
</head>

<body>








    <div class="login-form">
        <h2>MERCHANT LOGIN PANEL</h2>
        <form method="POST" action="loginprocess/adminlogin.php">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Admin email" name="email">
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="password" name="password">
            </div>
            <button type="submit" name="submit">Sign in</button>
            <div class="extra">
                <a href="#">Forget Password</a>
                <a href="#">Register</a>
            </div>




        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar-collapse").on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $(".more-button,.body-overlay").on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>