<?php
if (isset($_POST['submit'])) {
    $first_name =  $_POST['first_name'];
    $last_name =  $_POST['last_name'];
    $number =  $_POST['number'];
    $email =  $_POST['email'];
    $id =  $_POST['ID'];
    $update_query = "UPDATE `team members` SET `First Name` = '$first_name',`Last Name` = '$last_name', `Phone Number` = '$number', `Email` = '$email'  WHERE `ID` = $id ";
    $result = mysqli_query($con, $update_query);
}

$query = "SELECT * FROM `team members`";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $first_name = $row['First Name'];
    $last_name = $row['Last Name'];
    $number = $row['Phone Number'];
    $email = $row['Email'];
    $id = $row['ID'];
?>

<div class="modal fade" id="exampleModal_<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><?php echo $first_name;?> <?php echo $last_name;?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="first_name" value="<?php echo $first_name;?>"
                                required="true">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="last_name" value="<?php echo $last_name;?>"
                                required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" name="number" value="<?php echo $number;?>"
                                required="true">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" name="email" value="<?php echo $email;?>"
                                required="true">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Understood</button>
                </div>
                <input type="hidden" class="form-control" name="ID" value="<?php echo $id;?>">
            </form>
        </div>
    </div>
</div>
<?php 
}
?>