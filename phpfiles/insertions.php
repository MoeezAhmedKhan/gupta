<?php

    require_once("../connection.php");


    // sent_notification.php

    if(isset($_POST["BtnSendpush"]))
    {
        $user_id = $_POST["user_id"];
        $check = $_POST["checkbox"];
        $purpose = $_POST["purpose"];
        $content = $_POST["content"];

        $userid = [];

        foreach($check as $i)   
        {
            $u_id = $i;
            $insert = "INSERT INTO `notifications`(`user_id`, `noti_title`, `noti_description`) VALUES ('$u_id','$purpose','$content')";
            $exec = mysqli_query($conn,$insert);

            $get_token = "SELECT `full_name`, `notification_token` FROM `users` WHERE id = '$u_id'";
            $ex = mysqli_query($conn,$get_token);
            $arr = mysqli_fetch_array($ex);
            $token = $arr['notification_token'];

            array_push($userid,$token);

        }

        $cont = array
        (
            "en" => $content
        );

        $field = array
        (
            'app_id' => "b872e14d-5d69-46d9-b826-c46edb7af27c",
            'include_user_ids' => $userid,
            'data' => array("foo" => "NewMassage","Id" => $taskid),
            'large_icon' =>"ic_launcher_round.png",
            'contents' => $cont
        );

        $field = json_encode($field);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                                           'Authorization: Basic ODU5ZDhiZjAtOWRkZS00NDIyLWI0ZWItOTYxMDc5YzQzMGIz'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    

        $response = curl_exec($ch);
        curl_close($ch);
        
        ?>
        <script>alert("Sucessfully sent notification");window.location.href = "../sent_notification.php";</script>
        <?php

    }



    // create_company_profile.php

    if(isset($_POST["craete_company_profile_btn"]))
    {
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];

        $insert = "INSERT INTO `users`(`role_id`,`full_name`, `email`, `phone_number`, `password`) 
        VALUES (1,'$fname','$email','$phone','$password')";
        $excec = mysqli_query($conn,$insert);
        if($excec)
        {
            ?>
                <script>
                    alert("Record has been Inserted");window.location.href = "../create_company_account.php";
                </script>
            <?php
        }
        else
        {
            echo mysqli_error($conn);
        }
        

    }



     // create_user_profile.php

     if(isset($_POST["craete_user_profile_btn"]))
     {
         $fname = $_POST["fname"];
         $email = $_POST["email"];
         $phone = $_POST["phone"];
         $password = $_POST["password"];
 
         $insert = "INSERT INTO `users`(`role_id`,`full_name`, `email`, `phone_number`, `password`) 
         VALUES (2,'$fname','$email','$phone','$password')";
         $excec = mysqli_query($conn,$insert);
         if($excec)
         {
             ?>
                 <script>
                     alert("Record has been Inserted");window.location.href = "../create_company_user.php";
                 </script>
             <?php
         }
         else
         {
             echo mysqli_error($conn);
         }
         
 
     }



     // add_skills_btn.php

     if(isset($_POST["add_skills_btn"]))
     {
         $skill = $_POST["skill"];
 
         $insert = "INSERT INTO `skills`(`skill_name`) VALUES ('$skill')";
         $excec = mysqli_query($conn,$insert);
         if($excec)
         {
             ?>
                 <script>
                     alert("Record has been Inserted");window.location.href = "../add_skills.php";
                 </script>
             <?php
         }
         else
         {
             echo mysqli_error($conn);
         }
         
 
     }



?>