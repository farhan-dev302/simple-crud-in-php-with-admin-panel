<?php
include('Include/authlinks.php');
include('Include/dbconnection.php');
?>

<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center min-vh-100">
                    <div class="w-100 d-block my-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center mb-4 mt-3">
                                            <a href="index.php">
                                                <span><img src="assets/images/logo-dark.png" alt="" height="26"></span>
                                            </a>
                                        </div>
                                        <form class="p-2" method="POST">
                                            <div class="form-group">
                                                <label for="username">Name</label>
                                                <input class="form-control" type="text" id="username" required=""
                                                    placeholder="Michael Zenaty" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="emailaddress" required=""
                                                    placeholder="john@deo.com" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" id="password"
                                                    placeholder="Enter your password" name="password">
                                            </div>
                                            <div class="form-group mb-4 pb-3">
                                                <div class="custom-control custom-checkbox checkbox-primary">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="checkbox-signin">
                                                    <label class="custom-control-label" for="checkbox-signin">I accept
                                                        <a href="#">Terms and Conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="mb-3 text-center">
                                                <button class="btn btn-primary btn-block" type="submit"> Sign Up Free
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->

                                <div class="row mt-4">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-white-50 mb-0">Already have an account? <a href="./login.php"
                                                class="text-white-50 ml-1"><b>Sign In</b></a></p>
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end .w-100 -->
                </div> <!-- end .d-flex -->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div>
    <!-- end container -->
</div>

<?php



?>


<?php include('Include/authfooter.php'); ?>