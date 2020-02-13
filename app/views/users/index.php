<?php require_once APPROOT.'/views/users/Inc/headStart.php'; ?>
<title>User Dashoard</title>
<?php require_once APPROOT.'/views/users/Inc/headEnd.php'; ?>

<?php require_once APPROOT.'/views/users/Inc/userNav.php'; ?>
<?php require_once APPROOT.'/views/users/Inc/sidebar.php'; ?>
   
    <main>
        <div class="row">
        <?php
           if(count($data) > 0):
                foreach($data as $product):
            ?>
            <div class="card col s12 l3">
                <div class="card-image">
                    <img src="<?php echo SITE_URL;?>/<?php echo $product['img'];?>">  
                    <h4 class=" card-title red-text"><?php echo ucfirst($product['name']);?></h4>
                    <a  class=" teal-text">Price <span class="red-text">#<?php echo ($product['price']);?></span></a>
                </div>
                <div class="card-action">
                    <a href="" class="teal-text">Add To Cart</a>
                    <a href="" class="teal-text">View Product</a>
                </div>
            </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class=" container center-align teal-text title">No Product in this site for now come back later</div>
            <?php endif; ?>
            
        </div>
    </main>

<?php require_once APPROOT.'/views/users/Inc/footer.php'; ?>