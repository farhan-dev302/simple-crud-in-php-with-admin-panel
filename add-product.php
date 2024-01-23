<?php include('Include/links.php');?>
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
                            <h4 class="mb-0 font-size-18">Add New Prodict</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Add New Prodict</li>
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
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <input type="file" class="dropify"
                                            data-default-file="assets/images/media/sm-6.jpg" />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">First name</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="First name" value="Mark" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Last name</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="Last name" value="Otto" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationphone">Phone Number</label>
                                            <input type="number" class="form-control appearance-none"
                                                id="validationphone" placeholder="Phone Number" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustomemail">Email</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="validationCustomemail"
                                                    placeholder="Email" aria-describedby="inputGroupPrepend" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Submit
                                        form</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

            </div> <!-- container-fluid -->
        </div>
    </div>
</div>
<?php include('Include/footer.php');?>