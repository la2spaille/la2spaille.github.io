<?php
phpinfo();
die();
$curl = curl_init("https://dashboard.genuka.com/api/2021-10/companies/byurl?url=http://" . $_SERVER["HTTP_HOST"] . "/");

curl_setopt_array($curl, [
    CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'cert.pem',
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
    CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'cert.pem',
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
$curl = curl_init("https://dashboard.genuka.com/api/2021-10/companies/$compagnyId/collections");
curl_setopt_array($curl, [
    CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'cert.pem',
    CURLOPT_RETURNTRANSFER => true
]);
$collection = curl_exec($curl);
if ($collection === false) {
    var_dump(curl_error($curl));
} else {
    $collection = json_decode($collection, true);
}
curl_close($curl);

require('header.php');
?>

<main>
    <section class="l-product">
        <div class="l-rl">
            <div class="l-tb">
                <div class="w-page-title">
                    <h1><span>Nos produits</span></h1>
                </div>
                <div class="w-product">
                    <div class="w-product-filter">
                        <strong>Filter par :</strong>
                        <div>
                            <span>Tout les produits</span>
                            <?php for ($i = 0; $i < count($collection['data']); $i++) : ?>
                                <span><?= $collection['data'][$i]['name'] ?></span>
                            <?php endfor ?>
                        </div>

                    </div>
                    <div class="w-product-card-wrapper">
                        <?php for ($i = 0; $i < count($product['data']); $i++) : ?>
                            <div class="w-product-card">
                                <div class="w-img product">
                                    <img src="<?= $product['data'][$i]['medias'][0]['link'] ?>" alt="">
                                </div>
                                <div class="w-text product">
                                    <h3 class="w-product-name "><span><?= $product['data'][$i]['name'] ?></span></h3>
                                    <strong class="w-product-discounted_price"><?= $product['data'][$i]['discounted_price'] . " " . $compagny['currency']['symbol'] ?></strong>
                                </div>
                                <a class="w-product-link" href="/products/product-page.php?id=<?= array_keys($product['data'])[$i] ?>"></a>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require('footer.php') ?>