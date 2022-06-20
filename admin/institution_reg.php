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
                                    <div>Register new institution
                                    </div>
                                </div>
                            </div>
                        </div>            
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Center Number:</label>
                                        <input value="<?php echo $ses->generateCenterNumbers(4) ?>" type="text" name="center_number" class="form-control" readonly/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Institution Name:</label>
                                        <input type="text" name="institution_name" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone:</label>
                                        <input type="text" name="phone" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" name="email" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Full Institution Address:</label>
                                        <textarea style="resize: none;" rows="3" name="address" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <div class="form-group">
                                        <a href="institution.php" class="btn btn-danger">Cancel</a>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="submit" name="reg" class="btn btn-primary">Register Institution</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                        //form implementation
                        if (isset($_POST['reg'])) {
                            $center_number = $_POST['center_number'];
                            $institution_name = $_POST['institution_name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            
                            $ses->registerInstitution($center_number, $institution_name, $phone, $email, $address);
                            echo "<script>alert('Operation Successful!'); window.location.href='institution.php';</script>";
                        }
                        ?>
                    </div>
                    <!--Footer-->    
                    <?php include 'includes/footer.php'; ?>
                    <!--/Footer-->    
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
        <script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
