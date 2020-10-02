<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img src="assets/media/image/dark-logo.png" alt="image">
    </div>
    <!-- ./ logo -->

    
    <h5>Sign in</h5>

    <!-- form -->
    <form method="post" action="postlogin">
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="pass" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <!-- <a href="recovery-password.html">Reset password</a> -->
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Sign In">
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="register" class="btn btn-outline-light btn-sm">Register now!</a>
    </form>
    <!-- ./ form -->


</div>