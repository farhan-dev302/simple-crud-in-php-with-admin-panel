<?php

include('Include/links.php');
include('Include/dbconnection.php');
include('team-members/insert_member.php');

?>

<div id="layout-wrapper">
    <?php include('Include/sidebar.php');?>
    <?php include('Include/header.php');?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Add Team Members</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Add Team Members</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" name="myForm" method="POST" enctype="multipart/form-data"
                                    onsubmit="return validateForm()">
                                    <div class="row justify-content-center text-center">
                                        <input type="file" class="dropify"
                                            data-default-file="assets/images/media/sm-6.jpg" name="profile_image"
                                            required />
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">First name</label>
                                            <input type="text" class="form-control" id="fname" placeholder="First name"
                                                value="" name="fname" required>
                                            <div class="valid-feedback text-danger">
                                                Fill the Field
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Last name</label>
                                            <input type="text" class="form-control" id="lname" placeholder="Last name"
                                                value="" name="lname" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationphone">Phone Number</label>
                                            <input type="number" class="form-control appearance-none" id="number"
                                                placeholder="Phone Number" value="" name="number" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustomemail">Email</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="email" placeholder="Email"
                                                    aria-describedby="inputGroupPrepend" value="" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light" type="submit"
                                        name="submit">Add Team member</button>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>

</div>

<?php include('Include/footer.php');?>