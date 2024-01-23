<?php include('Include/links.php');?>

    <div id="layout-wrapper">
        <?php include('Include/sidebar.php');?>
        <?php include('Include/header.php');?>
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">All Products</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Opatix</a></li>
                                    <li class="breadcrumb-item active">All Products</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                            <div class="card card-animate">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="inputPassword2" class="mr-2">Search: </label>
                                                <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                            </div>
                                            <div class="form-group mx-sm-3">
                                                <label for="status-select" class="mr-2">Sort By: </label>
                                                <select class="custom-select" id="status-select">
                                                    <option selected="">All</option>
                                                    <option value="1">Name</option>
                                                    <option value="2">Post</option>
                                                    <option value="3">Followers</option>
                                                    <option value="4">Followings</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-lg-right mt-3 mt-lg-0">
                                            <button type="button" class="btn btn-success mr-1"><i class="mdi mdi-cog"></i></button>
                                            <a href="./add-team-member.php" class="btn btn-danger"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card-box -->
                    </div><!-- end col-->
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                            <div class="card card-animate">
                            <img class="card-img-top img-fluid" src="assets/images/team/team-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="mb-1"><a href="" class="text-dark">Helen Warren</a> </h5>
                                <p class="text-muted font-size-13">Founder & CEO</p>
                                <p class="text-muted">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                </p>

                                <a href="#" class="btn btn-sm btn-primary">Message</a>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-lg-6">
                            <div class="card card-animate">
                            <img class="card-img-top img-fluid" src="assets/images/team/team-2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="mb-1"><a href="" class="text-dark">Kayla Lambie</a> </h5>
                                <p class="text-muted font-size-13">Sr. Web Developer</p>
                                <p class="text-muted">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                </p>

                                <a href="#" class="btn btn-sm btn-primary">Message</a>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-lg-6">
                            <div class="card card-animate">
                            <img class="card-img-top img-fluid" src="assets/images/team/team-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="mb-1"><a href="" class="text-dark">Hugo Lavarack</a> </h5>
                                <p class="text-muted font-size-13">Manager</p>
                                <p class="text-muted">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                </p>

                                <a href="#" class="btn btn-sm btn-primary">Message</a>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-3 col-lg-6">
                            <div class="card card-animate">
                            <img class="card-img-top img-fluid" src="assets/images/team/team-4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="mb-1"><a href="" class="text-dark">Spencer Gye</a> </h5>
                                <p class="text-muted font-size-13">Co-Founder</p>
                                <p class="text-muted">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                </p>

                                <a href="#" class="btn btn-sm btn-primary">Message</a>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('Include/footer.php');?>
