<?php
    /* Banner Header ??*/
    $nametype = "banner-header";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner-header";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 450;
    $config['photo']['photo_static'][$nametype]['height'] = 85;
    $config['photo']['photo_static'][$nametype]['thumb'] = '450x85x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    /* Banner */
    $nametype = "banner";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 1366;
    $config['photo']['photo_static'][$nametype]['height'] = 400;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1366x400x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] =  185;
    $config['photo']['photo_static'][$nametype]['height'] = 100;
    $config['photo']['photo_static'][$nametype]['thumb'] = '185x100x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 100;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '100x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Watermark sản phẩm*/
    $nametype = "watermark";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 100;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '100x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 520;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '1366x520x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Social */
    //Có nhiều cái thì thêm vào
    $nametype = "social";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 40;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 40;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '40x40x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Doi tac*/
    //Có nhiều cái thì thêm vào
    $nametype = "doitac";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Đố tác";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 100;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 70;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '100x70x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Video */
    $nametype = "videoclipd";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Video";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 4;
    $config['photo']['man_photo'][$nametype]['video_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['desc_photo'] = true;

    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 580;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 400;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '580x400x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* imgabout */
    $nametype = "image-about";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Hình ảnh giới thiệu";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 3;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 340;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 300;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '340x300x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';
?>