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
                <h1 class="page-title">Manage Posts</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Posts</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered border text-nowrap mb-0 display nowrap table table-striped table-bordered table-sm" id="basic-edit">
                                    <thead>
                                        <tr>
                                            <th>S no.</th>
                                            <td>Id</td>
                                            <th>Company Id</th>
                                            <th>Category Id</th>
                                            <td>Education Id</td>
                                            <th>Vacancies</th>
                                            <th>Job Title</th>
                                            <td>Job Location</td>
                                            <th>Job Salary</th>
                                            <th>Job Experience</th>
                                            <td>Job Type</td>
                                            <th>Job Time</th>
                                            <th>Job Description</th>
                                            <td>Job Requirements</td>
                                            <!-- <th>Extra Skills</th> -->
                                            <!-- <td>'.$rec['extra_skills'].'</td> -->

                                            <!-- <th>Job Requirement Points</th> -->
                                            <!-- <td>'.$rec['job_req_points'].'</td> -->
                                            <th>Job Post Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                               require_once("connection.php");
                                               $sql = "SELECT `id`, `company_id`, `category_id`, `education_id`, `vacancies`, `job_title`,
                                                `job_location`, `job_salary`, `job_experience`, `job_type`, `job_time`, `job_description`,
                                                 `job_requirements`, `extra_skills`, `job_req_points`, `job_post_status`, `created_at` FROM `jobs`";
                                               $exec = mysqli_query($conn,$sql);
                                               $num = mysqli_num_rows($exec);
                                               $index = 0;
                                               if($num > 0)
                                               {
                                                    while($rec = mysqli_fetch_array($exec))
                                                    {
                                                        $sn = $index+1;
                                                        
                                                         echo '<tr>
                                                                    <td>'.$sn.'</td>
                                                                    <td>'.$rec['id'].'</td>
                                                                    <td>'.$rec['company_id'].'</td>
                                                                    <td>'.$rec['category_id'].'</td>
                                                                    <td>'.$rec['education_id'].'</td>
                                                                    <td>'.$rec['vacancies'].'</td>
                                                                    <td>'.$rec['job_title'].'</td>
                                                                    <td>'.$rec['job_location'].'</td>
                                                                    <td>'.$rec['job_salary'].'</td>
                                                                    <td>'.$rec['job_experience'].'</td>
                                                                    <td>'.$rec['job_type'].'</td>
                                                                    <td>'.$rec['job_time'].'</td>
                                                                    <td>'.$rec['job_description'].'</td>
                                                                    <td>'.$rec['job_requirements'].'</td>
                                                                    
                                                                    
                                                                    <td>'.$rec['job_post_status'].'</td>
                                                                    <td>'.$rec['created_at'].'</td>
                                                                    <td>
                                                                        <div class="btn-list">
                                                                            <a href="edit_post.php?id='.$rec['id'].'"><button id="bEdit" type="button" class="btn btn-sm btn-primary"><span class="fa fa-edit"></span></button></a>
                                                                            <a href="delete_post.php?id='.$rec['id'].'"><button id="bDelete" type="button" class="btn btn-sm btn-primary" onclick="ConfirmDelete()"><span class="fa fa-trash"></span></button></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>';

                                                                $index++;
                                                    }

                                                }
                                                else
                                                {
                                                    echo '<tr>
                                                            <td class"text-center">No Record Found</td>
                                                         </tr>';
                                                }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!-- MAIN-CONTENT CLOSED-->















<?php
require_once("footer.php");
?>