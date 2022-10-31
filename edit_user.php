<?php
require_once("header.php");

?>







 <!-- MAIN-CONTENT -->
 <div class="main-content app-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">User Edit</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">User Edit</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW OPEN -->
                            <div class="row">

                            <?php

                                    require_once("connection.php");
                                    $Id = $_GET["id"];
                                    $select = "SELECT * FROM `users` WHERE id = '$Id'";
                                    $exec = mysqli_query($conn,$select);
                                    $rec = mysqli_fetch_array($exec);

                            ?>

                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Edit</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="POST">
                                            <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault01">Id</label>
                                                        <input type="text" class="form-control" id="validationDefault01" value="<?php echo "$rec[id]" ?>" readonly>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault02">Role Id</label>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault01">Full name</label>
                                                        <input type="text" class="form-control" name="name" id="validationDefault01" value="<?php echo "$rec[full_name]" ?>" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault02">Email</label>
                                                        <input type="text" class="form-control" name="email" id="validationDefault02" value="<?php echo "$rec[email]" ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault03">Phone</label>
                                                        <input type="text" class="form-control" name="phone" id="validationDefault03" value="<?php echo "$rec[phone_number]" ?>"  required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault03">Password</label>
                                                        <input type="text" class="form-control" name="password" id="validationDefault03" value="<?php echo "$rec[password]" ?>" required>
                                                    </div>
                                                    <div class="col-xl-12 mb-3">
                                                    <label for="validationDefault04">Status</label>
                                                        <select class="form-select form-control" name="status" id="validationDefault04" required>
                                                            <option selected disabled value="">Select</option>
                                                            <option value="active" <?php if($rec["status"] == "active"){echo "selected";} ?> >active</option>
                                                            <option value="deactivate" <?php if($rec["status"] == "deactivate"){echo "selected";} ?> >deactivate</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <button class="btn btn-primary" type="submit" name="update_btn_user">Update </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php

                                        if(isset($_POST["update_btn_user"]))
                                        {
                                            $role = $_POST["role"];
                                            $name = $_POST["name"];
                                            $email = $_POST["email"];
                                            $phone = $_POST["phone"];
                                            $password = $_POST["password"];
                                            $status = $_POST["status"];

                                            $update = "UPDATE `users` SET `role_id`='$role',`status`='$status',`full_name`='$name',
                                            `email`='$email',`phone_number`='$phone',`password`='$password' WHERE id = '$Id'";
                                            $update_excec = mysqli_query($conn,$update);
                                            if($update_excec)
                                            {
                                                ?>
                                                    <script>
                                                        alert("Record has been updated");window.location.href = "manage_users.php";
                                                    </script>
                                                <?php
                                            }
                                            else
                                            {
                                                echo mysqli_error($conn);
                                            }
                                        }

                                ?>
                                
                            </div>
                            <!-- ROW CLOSED -->
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
                <!-- MAIN-CONTENT CLOSED -->
            </div>

















<?php
require_once("footer.php");
?>