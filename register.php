<!DOCTYPE html>
<html>

<head>
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
        .container {
            margin-top: 8%;
            width: 400px;
            border: ridge 1.5px white;
            padding: 20px;
        }

        body {
            background: #E0EAFC;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #CFDEF3, #E0EAFC);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col">
            <a style="text-decoration:none" href="index.php">
                <h3 class="text-right"> X </h3>
            </a>
        </div>
        <h2>Registration Form</h2>
        <form action="check-register.php" method="post">
            <div class="form-group">
                <label for="firstname">Your Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input onkeypress="return event.charCode >= 48 && event.charCode <= 57" type="text" class="form-control"
                    name="phone">
            </div>
            <div class="form-group">
                <label for="Email1">Email address</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
            </div>
            <div class="form-group">
                <label for="firstname">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="Password">Confirm Password</label>
                <input type="password" class="form-control" name="confpassword">
            </div>
            <button type="submit" class="btn btn-primary" name="btn_submit">Sign up</button>
        </form>
    </div>
</body>

</html>