<?php
    $url    = "../../";
    if (!isset($_SESSION)) { 
        session_start(); 
    } 
    $user_name      = $_SESSION['E_Voting_System'];
    $user_fname     = $_SESSION['fullname'];
    include_once($url.'connection/mysql_connect.php');


  

    if (!isset($_SESSION['E_Voting_System'])) {
        echo "Relogin|";
    } else {

        $rec_id             = mysqli_real_escape_string($db,$_REQUEST['rec_id']);
        $student_id         = mysqli_real_escape_string($db,$_REQUEST['student_id']);
        $first_name         = mysqli_real_escape_string($db,$_REQUEST['first_name']);
        $middle_name        = mysqli_real_escape_string($db,$_REQUEST['middle_name']);
        $last_name          = mysqli_real_escape_string($db,$_REQUEST['last_name']);
        $department         = mysqli_real_escape_string($db,$_REQUEST['department']);
        $year  	            = mysqli_real_escape_string($db,$_REQUEST['year']);
        $position  	        = mysqli_real_escape_string($db,$_REQUEST['position']);
        $election_id  	    = mysqli_real_escape_string($db,$_REQUEST['election_id']);
        $platform  	        = mysqli_real_escape_string($db,$_REQUEST['platform']);
        $party_name  	    = mysqli_real_escape_string($db,$_REQUEST['party_name']);
        $action             = mysqli_real_escape_string($db,$_REQUEST['action']);
        $target_dir         = '../../profile_pic/';
        $target_dir1        = 'profile_pic';

        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        if($_FILES["upload_img"]["name"] ?? null !=""){
            $upload_img = $target_dir1 .'/'.$student_id.'-'. $_FILES["upload_img"]["name"];
            move_uploaded_file($_FILES["upload_img"]["tmp_name"],$target_dir .'/'. $student_id.'-'.$_FILES["upload_img"]["name"]);
        } else {
            $upload_img = "";
        }

            //Check Voter if already exist	
            $sql_chk1		= "SELECT *
                               FROM tbl_users
                               WHERE username_id ='$student_id'";	
            $res_chk1        = mysqli_query($db, $sql_chk1) or die (mysqli_error($db));
            $row1        	= mysqli_fetch_assoc($res_chk1);
            $row_cnt1        = mysqli_num_rows($res_chk1);	
            $sid1            = $row1['username_id'] ?? null;




            if($row_cnt1 ==0){
                echo "notexist|".$sid1;    
            } else if($rec_id == '' && $action =='Add'){
            
                //Check User if already exist	
                $sql_chk		= "SELECT *
                                FROM tbl_candidates
                                WHERE student_id ='$student_id' AND election_id ='$election_id'";	
                $res_chk        = mysqli_query($db, $sql_chk) or die (mysqli_error($db));
                $row        	= mysqli_fetch_assoc($res_chk);
                $row_cnt        = mysqli_num_rows($res_chk);	
                $sid            = $row['student_id'] ?? null;

                if ($row_cnt > 0) {
                    echo "exist|".$sid;    
                } else {   

                    $save_rec = "INSERT INTO tbl_candidates (student_id, first_name, middle_name, last_name, position,
                                                                    platform, election_id, dept_id, year, added_by, date_added, profile_pic, party_name, election_status)					 
                                VALUES ('$student_id', '$first_name', '$middle_name', '$last_name', '$position',
                                        '$platform', '$election_id', '$department', '$year', '$user_fname', NOW(), '$upload_img', '$party_name', 'N')";
                    $result     = mysqli_query($db, $save_rec);
        
                    echo "Saved|";
            
                }

            } else if ($action =="Update" && $rec_id !='') {

                //Check User if already exist	
                $sql_chk		= "SELECT *
                                FROM  tbl_candidates
                                WHERE rec_id != '$rec_id' AND student_id ='$student_id' AND election_id ='$election_id'";	
                $res_chk        = mysqli_query($db, $sql_chk) or die (mysqli_error($db));
                $row        	= mysqli_fetch_assoc($res_chk);
                $row_cnt        = mysqli_num_rows($res_chk);	
                $sid            = $row['student_id'] ?? null;
    
                if ($row_cnt > 0) {
                    echo "exist|".$sid;  
                } else {  


                    $with_image = "";
                    if ($_FILES["upload_img"]["name"] ?? null !="") {
                        $with_image = ",profile_pic = '$upload_img'";
                    }

                    $sql_update  = "UPDATE tbl_candidates
                                    SET student_id = '$student_id', first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name',
                                        position = '$position', platform = '$platform', election_id = '$election_id', dept_id = '$department', year = '$year', party_name = '$party_name',
                                        updated_by = '$user_fname', date_updated = NOW() $with_image
                                    WHERE rec_id='$rec_id'";
                    $result      = mysqli_query($db, $sql_update);

                    echo "Updated|";
            
                }

                
            } else {
                echo "errorSaving|";
            }

     

    }

	mysqli_close($db); 		
?>