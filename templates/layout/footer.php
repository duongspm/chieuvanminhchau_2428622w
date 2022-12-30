<div class="footer">
    <div class="wrapper">
        <div class="footerr">
            <div class="footer-item">
                <div class="footer__logo">
                    <a href="" title="<?=trangchu?>" class="peShinerr">
                        <?=$func->getImage(['sizes' => '214x214x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                </div>
                <div class="footer-social">
                    <?php if(!empty($social)){foreach($social as $v){?>
                    <a class="social-item" href="<?=$v['link']?>">
                        <?=$func->getImage(['class' => '', 'sizes' => '40x40x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                    <?php }}?>

                </div>
            </div>
            <div class="footer-item">
                <div class="footer-name">
                    <span><?=$setting['name'.$lang]?></span>
                </div>
                <div class="footer__info">
                    <div class="ft__info--item">
                        <div>
                            <img src="assets/images/images/icon-footer-01.png" alt="">
                        </div>
                        <span>
                            Địa chỉ: <?=$optsetting['address']?>
                        </span>
                    </div>
                    <div class="ft__info--item">
                        <div>
                            <img src="assets/images/images/icon-footer-02.png" alt="">
                        </div>
                        <span>
                            Hotline: <a
                                href="tel:<?=$func->formatPhone($optsetting['hotline'])?>"><?=$func->formatPhone($optsetting['hotline'])?></a>
                        </span>
                    </div>
                    <div class="ft__info--item">
                        <div>
                            <img src="assets/images/images/icon-footer-03.png" alt="">
                        </div>
                        <span>
                            Email: <?=$optsetting['email']?>
                        </span>
                    </div>
                    <div class="ft__info--item">
                        <div>
                            <img src="assets/images/images/icon-footer-04.png" alt="">
                        </div>
                        <span>
                            Website: <?=$optsetting['website']?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="footer-item">
                <sfpan class="footer--title">
                    fanpage
                </sfpan>
                <div class="footer-fb">
                    <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" data-width="500"
                        data-height="220" data-small-header="true" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="<?=$optsetting['fanpage']?>">
                                <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper copyrightt">
            <div class="copyright-left">
                <span>Copyright © 2022
                    <span class="settingname">
                        <?=$setting['name'.$lang]?>
                    </span>. Design <span class="settingname">By Nina</span>
                </span>
            </div>
        </div>
    </div>
</div>
<?php if (!empty($optsetting['coords_iframe'])){?>
<?= $addons->set('footer-map', 'footer-map', 6); ?>
<?php }?>
<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>