<?php
$modal_ses = new MySessions();
//Login modal implementation
if (isset($_POST['sign_in'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login_val = $modal_ses->getLoginByUsernamePassword($username, $password);
    if ($login_val != NULL) {
        $_SESSION['uid'] = $login_val['login_id'];
        $_SESSION['role'] = $login_val['role'];
        echo "<script>window.location.href='admin/index.php';</script>";
    } else {
        echo "<script>alert('Error: Incorrect sign in details!');</script>";
    }
}
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-theme1">
                <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" name="signinform" class="p-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder=" " name="username" id="recipient-name"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="password" id="password"
                               required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" name="sign_in" class="form-control bg-theme" value="Sign In">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>