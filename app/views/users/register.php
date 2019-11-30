<?php require_once APPROOT.'/views/Template/header.php'; ?>
<title><?php echo SITE_NAME; ?></title>
<?php require_once APPROOT.'/views/Template/headEnd.php'; ?>
<!-- linking the navbar -->
<?php require_once APPROOT.'/views/Template/navgetation.php'; ?>
<!-- End of the navbar -->
<div class="row container">
    <div class="card col s12 m6 l6 offset-m3 offset-l3">
            <h5 class="center-align teal white-text card-panel">Register</h5>
            <form action="<?php echo htmlspecialchars(SITE_URL.'users/register') ?>" method="post">
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i> 
                    <input type="text" name="name" id="name" class=" validate 
                    <?php echo (!empty($data['name']))? 'is-invalid' : '';?>"
                    value="<?php echo($data['name']);?>"/>
                    <label for="name">Name</label>
                    <span class=" invalid-feedback red-text"><?php echo($data['name_err']); ?></span>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" class=" validate 
                    <?php echo (!empty($data['email']))? 'is-invalid' : '';?>"
                    value="<?php echo($data['email']);?>"/>
                    <label for="email"> Email Address</label>
                    <span class=" invalid-feedback red-text"><?php echo($data['email_err']); ?></span>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">phonelink_lock</i>
                    <input type="password" name="password" id="password" class=" validate 
                    <?php echo (!empty($data['password']))? 'is-invalid' : '';?>"
                    value="<?php echo($data['password']);?>"/>
                    <label for="password"> password</label>
                    <span class=" invalid-feedback red-text"><?php echo($data['password_err']); ?></span>
                </div>
                <p class="left"><a class="teal-text" href="<?php echo SITE_URL."users/login" ?>">
                <i class=" material-icons prefix">unlock</i>login</a></p>
                <button type="submit" class="btn waves-effect waves-darken-4 right"> 
                    <i class="material-icons prefix">lock</i>
                    Sign Up
                </button>
            </form>
    </div>
</div>
<?php require_once APPROOT.'/views/Template/footer.php'; ?>