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
                                    <div>Institutions
                                        <!--<div class="page-title-subheading">
                                            This is an example dashboard created using build-in elements and components.
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>            
                        <div class="row">
                            <div class="col-md-12 text-right" style="margin-bottom: 20px;">
                                <a class="btn btn-primary" href="institution_reg.php">Register New Institution</a>
                            </div>
                            <div class="col-md-12">
                                <table class="table bg-white table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Center Number</th>
                                            <th>Institution Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Reg. Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $institutions = $ses->getAllInstitution();
                                        $counter = 1;
                                        foreach ($institutions as $institut) {
                                            $reg_date = date_format(date_create($institut['reg_date']), "d M Y");
                                            ?>
                                            <tr>
                                                <td><?php echo $counter ?></td>
                                                <td><?php echo $institut['center_number'] ?></td>
                                                <td><?php echo $institut['institution_name'] ?></td>
                                                <td><?php echo $institut['phone'] ?></td>
                                                <td><?php echo $institut['email'] ?></td>
                                                <td><?php echo $institut['address'] ?></td>
                                                <td><?php echo $reg_date ?></td>
                                                <td>
                                                    <form method="post" onsubmit="return confirm('Delete this institution!')">
                                                        <input type="hidden" value="<?php echo $institut['center_number'] ?>" name="delid"/>
                                                        <button type="submit" name="del" class="btn btn-danger fa fa-trash"></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                            $counter++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                //delete implementation
                                if(isset($_POST['del'])){
                                    $delid = $_POST['delid'];
                                    $ses->deleteInstitution($delid);
                                    echo "<script>alert('Operation successful!'); window.location.href='institution.php';</script>";
                                }
                                ?>
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
