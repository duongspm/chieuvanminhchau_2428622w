<div class="header">
    <div class="header__top">
        <div class="wrapper">
            <div class="header__slogan">
                <div class="marquee">
                    <div>
                        <span>
                            <?=$sloganheader['name'.$lang]?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="header__address">
                <div>
                    <img src="assets/images/images/icon-address.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>
                    <?=$optsetting['address']?>
                </span>
            </div>

        </div>
    </div>
    <!-- <div class="wrapper">
        <div class="header__bg--logo">
            <img src="assets/images/images/bg-logo01.png" alt="">
        </div>
        <div class="header__logo">
            
        </div>
        <div class="header__buttom">
            <div class="header__info-item">

            </div>
            <div class="header__info-item">
                <div class="header__banner">
                    <?=$func->getImage(['sizes' => '444x87x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $bannerheader['photo'], 'alt' => $setting['name'.$lang]])?>
                </div>
            </div>
            <div class="header__info-item">
                <div class="header__open">
                    <div class="header__open--time">
                        <div class="header__icon">
                            <img src="assets/images/images/icon-open.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <?php if(!empty($opentime)){?>
                        <span>
                            Mở cửa: <?=$opentime['name'.$lang]?>
                        </span>
                        <?php }?>
                    </div>
                    <div class="header__hotline">
                        <div class="header__icon">
                            <img src="assets/images/images/icon-phone.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <span>
                            Hotline:
                        </span>
                        <a
                            href="tel:<?=$func->formatPhone($optsetting['phone'])?>"><?=$func->formatPhone($optsetting['phone'])?></a>
                    </div>
                </div>
            </div>
        </div>

    </div> -->

</div>