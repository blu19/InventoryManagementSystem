<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventory Management System</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php  include_once("./templates/header.php"); ?>
    <br><br>

    <!-- Card -->
    <div class="container">
      <div class="card mx-auto" style="width: 20rem;">
        <img src="./images/login.png" style="width:60%;" class="card-img-top mx-auto" alt="Login Icon">
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="e" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
            <span><a href="#">Register</a></span>
          </form>

        </div>
        <div class="card-footer"><a href="#">Forgot Password?</a></div>
      </div>
    </div>


</body>
</html>