<div class="about">
    <div class="img-item-01 img-item">
        <img src="assets/images/images/img-item-02.png" alt="<?=$setting['name'.$lang]?>">
    </div>
    <div class="img-item-02 img-item">
        <img src="assets/images/images/img-item-01.png" alt="<?=$setting['name'.$lang]?>">
    </div>
    <div class="wrapper">
        <?php if(!empty($about)){?>
        <div class="aboutt">
            <div class="about__left">
                <div class="about__left--img">
                    <?= $func->getImage(['class' => '', 'sizes' => '400x490x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about[0]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
            </div>
            <div class="about__right">
                <span class="about__title">
                    Welcome
                </span>
                <div class="about__heading">
                    <!-- <span><?=$about[0]['name'.$lang]?></span> -->
                    <span class="about__name--top">
                        <?php
                            $name = $about[0]['name'.$lang];
                            $nametop = substr($name ,0,-7);
                            echo $nametop;
                        ?>
                    </span>
                    <span class="about__name--bottom">
                        <?php
                            $name = $about[0]['name'.$lang];
                            $namebottom = substr($name ,-7);
                            echo $namebottom;
                        ?>
                    </span>
                </div>
                <div class="about__content">
                    <span>
                        <?=$about[0]['desc'.$lang]?>
                    </span>
                    <div class="about__btn">
                        <a href="gioi-thieu" title="Giới thiệu" class="btn-xemthem"><span>Xem thêm</span><img
                                src="assets/images/images/icon-btn.png" alt="<?=$setting['name'.$lang]?>"></a>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<div class="dichvu">
    <div class="img-item-03">
        <img src="assets/images/images/img-item077.png" alt="">
    </div>
    <div class="wrapper">
        <div class="dichvuu">
            <div class="heading">
                <div class="heading__name heading__name--white">
                    <span class="heading--title">Dịch vụ spa</span>
                </div>
                <span class="heading__slogan heading__slogan--white">
                    <?=$slogan['name'.$lang]?>
                </span>
            </div>
            <?php if (!empty($dichvunb)) { ?>
            <?php if (!empty($dichvulist)) { ?>
            <div class="border-radius-linear">
                <div class="title-product-list text-center">
                    <?php foreach ($dichvulist as $key => $vl) : ?>
                    <a class="text-decoration-none a-title-product"
                        data-list="<?= $vl['id'] ?>"><?= $vl['name' . $lang] ?></a>
                    <div class="a-title-product-line"></div>
                    <?php endforeach ?>
                </div>
            </div>
            <?php } ?>
            <div class="dichvu__list">
                <div class="paging-product-list"></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="albumm">
    <div class="img-item-album img-item">
        <img src="assets/images/images/img-item-05.png" alt="">
    </div>
    <div class="wrapper">
        <div class="albummm">
            <div class="heading">
                <div class="heading__name heading__name--black">
                    <span class="heading--title2">Hình ảnh không gian</span>
                </div>
                <span class="heading__slogan heading__slogan--gradient">
                    <?=$slogan['name'.$lang]?>
                </span>
            </div>
            <div class="album__list">
                <div class="album__column">
                    <?php if(!empty($thuvienanh[0])){?>
                    <div class="album__item">
                        <a class="album-image scale-img" href="<?=$thuvienanh[0][$sluglang]?>"
                            title="<?=$thuvienanh[0]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '380x440x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[0]['photo'], 'alt' => $thuvienanh[0]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($thuvienanh[1])){?>
                    <div class="album__item">
                        <a class="album-image scale-img" href="<?=$thuvienanh[1][$sluglang]?>"
                            title="<?=$thuvienanh[1]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '380x285x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[1]['photo'], 'alt' => $thuvienanh[1]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="album__column">
                    <?php if(!empty($thuvienanh[2])){?>
                    <div class="album__item">
                        <a class="album-image scale-img" href="<?=$thuvienanh[2][$sluglang]?>"
                            title="<?=$thuvienanh[2]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '380x285x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[2]['photo'], 'alt' => $thuvienanh[2]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($thuvienanh[3])){?>
                    <div class="album__item">
                        <a class="album-image scale-img" href="<?=$thuvienanh[3][$sluglang]?>"
                            title="<?=$thuvienanh[3]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '380x440x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[3]['photo'], 'alt' => $thuvienanh[3]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="album__column">
                    <?php if(!empty($thuvienanh[4])){?>
                    <div class="album__item">
                        <a class="album-image scale-img" href="<?=$thuvienanh[4][$sluglang]?>"
                            title="<?=$thuvienanh[4]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '380x440x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[4]['photo'], 'alt' => $thuvienanh[4]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($thuvienanh[5])){?>
                    <div class="album__item">
                        <a class="album-image scale-img" href="<?=$thuvienanh[5][$sluglang]?>"
                            title="<?=$thuvienanh[5]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '380x285x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[5]['photo'], 'alt' => $thuvienanh[5]['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="albumd__list-mobile">
                <?php for ($i=0; $i < count($thuvienanh); $i++) { ?>
                <?php if(!empty($thuvienanh[$i])){?>
                <div class="album__item">
                    <a class="album-image scale-img" href="<?=$thuvienanh[$i][$sluglang]?>"
                        title="<?=$thuvienanh[$i]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '380x285x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[$i]['photo'], 'alt' => $thuvienanh[$i]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
                <?php }?>
            </div>
            <?php if(count($thuvienanh)>6){?>
            <div class="album__btn">
                <a href="thu-vien-anh" title="Thư viện ảnh" class="btn-xemthem"><span>Xem thêm</span><img
                        src="assets/images/images/icon-btn.png" alt="<?=$setting['name'.$lang]?>"></a>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<div>
    <?php if(!empty($banner)){?>
    <div class="banner effect10">
        <?= $func->getImage(['class' => 'lazy', 'sizes' => '1366x453x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => "about"]) ?>
    </div>
    <?php }?>
</div>

<div class="feedback">
    <div class="img-item-feedback img-item">
        <img src="assets/images/images/img-item-07.png" alt="">
    </div>
    <div class="heading">
        <div class="heading__name heading__name--black">
            <span class="heading--title2">Feedback khách hàng</span>
        </div>
        <span class="heading__slogan heading__slogan--gradient">
            <?=$slogan['name'.$lang]?>
        </span>
    </div>
    <div class="feedback__list">
        <?php if(!empty($feedback)){?>
        <div class="slick--feedback">
            <?php foreach($feedback as $v){?>
            <div>
                <div class="feedback__item">
                    <div class="feedback--circle">
                        <div class="feedback__img">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '184x184x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                    </div>
                    <div class="feedback__content">
                        <span class="feedback__name">

                            <?=$v['name'.$lang]?>
                        </span>
                        <span class="feedback__desc">
                            <?=$v['desc'.$lang]?>
                        </span>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
        <?php }?>
    </div>
</div>

<div class="blog">
    <div class="wrapper">
        <div class="blogg">
            <div class="heading">
                <div class="heading__name heading__name--white">
                    <span class="heading--title">tin tức & sự kiện</span>
                </div>
                <span class="heading__slogan heading__slogan--white">
                    <?=$slogan['name'.$lang]?>
                </span>
            </div>
            <div class="blog__list">
                <?php if (!empty($newsnb)) { ?>
                <div class="blog__left">
                    <?php if(!empty($newsnb[0])){?>
                    <div class="blog__item">
                        <a href="<?=$newsnb[0][$sluglang]?>">
                            <div class="blog__item--img blog__img--left effect10">
                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '386x519x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[0]['photo'], 'alt' => $newsnb[0]['name'.$lang]]) ?>
                            </div>
                            <span class="blog__item--name">
                                <?=$newsnb[0]['name'.$lang]?>
                            </span>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="blog__middle">
                    <?php if(!empty($newsnb[1])){?>
                    <div class="blog__item">
                        <a href="<?=$newsnb[1][$sluglang]?>">
                            <div class="blog__item--img effect10">
                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '371x217x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[1]['photo'], 'alt' => $newsnb[1]['name'.$lang]]) ?>
                            </div>
                            <span class="blog__item--name">
                                <?=$newsnb[1]['name'.$lang]?>
                            </span>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($newsnb[2])){?>
                    <div class="blog__item">
                        <a href="<?=$newsnb[2][$sluglang]?>">
                            <div class="blog__item--img effect10">
                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '371x217x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[2]['photo'], 'alt' => $newsnb[2]['name'.$lang]]) ?>
                            </div>
                            <span class="blog__item--name">
                                <?=$newsnb[2]['name'.$lang]?>
                            </span>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="blog__right">
                    <?php if(!empty($newsnb[3])){?>
                    <div class="blog__item">
                        <a href="<?=$newsnb[3][$sluglang]?>">
                            <div class="blog__item--img blog__img--right-top effect10">
                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '371x217x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[3]['photo'], 'alt' => $newsnb[3]['name'.$lang]]) ?>
                            </div>
                            <span class="blog__item--name">
                                <?=$newsnb[3]['name'.$lang]?>
                            </span>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($newsnb[4])){?>
                    <div class="blog__item">
                        <a href="<?=$newsnb[4][$sluglang]?>">
                            <div class="blog__item--img blog__img--right-bottom effect10">
                                <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '371x217x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[4]['photo'], 'alt' => $newsnb[4]['name'.$lang]]) ?>
                            </div>
                            <span class="blog__item--name">
                                <?=$newsnb[4]['name'.$lang]?>
                            </span>
                        </a>
                    </div>
                    <?php }?>
                </div>

                <?php } ?>
            </div>
            <?php if(count($newsnb)>5){
            ?>
            <div class="blog__btn">
                <a href="tin-tuc" title="Tin tức" class="btn-xemthem"><span>Xem thêm</span><img
                        src="assets/images/images/icon-btn.png" alt="<?=$setting['name'.$lang]?>"></a>
            </div>
            <?php } ?>

        </div>
    </div>
</div>

<div class="dangky">
    <div class=" wrapper">
        <div class="dangkyy">

            <div class="heading heading__dangky">
                <div class="heading__name heading__name--black">
                    <span class="heading__dangky--hover">Đặt lịch ngay</span>
                </div>
                <span class="heading__slogan heading__slogan--gradient">
                    <?=$slogan['name'.$lang]?>
                </span>
            </div>

            <div class="dangky__frame">
                <div class="img-item-dk img-item">
                    <img src="assets/images/images/img-item-09.png" alt="">
                </div>
                <div class="img-item-dk02 img-item">
                    <img src="assets/images/images/img-item-08.png" alt="">
                </div>
                <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="dangky__form">
                        <div class="newsletter-input">
                            <div class="line__dangky"></div>
                            <input type="text" class="form-controld form-d1 text-sm" id="fullname-newsletter"
                                name="dataNewsletter[fullname]" placeholder="HỌ VÀ TÊN..." required />
                            <div class="invalid-tooltip">Vui lòng nhập tên của bạn</div>
                        </div>

                        <div class="newsletter-input">
                            <div class="line__dangky"></div>

                            <input type="number" class="form-controld text-sm" id="phone-newsletter"
                                name="dataNewsletter[phone]" placeholder="ĐIỆN THOẠI..." required />
                            <div class="invalid-tooltip">Vui lòng nhập số điện thoại</div>
                        </div>

                        <div class="newsletter-input">

                            <input class="form-controld text-sm" id="content-newsletter" name="dataNewsletter[content]"
                                placeholder="NHẬP NỘI DUNG..." required></input>
                            <div class="invalid-tooltip">Vui lòng nhập nội dung</div>
                        </div>

                        <div class="formgroup">
                            <div class="newsletter-button">
                                <input type="submit" class="btn-f" name="submit-newsletter" value="ĐĂNG KÝ" disabled>
                                <input type="hidden" class="btn btn-sm btn-danger w-100"
                                    name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>