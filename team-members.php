<?php

include('Include/links.php');
include('Include/dbconnection.php');

$query = "SELECT * FROM `team members`";
$result = mysqli_query($con, $query);
?>
<!-- Begin page -->
<div id="layout-wrapper">

    <?php include('Include/sidebar.php');?>
    <?php include('Include/header.php');?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12 px-1">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">All Team Members</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Opatix</a></li>
                                    <li class="breadcrumb-item active">Team Members</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12 px-1">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="inputPassword2" class="mr-2">Search: </label>
                                                <input type="search" class="form-control" id="inputPassword2"
                                                    placeholder="Search...">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-lg-right mt-3 mt-lg-0">
                                            <a href="./add-team-member.php" class="btn btn-danger"><i
                                                    class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card-box -->
                    </div><!-- end col-->
                </div>
                <?php include('team-members/fetch_member.php');?>

                <?php include('team-members/edit_member.php');?>

            </div> <!-- container-fluid -->
        </div>
    </div>
</div>
<!-- END layout-wrapper -->


<?php include('Include/footer.php');?>