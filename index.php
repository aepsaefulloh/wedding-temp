<?php
require_once 'config.php';
require_once ROOT_PATH.'/lib/dao_utility.php';
require_once ROOT_PATH.'/lib/mysqlDao.php';
?>



<!Doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        Achmad Zuel Fahmi & Ulfah Fauziyyah
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta property="og:title" content="Wedding Achmad Zuel Fahmi & Ulfah Fauziyyah" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo ROOT_URL?>/assets/img/gallery/1.jpg?<?php echo rand()?>">
    <link href="<?php echo ROOT_URL?>/assets/img/favicon.png?<?php echo rand()?>" rel="icon" type="image/png"
        sizes="96x96">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Pacifico&family=Sacramento&display=swap"
        rel="stylesheet">
    <link href="<?php echo ROOT_URL?>/assets/css/all.css?<?php echo rand()?>" rel="stylesheet">
    <link href="<?php echo ROOT_URL?>/assets/css/styles.css?<?php echo rand()?>" rel="stylesheet">
    <!-- <link href="<?php echo ROOT_URL?>/assets/css/fontawesome.min.css?<?php echo rand()?>" rel="stylesheet"> -->

</head>

<body>
    <div id="pertama">
        <div id="popup">
            <div class="popup-1">
                <center>
                    <div class="popup-2">
                        <div class="popup-2-1">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</div>

                        <div class="popup-2-2">Sehubungan dengan adanya wabah Covid-19,
                            kami akan menyelenggarakan acara pernikahan dengan mengundang
                            saudara dan kerabat terdekat. Semoga wabah Covid-19 segera berlalu
                            dan kita semua diberikan kesehatan. Terima kasih <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="hide" onClick="play()"> Buka Undangan </div> &nbsp;
                    <br>
                    <a href="">
                        &copy; 2020 <a class='footer' href="#">Rafika Devilia. All Right Reserved.</a>
                    </a>
                </center>
            </div>

            <div class="popup-4">
                <img src="<?php echo ROOT_URL?>/assets/img/decor/f-1.png?<?php echo rand()?>">
            </div>
            <div class="popup-5">
                <img src="<?php echo ROOT_URL?>/assets/img/decor/f-2.png?<?php echo rand()?>">
            </div>
            <div class="popup-6">
                <img src="<?php echo ROOT_URL?>/assets/img/decor/f-3.png?<?php echo rand()?>">
            </div>
            <div class="popup-7">
                <img src="<?php echo ROOT_URL?>/assets/img/decor/f-4.png?<?php echo rand()?>">
            </div>
        </div>
    </div>
    <div class="popup-4">
        <img src="<?php echo ROOT_URL?>/assets/img/decor/f-1.png?<?php echo rand()?>">
    </div>
    <div class="popup-5">
        <img src="<?php echo ROOT_URL?>/assets/img/decor/f-2.png?<?php echo rand()?>">
    </div>
    <div class="popup-6">
        <img src="<?php echo ROOT_URL?>/assets/img/decor/f-3.png?<?php echo rand()?>">
    </div>
    <div class="popup-7">
        <img src="<?php echo ROOT_URL?>/assets/img/decor/f-4.png?<?php echo rand()?>">
    </div>
    <div id="kedua">
        <div id="menu">
            <div class="menu-1">
                <a class="gh">
                    <div class="menu-2">Home</div>
                </a>
                <a class="gr">
                    <div class="menu-2">Reception</div>
                </a>
                <a class="gq">
                    <div class="menu-2">Quote</div>
                </a>
                <a class="gl">
                    <div class="menu-2">Location</div>
                </a>
                <a class="gg">
                    <div class="menu-2">Gallery</div>
                </a>
                <a class="ggb">
                    <div class="menu-2">Guest Book</div>
                </a>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <audio id="audio" src="<?php echo ROOT_URL?>/assets/audio/music.mp3?<?php echo rand()?>" preload="auto"></audio>
    <div id="slide">
        <div class="slide-1">
            <img class="slide-pc" src="<?php echo ROOT_URL?>/assets/img/banner/desktop.jpg?<?php echo rand()?>">
            <img class="slide-m" src="<?php echo ROOT_URL?>/assets/img/banner/mobile.jpg?<?php echo rand()?>">
            <div class="slide-2">
                <div class="slide-2-1">
                    Fahmi & Ulfah
                </div>
                <div class="slide-2-2">
                    We Are Getting Married
                </div>
                <div class="slide-2-3">
                    <div id="day" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Days</div>
                    <div id="hour" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Hours</div>
                    <div id="minute" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Minutes</div>
                    <div id="second" class="slide-2-3-1" data-wow-iteration="infinite"> <br> Seconds</div>
                </div>
            </div>
        </div>
    </div>
    <div id="reception">
        <div class="reception-1">
            <div class="wow zoomIn">
                <center>
                    Our Moments
                </center>
            </div>
            <div id="quotes" class="reception-1-1 wow zoomIn">
                بسم الله الرحمن الرحيم
            </div>
            <div class="reception-1-2 reception-1-7 wow zoomIn">
                وَ مِنۡ اٰیٰتِہٖۤ اَنۡ خَلَقَ لَکُمۡ مِّنۡ اَنۡفُسِکُمۡ اَزۡوَاجًا لِّتَسۡکُنُوۡۤا اِلَیۡہَا وَ جَعَلَ
                بَیۡنَکُمۡ مَّوَدَّۃً وَّ رَحۡمَۃً ؕ اِنَّ فِیۡ ذٰلِکَ لَاٰیٰتٍ لِّقَوۡمٍ یَّتَفَکَّرُوۡنَ
                <br><br>
                &#10077;
                Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu
                sendiri,
                supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang.
                Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
                &#10078; <Br><Br> (Q.S Ar-Rum:21)
            </div>
            <div class="justify-align-center" id="reception-1-3">
                <div class="name">
                    <div class="name-1 wow zoomIn">
                        <img src="<?php echo ROOT_URL?>/assets/img/foto/w1.jpg?<?php echo rand()?>">
                    </div>
                    <div class="name-2 wow zoomIn">
                        Ulfah Fauziyyah, S.Kom
                    </div>
                    <div class="name-3 wow zoomIn">
                        Mempelai Wanita
                    </div>
                    <div class="name-4 wow zoomIn">
                        Ulfah <br>
                        Putri dari Bapak Yudi Rusriyanto
                        & Ibu Sugiyani <br>
                        <a href=""><i class="fab fa-instagram"></i> @ulfahfauzi6</a>
                    </div>
                </div>
                <div class="name">
                    <div class="name-1 wow zoomIn">
                        <img src="<?php echo ROOT_URL?>/assets/img/foto/w2.jpg?<?php echo rand()?>">
                    </div>
                    <div class="name-2 wow zoomIn">
                        Achmad Zuel Fahmi, S.Kom
                    </div>
                    <div class="name-3 wow zoomIn">
                        Mempelai Pria
                    </div>
                    <div class="name-4 wow zoomIn">
                        Fahmi <br>
                        Putra dari Bapak Nasa
                        & Ibu Untami Yunengsih <br>
                        <a href=""><i class="fab fa-instagram"></i> @achmadzuel</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div id="receptions">
        <div class="wow zoomIn">
            <center>
                Our Events
            </center>
        </div>
        <div id="quotes" class="reception-1-1 wow zoomIn">
            Save the Date
        </div>

        <div id="receptions-3" class="receptions">
            <div class="receptions-3 wow zoomIn">
                <div class="receptions-3-1">
                    Akad Nikah
                </div>
                <div class="receptions-3-2 receptions-3-2-1 left">
                    Sabtu, 10 Oktober 2020
                </div>
                <div class="receptions-3-3">
                    <img src="<?php echo ROOT_URL?>/assets/img/icon/calendar.png?<?php echo rand()?>">
                </div>
                <div class="clear"></div>
                <div class="receptions-3-2 receptions-3-2-1">
                    11.00 WIB
                </div>
                <div class="receptions-3-3">
                    <img src="<?php echo ROOT_URL?>/assets/img/icon/stopwatch.png?<?php echo rand()?>">
                </div>
                <div class="clear"></div>
                <div class="receptions-3-2">
                    Kediaman Mempelai Wanita
                </div>
                <div class="receptions-3-3">
                    <img src="<?php echo ROOT_URL?>/assets/img/icon/placeholder.png?<?php echo rand()?>">
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="receptions-4" class="receptions">
            <div class="receptions-3 wow zoomIn">
                <div class="receptions-3-1">
                    Resepsi Pernikahan
                </div>
                <div class="receptions-3-3 receptions-4-1">
                    <img src="<?php echo ROOT_URL?>/assets/img/icon/calendar.png?<?php echo rand()?>">
                </div>
                <div class="receptions-3-2 receptions-3-2-1 receptions-4-2">
                    Sabtu, 10 Oktober 2020
                </div>
                <div class="clear"></div>
                <div class="receptions-3-3 receptions-4-1">
                    <img src="<?php echo ROOT_URL?>/assets/img/icon/stopwatch.png?<?php echo rand()?>">
                </div>
                <div class="receptions-3-2 receptions-3-2-1 receptions-4-2">
                    13.00 WIB
                </div>
                <div class="clear"></div>
                <div class="receptions-3-3 receptions-4-1">
                    <img src="<?php echo ROOT_URL?>/assets/img/icon/placeholder.png?<?php echo rand()?>">
                </div>
                <div class="receptions-3-2 receptions-4-2">
                    Kediaman Mempelai Wanita
                </div>
                <div class="clear"></div>
            </div>
            <div id="receptions-5" class="receptions">
                <div class="receptions-1 wow zoomIn">
                    <div class="receptions-1-1">
                        <span id="minutes" class="receptions-1-1-1">

                        </span>
                        <br>
                        Minutes
                    </div>
                    <div class="receptions-1-1">
                        <span id="seconds" class="receptions-1-1-1">

                        </span>
                        <br>
                        Seconds
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="location">
            <div class="container">
                <div class="location-1">
                    <div class="location-2">Event&nbsp;</div>
                    <div class="location-2 location-3"> Location <i class="fas fa-map-marked-alt"></i></div>
                    <div class="clear"></div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1982.516183129056!2d106.8372028!3d-6.3898252!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebf24129d74d%3A0x5c343cbae6a45514!2sJl.%20Majapahit%20II%20No.174%2C%20Mekar%20Jaya%2C%20Kec.%20Sukmajaya%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016411!5e0!3m2!1sen!2sid!4v1597803321928!5m2!1sen!2sid"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
                <a href="https://goo.gl/maps/kDwR9ZTQVR9jL8MX7" target="_blank">
                    <div class="location-5 wow zoomIn">
                        Google
                        <span class="location-6">
                            Maps
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="story">
        <div id="gallery" class="reception-1-2 story-2 wow zoomIn">
            We Love The Moments
        </div>
        <div class="reception-1-1 wow zoomIn">
            Our Gallery
        </div>
        <div class="story-3">
            <?php 
            for($i = 1; $i <= 16; $i++){
        ?>
            <div class='story-3-1 wow zoomIn'>

                <img src='<?php echo ROOT_URL?>/assets/img/gallery/<?php echo $i ?>.jpg?<?php echo rand()?>'></div>

            <?php
            }
            ?>
            <div class="clear"></div>
        </div>
        <br><br>
        <div id="guestbook" class="story-2 wow zoomIn">
            <center>
                Give a Blessing Prays
            </center>
        </div>
        <div id="guest" class="reception-1-1 wow zoomIn">
            Our Guestbook
        </div>
        <div id="guest-1" class="wow zoomIn">
            <?php 
                $var['ACT'] = isset($_REQUEST['ACT'])?$_REQUEST['ACT']:'';
                $savestatus = 0;
                if($var['ACT'] == 'ADD'){
                    $var['FULLNAME'] = isset($_REQUEST['FULLNAME'])?$_REQUEST['FULLNAME']:'';
                    $var['RELATIONSHIP'] = isset($_REQUEST['RELATIONSHIP'])?$_REQUEST['RELATIONSHIP']:'';    
                    $var['STATUS'] = isset($_REQUEST['STATUS'])?$_REQUEST['STATUS']:'';
                    $var['DESCRIPTION'] = isset($_REQUEST['DESCRIPTION'])?$_REQUEST['DESCRIPTION']:'';
                    $var['CREATE_TIMESTAMP']=date('Y-m-d H:i:s');

                    $result = saveRecord('tbl_comment', $var);
                    //  echo $result['SQL'];
                    $savestatus = 1;
                }
                ?>
            <form action="<?php echo ROOT_URL?>/index.php" method="post">
                <input type='hidden' name='ACT' value='ADD'>
                <div class="guest-1">
                    <center>
                        <input class="wow zoomIn" type="text" name="FULLNAME" placeholder="Masukkan Nama"><br>
                        <input class="wow zoomIn" type="text" name="RELATIONSHIP"
                            placeholder="Siapakah kamu? Contoh: Keluarga"><br>
                        <textarea class="wow zoomIn" type="text" name="DESCRIPTION"
                            placeholder="Masukkan Pesan"></textarea>
                    </center>
                </div>
                <div id="radio">
                    <!-- <input class="checkbox" type="radio" name="STATUS" value="hadir" checked>Hadir
                    <br>
                    <input class="checkbox" type="radio" name="STATUS" value="tidak">Tidak Hadir -->
                    <input class="checkbox" type="radio" name="STATUS" value="hadir"
                        <?php if(['STATUS']=='1') echo 'checked'?>> Hadir
                    <br>
                    <input class="checkbox" type="radio" name="STATUS" value="tidak hadir"
                        <?php if(['STATUS']=='0') echo 'checked'?>> Tidak Hadir
                </div>
                <center>
                    <div class="guest-1">
                        <button class="buttons wow zoomIn" type="submit">Kirim</button>
                    </div>
                </center>
            </form>
            <div id="comment">
                <div class="container">
                    <div class="comment-1">
                        <div class='comment-1-1'>Comment Here..</div>
                        <?php
                            $var['LIMIT'] = 30;
                            $list = getRecord('tbl_comment', $var);
                            foreach($list['RESULT'] as $list){
                        ?>
                        <div class='comment-2'>
                            <div class='comment-3'><?php echo $list['FULLNAME'] ?>
                                <span class='comment-4'><?php echo $list['RELATIONSHIP'] ?></span>
                            </div>
                            <div class='comment-5'><?php echo $list['DESCRIPTION'] ?></div>
                        </div>
                        <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
            <center>
                <br>
                &copy; 2020 <a class='footer' href="#">Rafika Devilia</a>. All Right Reserved.
            </center>
        </div>
        <div class="clear"></div>
    </div>
    <div id="menu">
        <div class="menu-3">
            <a class="gh">
                <div class="menu-2">Home</div>
            </a>
            <a class="gr">
                <div class="menu-2">Reception</div>
            </a>
            <a class="gq">
                <div class="menu-2">Quote</div>
            </a>
            <a class="gl">
                <div class="menu-2">Location</div>
            </a>
            <a class="gg">
                <div class="menu-2">Gallery</div>
            </a>
            <a class="ggb">
                <div class="menu-2">Guest Book</div>
            </a>
            <div class="clear"></div>
            <div class="menu-4"><i class="fas fa-heart"></i></div>
        </div>
    </div>
    </div>
    <script src="<?php echo ROOT_URL?>/assets/js/jquery.js?<?php echo rand()?>"></script>
    <script src="<?php echo ROOT_URL?>/assets/js/wow.js?<?php echo rand()?>"></script>
    <script src="<?php echo ROOT_URL?>/assets/js/custom.js?<?php echo rand()?>"></script>
    <script src="<?php echo ROOT_URL?>/assets/js/fontawesome.min.js?<?php echo rand()?>"></script>
    <script type="text/javascript">
    new WOW().init();
    </script>

</body>

</html>