<?php
require 'require/dbconnect.php';


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ajax testing</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: rgb(251,251,251);">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><a class="navbar-brand" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-12">
                <!--- SUCCESS AND UNSUCCESSFUL ALERTS --->
                <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0">
                <div class="card">
                    <div class="card-body">
                        <form id="register_form" name="form1" method="post">
                            <div class="form-group">
                                <label style="font-family: 'Titillium Web', sans-serif;">Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" id="name" style="font-family: 'Titillium Web', sans-serif;">
                            </div>
                            <div class="form-group">
                                <label style="font-family: 'Titillium Web', sans-serif;">Age</label>
                                <input class="form-control" type="text" placeholder="Age" name="age" id="age" style="font-family: 'Titillium Web', sans-serif;">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="button" name="btnadd" id="btnadd" style="font-family: 'Titillium Web', sans-serif;">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-borderless">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="font-family: 'Titillium Web', sans-serif;font-size: 17px;color: #4f4f4f;">ID</th>
                                        <th style="font-family: 'Titillium Web', sans-serif;font-size: 17px;color: #4f4f4f;">Name</th>
                                        <th style="font-family: 'Titillium Web', sans-serif;font-size: 17px;color: #4f4f4f;">Age</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-family: 'Titillium Web', sans-serif;color: #9a9a9a;">Cell 1</td>
                                        <td style="font-family: 'Titillium Web', sans-serif;color: #9a9a9a;">Cell 2</td>
                                        <td style="font-family: 'Titillium Web', sans-serif;color: #9a9a9a;">Cell 3</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'Titillium Web', sans-serif;color: #9a9a9a;">Cell 4</td>
                                        <td style="font-family: 'Titillium Web', sans-serif;color: #9a9a9a;">Cell 5</td>
                                        <td style="font-family: 'Titillium Web', sans-serif;color: #9a9a9a;">Cell 6</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/ajax.js"></script>
</body>

</html>