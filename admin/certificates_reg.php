<?php
session_start();
include '../sessions.php';
$ses = new MySessions();

if (!isset($_SESSION['uid']) || !isset($_SESSION['role'])) {
    header("location:../index.php");
}

//search form implementation
if (isset($_POST['search'])) {
    $center_number = $_POST['center'];
    $cert_number = $_POST['certificate'];
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-Type" content="en"/>
        <title>Electronic Certificate Verification</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
        <link href="assets/main.css" rel="stylesheet"></head>
    <style rel='stylesheet' type='text/css'>
        label{
            font-weight: bold;
        }
    </style>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <!--Header-->
            <?php include 'includes/header.php'; ?>
            <!--/Header-->        
            <div class="app-main">
                <!--SideBar-->
                <?php include 'includes/sidebar.php'; ?>
                <!--/SideBar-->   
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>Upload new certificate
                                    </div>
                                </div>
                            </div>
                        </div>            
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Certificate Number:</label>
                                        <input type="number" name="certificate_number" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Center Number:</label>
                                        <input value="<?php echo $_SESSION['uid'] ?>" type="text" name="center_number" class="form-control" readonly/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Student Full Name:</label>
                                        <input type="text" name="student_fullname" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Certificate (PDF):</label>
                                        <input type="file" name="certificate" class="form-control-file" required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>Note:</b> Certificate number is the unique identifier for every certificate.
                                    </p>
                                </div>
                                <div class="col-md-12 text-right">
                                    <div class="form-group">
                                        <a href="certificates.php" class="btn btn-danger">Cancel</a>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="submit" name="reg" class="btn btn-primary">Upload Certificate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                        //form implementation
                        if (isset($_POST['reg'])) {
                            $certificate_number = $_POST['certificate_number'];
                            $center_number = $_POST['center_number'];
                            $student_fullname = $_POST['student_fullname'];
                            $certificate_tmp = $_FILES['certificate']['tmp_name'];
                            $certificate_filename = $_FILES['certificate']['name'];
                            $certificate_ext = pathinfo($certificate_filename, PATHINFO_EXTENSION);

                            if (strtolower($certificate_ext) == "pdf") {
                                $file_url = "cert-" . date("YmdHis") . "." . $certificate_ext;
                                move_uploaded_file($certificate_tmp, "../certificates/" . $file_url);
                                $ses->registerCertificate($certificate_number, $center_number, $student_fullname, $file_url);

                                echo "<script>alert('Operation Successful!'); window.location.href='certificates.php';</script>";
                            } else {
                                echo "<script>alert('Error: Illegal file type!');</script>";
                            }
                        }
                        ?>
                    </div>
                    <!--Footer-->    
                        <?php include 'includes/footer.php'; ?>
                    <!--/Footer-->    
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
