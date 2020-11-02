<?php require 'inc/data/products.php'; 
      require 'inc/head.php'; 
      require 'function.php'; 
      
      if (!empty($_GET)) {
        $cookie = $_GET['add_to_cart'];
        addArticle($cookie);
    }
    
    if (empty($_SESSION['loginname'])) {
        header('Location: http://localhost:8000/login.php');
        exit();
    } ?>

<div class="container-fluid text-right">
    <?php if (isset($_SESSION['loginname'])) { ?>
        <strong>Hello <?= $_SESSION['loginname']?></strong>
        
        <a href="logout.php" class="btn btn-warning navbar-btn">
        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
        Log Out
        </a>
       
    <?php } else {?>
        <strong>Hello Wilder</strong>
    <?php } ?>
</div>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
