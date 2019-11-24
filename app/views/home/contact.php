<?php require_once APPROOT.'/views/Template/header.php'; ?>
<title><?php echo SITE_NAME; ?></title>
<?php require_once APPROOT.'/views/Template/headEnd.php'; ?>
<!-- linking the navbar -->
<?php require_once APPROOT.'/views/Template/navgetation.php'; ?>
<!-- End of the navbar -->
<!-- Slide View Link -->
<?php require_once APPROOT.'/views/inc/slide.php'; ?>
<!-- The make an order with us content -->
<div class="container">
<div class="centered center-align">
    <div class="title">
        <h3>Contact Us</h3>
    </div>
    <div class="container">
        <form action="" method="post">
            <div class="input-field">
                <input type="text" name="name" id="name" class=" grey-text text-darken-2">
                <label for="name">Name</label>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email" class=" grey-text text-darken-2">
                <label for="email">Email Address</label>
            </div>
            <div class="input-field">
                <textarea class="materialize-textarea" name="note" id="note" cols="30" rows="10"></textarea>
                <label for="content">Fill Your Message Here</label>
            </div>
            <input type="submit" value="Submit" class="btn btn-large btn-block">
        </form>
    </div>
    <br>
</div>
</div>
<?php require_once APPROOT.'/views/Template/footer.php'; ?>