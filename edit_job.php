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
                                <h1 class="page-title">Job Edit</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Job Edit</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW OPEN -->
                            <div class="row">

                            <?php

                                    require_once("connection.php");
                                    $Id = $_GET["id"];
                                    $select = "SELECT `cat_id`, `cat_name`, `cat_image` FROM `categories` WHERE cat_id = '$Id'";
                                    $exec = mysqli_query($conn,$select);
                                    $rec = mysqli_fetch_array($exec);

                            ?>

                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Edit</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-row">
                                                    <div class="col-xl-12 mb-3">
                                                        <label for="validationDefault01">Job name</label>
                                                        <input type="text" class="form-control" name="job_name" id="validationDefault01" value="<?php echo "$rec[cat_name]" ?>" required>
                                                    </div>
                                                    <div class="col-xl-12 mb-3">
                                                        <label for="validationDefault01">Job Image</label>
                                                        <input type="file" class="form-control" name="job_image" id="validationDefault01" value="<?php echo "$rec[cat_image]" ?>">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit" name="update_btn_job">Update </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php

                                        if(isset($_POST["update_btn_job"]))
                                        {
                                            $job_name = $_POST["job_name"];

                                            $job_image = $_FILES['job_image']['name'];
  
                                            $target_dir = "upload/";
                                            $target_file = $target_dir . basename($job_image);
                                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                            $filewithnewname = date("Ymdis")."CAT.".$imageFileType;

                                            $image_size = $_FILES['job_image']['size'];
                                            $image_type = $_FILES['job_image']['type'];
                                            $image_tmp = $_FILES['job_image']['tmp_name'];

                                            if($image_size <= 5000000) /*image 5mb*/
                                            {
                                                if(strtolower($image_type) == "image/jpg" || strtolower($image_type) == "image/jpeg" || strtolower($image_type) == "image/png" || strtolower($image_type) == "image/jfif")
                                                {

                                                    $update = "UPDATE `categories` SET `cat_name`='$job_name',`cat_image`='$filewithnewname' WHERE cat_id = '$Id'";
                                                    $excec = mysqli_query($conn,$update);
                                                    if($excec)
                                                    {
                                                        move_uploaded_file($image_tmp,$target_dir.$filewithnewname);
                                                        ?>
                                                            <script>
                                                                alert("Record has been Updated");
                                                                window.location.href = "manage_jobs.php";
                                                            </script>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        echo mysqli_error($conn);
                                                    }

                                                }
                                                else
                                                {
                                                    ?>
                                                    <script>
                                                        alert("Failed || Image type should be jpg, jpeg, jfif and png");
                                                        window.location.href = "manage_jobs.php";
                                                    </script>
                                                    <?php
                                                }

                                            }
                                            else
                                            {
                                                ?>
                                                <script>
                                                    alert("Failed || Image size should be less than or equal to 5mb");
                                                    window.location.href = "manage_jobs.php";
                                                </script>
                                                <?php
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