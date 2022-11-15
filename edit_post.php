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
                                <h1 class="page-title">Post Edit</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Post Edit</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW OPEN -->
                            <div class="row">

                            <?php

                                    require_once("connection.php");
                                    $Id = $_GET["id"];
                                    $select = "SELECT `id`, `company_id`, `category_id`, `education_id`, `vacancies`, `job_title`,
                                    `job_location`, `job_salary`, `job_experience`, `job_type`, `job_time`, `job_description`,
                                     `job_requirements`, `extra_skills`, `job_req_points`, `job_post_status`, `created_at` FROM `jobs` WHERE id = '$Id'";
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
                                                        <label for="validationDefault03">Job Post Status</label>
                                                        <input type="text" class="form-control" name="phone" id="validationDefault03" value="<?php echo $rec['job_post_status'] ?>"  required>
                                                    </div>
                                                </div>
                                            
                                                <button class="btn btn-primary" type="submit" name="update_btn_comapny">Update </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php

                                        if(isset($_POST["update_btn_comapny"]))
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
                                                        alert("Record has been updated");window.location.href = "manage_company.php";
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