<div class="menu">
    <div class="wrap-content">
        <div class="menuuu">
            <ul class="menu-list">
                <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href=""
                        title="<?=trangchu?>"><?=trangchu?></a></li>

                <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu"
                        title="<?=gioithieu?>"><?=gioithieu?></a></li>

                <li>
                    <a class="has-child <?php if($com=='dich-vu') echo 'active'; ?> transition" href="dich-vu"
                        title="Dịch vụ">Dịch vụ</a>
                    <?php if(!empty($dichvulist)) { ?>
                    <ul>
                        <?php foreach($dichvulist as $klist => $vlist) {?>
                        <li>
                            <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                                href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
            </ul>
            <div class="menu__logo">
                <a href="" title="<?=trangchu?>" class="peShinerr">
                    <?=$func->getImage(['sizes' => '214x214x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </div>
            <ul class="menu-list2">
                <li> <a class="<?php if($com=='thu-vien-anh') echo 'active'; ?> transition" href="thu-vien-anh"
                        title="Hình ảnh">Hình ảnh</a>
                </li>
                <li> <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition" href="tin-tuc"
                        title="Tin tức">Tin
                        tức</a>
                </li>

                <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition" href="lien-he"
                        title="Liên hệ">Liên
                        hệ</a></li>
                <div class="search-res">
                    <p class="icon-search transition"><i class="fa fa-search"></i></p>
                    <div class="search-grid w-clear">
                        <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>"
                            onkeypress="doEnter(event,'keyword-res');" />
                        <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>