<?php require_once APPROOT.'/views/users/Inc/headStart.php'; ?>
<title>User Dashoard</title>
<?php require_once APPROOT.'/views/users/Inc/headEnd.php'; ?>

<?php 
    if($_SESSION['user_role'] == 'user'){
        require_once APPROOT.'/views/users/index.php';
    }
    elseif($_SESSION['user_role'] == 'admin'){
        require_once APPROOT.'/views/admin/index.php';
    }else{
        require_once APPROOT.'/views/users/index.php';
    }

?>


<?php require_once APPROOT.'/views/users/Inc/footer.php'; ?>