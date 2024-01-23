<!-- end row -->
<div class="row pb-5">
    <?php
        while ($row = mysqli_fetch_assoc($result)) {
        $imageURL = $row['Profile Image'];
        $first_name = $row['First Name'];
        $last_name = $row['Last Name'];
        $phone_number = $row['Phone Number'];
        $id = $row['ID'];
    ?>
    <div class="col-xl-3 col-lg-6 px-1">
        <div class="card card-animate h-100">
            <img class="card-img-top img-fluid" src="<?php echo $imageURL; ?>" alt="Profile Image"
                style="height:250px;object-fit:fill;">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3 align-items-start">
                    <div class="div">
                        <h5 class="mb-1"><a href="" class="text-dark"><?php echo $first_name . ' ' . $last_name ?></a>
                        </h5>
                        <p class="text-muted font-size-13 mb-0"><?php echo $row['Email']; ?></p>
                    </div>
                    <!-- Team Member Setting -->
                    <div class="dropdown float-right position-relative">
                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <button type="button" class="btn bg-0 p-0 w-100 text-left" data-toggle="modal"
                                    data-target="#exampleModal_<?php echo $id; ?>">
                                    <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                </button>
                            </li>
                            <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                        </ul>
                    </div>
                </div>

                <a href="tel:<?php echo $phone_number; ?>"
                    class="btn btn-sm btn-primary"><?php echo $phone_number; ?></a>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
    <?php
    }
    ?>
</div>