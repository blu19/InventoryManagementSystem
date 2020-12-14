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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto">
                  <img src="./images/user.png" style="width:60%" class="card-img-top mx-auto" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title"></i>Profile Info</h4>
                    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Brian Liang</p>
                    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
                    <p class="card-text">Last Login : xxxx-xx-xx</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;
                    </i>Edit Profile</a>
                  </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="jumbotron" style="width: 100%; height: 100%">
                    <h1>Welcome Admin,</h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <iframe src="http://free.timeanddate.com/clock/i7l8nwj9/n199/szw160/szh160/hoca32/hbw10/hfcc00/cf100/hnca32/fas30/facfff/fdi86/mqcfff/mqs2/mql3/mqw4/mqd70/mhcfff/mhs2/mhl3/mhw4/mhd70/mmcfff/mml4/mmw4/mmd98/hhcfff/hhs2/hmcfff/hms2/hscfff" frameborder="0" width="160" height="160"></iframe>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                      <h4 class="card-title">New Orders</h4>
                                      <p class="card-text">Here you can make new invoices and create new orders.</p>
                                      <a href="#" class="btn btn-primary">New Orders</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Categories</h4>
                      <p class="card-text">Here you can manage your categories and can add parent and sub categories</p>
                      <a href="#" class="btn btn-primary">Add</a>
                      <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Brands</h4>
                      <p class="card-text">Here you can manage your brand and can add a new brand</p>
                      <a href="#" class="btn btn-primary">Add</a>
                      <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Products</h4>
                      <p class="card-text">Here you can manage your products and can add new products</p>
                      <a href="#" class="btn btn-primary">Add</a>
                      <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
        </div>                            
    </div>


</body>
</html>