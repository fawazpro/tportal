<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img src="assets/media/image/dark-logo.png" alt="image">
    </div>
    <!-- ./ logo -->


    <h5>Create account</h5>

    <!-- form -->
    <form action="<?= base_url('postregister') ?>" method="POST">
        <div class="form-group">
            <input type="text" name="fname" class="form-control" placeholder="Firstname" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" name="lname" class="form-control" placeholder="Lastname" required>
        </div>
        <div class="form-group">
            <select name="sex" class="form-control" required>
                <option>Choose a gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="scode" class="form-control" placeholder="Special Code" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="pass" class="form-control" placeholder="Password" required minlength="6">
        </div>
        <div class="form-group">
            <select name="subj1" class="form-control mb-4">
                <option value="">Select subject 1</option>
                <?php foreach ($subjects as $key => $subject) : ?>
                    <option value="<?= $subject['subject'] ?>"><?= $subject['subject'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <select name="subj2" class="form-control mb-4">
                <option value="">Select subject 2</option>
                <?php foreach ($subjects as $key => $subject) : ?>
                    <option value="<?= $subject['subject'] ?>"><?= $subject['subject'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <hr>
        <p class="text-center">Account Details</p>
        <div class="form-group">
            <input type="text" name="bname" class="form-control" placeholder="Bank Name" required>
        </div>
        <div class="form-group">
            <input type="text" name="accname" class="form-control" placeholder="Account Name" required>
        </div>
        <div class="form-group">
            <input type="text" name="accnumb" class="form-control" placeholder="Account Number" required>
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Register">
    </form>
    <hr>
    <p class="text-muted">Already have an account?</p>
    <a href="login" class="btn btn-outline-light btn-sm">Sign in!</a>

    <!-- ./ form -->


</div>