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
                                    <div>Certificate Records
                                        <!--<div class="page-title-subheading">
                                            This is an example dashboard created using build-in elements and components.
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>            
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table bg-white table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Center Number</th>
                                            <th>Certificate Number</th>
                                            <th>Student Full Name</th>
                                            <th>Institution Name</th>
                                            <th>File</th>
                                            <th>Reg. Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $counter = 1;
                                        $certificate = $ses->getAllCertificate();
                                        foreach ($certificate as $cert) {
                                            $reg_date = date_format(date_create($cert['reg_date']), "d M Y");
                                            $inst = $ses->getSingleInstitutionByNumber($cert['center_number']);
                                            ?>
                                            <tr>
                                                <td><?php echo $counter ?></td>
                                                <td><?php echo $cert['center_number'] ?></td>
                                                <td><?php echo $cert['certificate_number'] ?></td>
                                                <td><?php echo $cert['student_fullname'] ?></td>
                                                <td><?php echo $inst['institution_name'] ?></td>
                                                <td><a target="_blank" href="../certificates/<?php echo $cert['file_url'] ?>">View</a></td>
                                                <td><?php echo $reg_date ?></td>
                                            </tr>
                                            <?php
                                            $counter++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
