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
                <h1 class="page-title">Sent Notification</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sent Notification</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sent Notification</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="phpfiles/insertions.php" method="post">
                                <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <td>Check Item</td>
                                            <th>S no.</th>
                                            <td>Id</td>
                                            <td>Role Id</td>
                                            <td>Status</td>
                                            <th>Full name</th>
                                            <th>email</th>
                                            <th>Phone</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                               require_once("connection.php");
                                               $sql = "select * from users where role_id != '0'";
                                               $exec = mysqli_query($conn,$sql);
                                               $num = mysqli_num_rows($exec);
                                               $index = 0;
                                               if($num > 0)
                                               {
                                                    while($rec = mysqli_fetch_array($exec))
                                                    {
                                                        $sn = $index + 1;   
                                                         echo '<tr>
                                                                    <td><input type="hidden" name="user_id" value='.$rec['id'].'></td>
                                                                    <td><input type="checkbox" name="checkbox[]" value='.$rec['id'].'></td>
                                                                    <td>'.$sn.'</td>
                                                                    <td>'.$rec['id'].'</td>
                                                                    <td>'.$rec['role_id'].'</td>
                                                                    <td>'.$rec['status'].'</td>
                                                                    <td>'.$rec['full_name'].'</td>
                                                                    <td>'.$rec['email'].'</td>
                                                                    <td>'.$rec['phone_number'].'</td>
                                                                    <td>'.$rec['password'].'</td>
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
                                    <tfoot>
                                    <tr>
                                            <td></td>
                                            <td>Check Item</td>
                                            <th>S no.</th>
                                            <td>Id</td>
                                            <td>Role Id</td>
                                            <td>Status</td>
                                            <th>Full name</th>
                                            <th>email</th>
                                            <th>Phone</th>
                                            <th>Password</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                
                                <div class="col-md-6 mt-5">
                                    <div class="form-group">
                                         <div class="control">
                                            <select name="purpose" class="form-control" required>
                                                <option disabled>Select</option>
                                                <option value="info">info</option>
                                                <option value="Promotion">Promotion</option>
                                            </select>
                                         </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="control" id="text_for_option1">
                                            <textarea  name="content" class="form-control" cols="30" rows="10" placeholder="Enter Notification Text" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="BtnSendpush" class="btn btn-primary">Submit</button>
                                </form>
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