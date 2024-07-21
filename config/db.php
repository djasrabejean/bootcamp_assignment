<?php
    // Database credentials
    define("DB_SERVER", "localhost");
    define("DB_USER", "root"); // Default username for XAMPP
    define("DB_PASS", ""); // No password
    define("DB_NAME", "school_system"); // Database name
    // Start the session
    session_start();
    $errors = array();

    // Create a connection
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }






    //SAVE CONTACT
    if(isset($_POST['ContactSubmit'])){
        $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
        $email     = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $subject   = mysqli_real_escape_string($con, $_POST['subject']);
        $message   = mysqli_real_escape_string($con, $_POST['message']);
        
        
        $query  = "INSERT INTO Contact (fullname,email,subject,phone,message) VALUES('$fullname', '$email','$subject','$phone','$message')";
        $result = mysqli_query($con, $query);
        if($result){
            $_SESSION['success'] = "Your message has been sent successfully. we will get back to you as soon as possible";
        } else{
            array_push($errors,"Error connection fail.");
        }

    }

        //SAVE Blog
        if(isset($_POST['newsletterSubmit'])){
            // $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
            $email     = mysqli_real_escape_string($con, $_POST['email']);
            // $phone = mysqli_real_escape_string($con, $_POST['phone']);
            // $subject   = mysqli_real_escape_string($con, $_POST['subject']);
            // $message   = mysqli_real_escape_string($con, $_POST['message']);
            
            
            $query  = "INSERT INTO Newsletter (email) VALUES('$email')";
            $result = mysqli_query($con, $query);
            if($result){
                $_SESSION['success'] = "Your message has been sent successfully. we will get back to you as soon as possible";
            } else{
                array_push($errors,"Error connection fail.");
            }
    
        }




    //SAVE ADMISSIOn
    if(isset($_POST['AdmissionSubmit'])){
        $courseId  = mysqli_real_escape_string($con, $_POST['courseId']);
        $fullName  = mysqli_real_escape_string($con, $_POST['fullName']);
        $email     = mysqli_real_escape_string($con, $_POST['email']);
        $phone     = mysqli_real_escape_string($con, $_POST['phone']);
        $gender    = mysqli_real_escape_string($con, $_POST['gender']);

        $passport_name = $_FILES['passportId']['name'];
        $passport_tmp = $_FILES['passportId']['tmp_name'];
        move_uploaded_file($passport_tmp, "uploads/".$passport_name);
        
        $documents_name = $_FILES['documents']['name'];
        $documents_tmp = $_FILES['documents']['tmp_name'];
        move_uploaded_file($documents_tmp, "uploads/".$documents_name);
        
        
        $query  = "INSERT INTO Admission (courseId, fullName,email,gender,phone,documents,passportId) VALUES('$courseId', '$fullName', '$email','$gender','$phone','$documents_name','$passport_name')";
        $result = mysqli_query($con, $query);
        if($result){
            $_SESSION['success'] = "Your request has been sent successfully, we'll get back to you as soon as possible.";
        } else{
            array_push($errors,"Error connection fail.".$query);
        }
    }

?>