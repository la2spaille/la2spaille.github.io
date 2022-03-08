<footer>
    <div class="l-lr">
        <div class="l-tb">
            <div class="w-footer">
                <div class="w-nav footer">
                    <nav>
                        <span><a href="test.html">Acceuil</a></span>
                        <span><a href="">Produits</a></span>
                        <span><a href="">Contact</a></span>
                    </nav>
                </div>
                <div class="w-compagny-info">
                    <div class="w-logo footer">
                        <span>LOGO</span>
                    </div>
                    <div class="w-text footer">
                        <p class="w-compagny-description">
                            <span>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non saepe exercitationem deleniti magnam quo neque earum aspernatur. Ipsum, eos non?
                            </span>
                        </p>
                    </div>
                </div>
                <div class="w-newsletter">
                    <div class="w-text footer">
                        <h3>Newsletter</h3>
                        <p><span>Ne manquez plus nos offres et promotions. Inscrivez-vous à notre newsletter en enregistrant votre email/ numéro de téléphone</span></p>
                    </div>
                    <label>
                        <input type="email" placeholder="Email">
                        <button type="submit">Go</button>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="attribution">
        <strong>
            created by <a rel="noopener" href="https://twitter.com/la2spaille?t=DKdFp3xhoD0HMBn9TGa6Rw&amp;s=09"><span>@La2spaille</span></a> - Boutique propulsée par<a rel="noopener" href="https://www.devchallenges.io" target="_blank"> Genuka</a>. Version 1.1.4
        </strong>
    </div>
</footer>
<div class="w-lightboxes">
    <div class="w-bag">
        <div class="w-product-list">
            <span>Votre panier est vide.</span>
        </div>
        <div class="w-bag-total">
            <div class="w-bag-total-detail">
                <div class="price-ht">
                    <div><strong>Sous-total </strong></div>
                    <div><strong><?= $compagny['currency']['symbol'] ?></strong></div>
                </div>
                <div class="tva">
                    <div><strong>Livraison </strong></div>
                    <div><strong><?= $compagny['currency']['symbol'] ?></strong></div>
                </div>
                <div class="price-tc">
                    <div><strong>Total</strong></div>
                    <div><strong id="total"><?= $compagny['currency']['symbol'] ?></strong></div>
                </div>
            </div>
            <button class="bag-btn">Procéder au paiement</button>
        </div>
    </div>
    <div class="w-account">
        <div class="w-account-log-in">
            <strong>Connectez-vous</strong>
            <div class="w-account-log-in-input">
                <label>
                    <input type="email" placeholder="Email *">
                </label>
                <label>
                    <input type="password" placeholder="Mot de passe *">
                    <button>afficher</button>
                </label>
            </div>
            <div class="checkbox--container">
                <label>
                    <input id="validation" type="checkbox" name="privacy" value="true">
                    <span id="validation--style"></span>
                    <span>I have read and agree to the <a href="/en/privacy-cookies-notice" target="_blank">privacy policy</a>.</span>
                </label>
            </div>
        </div>
        <div class="w-account-btn">
            <button class="account-btn">S'inscrire</button>
            <button class="account-btn bis">Se connecter</button>

        </div>
    </div>
</div>
</div>
<script src="/js/app.js"></script>
</body>

</html>