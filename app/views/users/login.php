<?php require_once APPROOT.'/views/Template/header.php'; ?>
<title><?php echo SITE_NAME; ?></title>
<?php require_once APPROOT.'/views/Template/headEnd.php'; ?>
<!-- linking the navbar -->
<?php require_once APPROOT.'/views/Template/navgetation.php'; ?>
<!-- End of the navbar -->
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="card col s12 m6 l6 offset-m3 offset-l3">
                <h5 class="center-align teal white-text card-panel">Login</h5>
                <br>
                <form action="<?php htmlspecialchars(SITE_URL.'users/login');?>" method="post">
                    <div class="input-field">
                        <input type="email" name="email" id="email" class=" validate 
                    <?php echo (!empty($data['email']))? 'is-invalid' : '';?>"
                    value="<?php echo($data['email']);?>"/>
                        <label for="email">Email Address</label>
                        <span class="invalid-feedback red-text"><?php echo($data['email_err']); ?></span>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" class=" validate 
                    <?php echo (!empty($data['password']))? 'is-invalid' : '';?>"
                    value="<?php echo($data['password']);?>"/>
                        <label for="password">Password</label>
                        <span class="invalid-feedback red-text"><?php echo($data['password_err']); ?></span>
                    </div>
                    <p class="right"><a class="teal-text" href="<?php echo SITE_URL.'users/register' ?>">Register</a></p>
                    <button type="submit" name="login" class="btn btn-block">login</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        
    </script>
<?php require_once APPROOT.'/views/Template/footer.php'; ?>