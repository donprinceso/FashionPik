<?php require_once APPROOT . '/views/Template/header.php';?>
<title><?php echo SITE_NAME; ?></title>
<?php require_once APPROOT . '/views/Template/headEnd.php';?>
<!-- linking the navbar -->
<?php require_once APPROOT . '/views/Template/navgetation.php';?>
<!-- End of the navbar -->
<!-- Slide View Link -->
<?php require_once APPROOT . '/views/inc/slide.php';?>
<!-- The make an order with us content -->
<div class="container ">
    <div class="row">
        <?php
           if(count($data)):
                foreach($data as $product):
            ?>
            <div class="card col s12 l4 z-depth-2">
                <div class="card-image">
                    <img src="<?php echo SITE_URL;?>public/img/<?php echo $product->img;?>">
                    <h5 class="card-title teal-text"><?php echo ucfirst($product->name);?></h5>
                </div>
                <div class="card-action">
                    <a>Prize:<span>$<?php echo $product->price;?></span></a>
                    <div class="right">
                        <a href="#" class="btn btn-small">Buy</a>
                        <a href="#" class="btn btn-small">View</a>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class=" container center-align teal-text title">No Product in this site for now come back later</div>
            <?php endif; ?>
            
        </div>
</div>


<br>
<?php require_once APPROOT . '/views/Template/footer.php';?>