<?php
$curl = curl_init("https://dashboard.genuka.com/api/2021-10/companies/details/489");
curl_setopt_array($curl, [
    CURLOPT_CAINFO => $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'cert.pem',
    CURLOPT_RETURNTRANSFER => true
]);
$compagny = curl_exec($curl);
if ($compagny === false) {
    var_dump(curl_error($curl));
} else {
    $compagny = json_decode($compagny, true);
    $compagnyId = $compagny['id'];
}
curl_close($curl);
//
//
//
$curl = curl_init("https://dashboard.genuka.com/api/2021-10/companies/$compagnyId/products");
curl_setopt_array($curl, [
    CURLOPT_CAINFO => $_SERVER['DOCUMENT_ROOT']  . DIRECTORY_SEPARATOR . 'cert.pem',
    CURLOPT_RETURNTRANSFER => true
]);
$product = curl_exec($curl);
if ($product === false) {
    var_dump(curl_error($curl));
} else {
    $product = json_decode($product, true);
}
curl_close($curl);
// 
// 
// 
$productGetId = $_GET['id'];
require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header.php')
?>

    <main>
        <section class="l-product-page">
            <div class="l-rl">
                <div class="l-tb">
                    <div class="w-2-half-wrapper">
                        <div class="w-gallery product-page">
                            <div class="w-img product-page primary">
                                <img src="<?= $product['data'][$productGetId]['medias'][0]['link'] ?>" alt="">
                            </div>
                        </div>
                        <div class="w-text product-page">
                                <h1 class="product-name"><span><?= $product['data'][$productGetId]['name'] ?></span></h1>
                                <div class="product-description"><?= $product['data'][$productGetId]['description'] ?></div>
                                <div class="w-product-price">
                                    <div class="product-discounted_price"><span><?= $product['data'][$productGetId]['discounted_price'] . " " . $compagny['currency']['symbol'] ?></span></div>
                                    <?php if ($product['data'][$productGetId]['comparaison_price'] != 0) :?>
                                        <div class="product-reduction"><span><?= "-" . ($product['data'][$productGetId]['price']-$product['data'][$productGetId]['discounted_price'])*100/$product['data'][$productGetId]['price'] . "%" ?></span></div>
                                        <div class="product-price"><span><?= $product['data'][$productGetId]['price'] . " " . $compagny['currency']['symbol'] ?></span></div>
                                    <?php endif ?>
                                </div>
                                <div class="c-add-to-cart">
                                    <div class="w-add-to-cart-input">
                                        <div class="minus"><span>-</span></div>
                                        <div data-qty="0" data-id="<?= $product['data'][$productGetId]['id'] ?>"  data-index="<?= $productGetId ?>" data-price="<?= $product['data'][$productGetId]['discounted_price'] ?>"   class="add-to-cart-input"><span>0</span></div>
                                        <div class="plus"><span>+</span></div>
                                    </div>
                                    <button class="btn-add-to-cart"><span>Ajouter au panier</span></button>
                                </div>
                            </div>
                           
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'footer.php') ?>