<?php require 'inc/head.php';
require 'inc/data/products.php';


?>
<section class="cookies container-fluid">
<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($_SESSION['cart'])){ 
                foreach ($_SESSION['cart'] as $key => $value) {
                    $cookie = $catalog[$key];
                ?>
                <tr>
                    <th scope="row">#</th>
                    <td><?php echo $cookie['name'] ?></td>
                    <td><?php echo $cookie['description'] ?></td>
                </tr>
            <?php } 
            } ?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>