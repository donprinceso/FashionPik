<?php require_once APPROOT.'/views/users/Inc/headStart.php'; ?>
<title>User Dashoard</title>
<?php require_once APPROOT.'/views/users/Inc/headEnd.php'; ?>

<?php require_once APPROOT.'/views/users/Inc/sidebar.php'; ?>
   
    <main>
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
            <!-- <div class="card col s12 l4 z-depth-2">
                <div class="card-image">
                    <img src="<?php echo SITE_URL;?>public/img/shoe.jpg">
                    <h5 class="card-title teal-text">Shoe May</h5>
                </div>
                <div class="card-action">
                    <a>Prize:<span>$3000</span></a>
                    <div class="right">
                        <a href="#" class="btn btn-small">Buy</a>
                        <a href="#" class="btn btn-small">View</a>
                    </div>
                </div>
            </div>
            <div class="card col s12 l4 z-depth-2">
                <div class="card-image">
                    <img src="<?php echo SITE_URL;?>public/img/shoe.jpg">
                    <h5 class="card-title teal-text">Shoe May</h5>
                </div>
                <div class="card-action">
                    <a>Prize:<span>$3000</span></a>
                    <div class="right">
                        <a href="#" class="btn btn-small">Buy</a>
                        <a href="#" class="btn btn-small">View</a>
                    </div>
                </div>
            </div> -->
            
        </div>
    </main>

<?php require_once APPROOT.'/views/users/Inc/footer.php'; ?>