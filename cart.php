<?php require 'inc/head.php';
require 'inc/data/products.php';

if (!isset($_SESSION['name'])) {
    header("Location:login.php");
}
?>

<section class="cookies container-fluid">
    <div class="row">
        <h2>My shopping cart :</h2>
        <?php
        if (!empty($_SESSION['cart'])) :
            foreach ($catalog as $key => $cookie) :
                if (in_array($key, $_SESSION['cart'])) : ?>
                    <li><?= $cookie['name']; ?></li>
            <?php endif;
            endforeach;
        endif;
        if (empty($_SESSION['cart'])) : ?>
            Oops... It's empty !
        <?php endif ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>