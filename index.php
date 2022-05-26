<?php 
    $host = 'localhost'; 
    $database = 'cars'; 
    $user = 'root';
    $password = '11111111'; 
    $link = mysqli_connect($host, $user, $password, $database) or die("Помилка " . mysqli_error($link));            
    $querys = "SELECT * FROM `brand` ORDER BY `name_brand`";
    $querys2 = "SELECT * FROM `category`";
    $querys3 = "SELECT * FROM `product`";
    $result = mysqli_query($link, $querys); 
    $result2 = mysqli_query($link, $querys2); 
    $result3 = mysqli_query($link, $querys3); 
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export parts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/select2.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <header class="header">
        <div class="header_black">
        <div class="header_wrapper container">
            <div class="header_first">
            <nav class="header_nav">
                <ul class="header_list">
                    <li class="header_item">
                        <a href="#!" class="header_link">О нас</a>
                    </li>
                    <li class="header_item">
                        <a href="#!" class="header_link">Как заказать</a>
                    </li>
                    <li class="header_item">
                        <a href="#!" class="header_link">Гарантия</a>
                    </li>
                    <li class="header_item">
                        <a href="#!" class="header_link">Доставка и Оплата</a>
                    </li>
                    <li class="header_item">
                        <a href="#!" class="header_link">Контакты</a>
                    </li>
                </ul>
            </nav>
            <div class="language">
                <ul class="header_list_lang">
                    <li class="header_item_lang">
                        <a href="#!" class="header_link_lang header_link_lang_active">UA</a>
                    </li>
                    <li class="header_item">
                        <a href="#!" class="header_link_lang header_link_lang_dis">RU</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
        <div class="header_second" id="header_second">
            <div class="header_wrapper_cont container">
                <div class="header_responsive">
                    <div class="header_logo">
                        <img src="/img/svg/header_logo.svg" alt="" class="header_logo_svg">
                    </div>
                    <div class="header_phone_resp_button">
                        <div class="phone_resp"></div>
                        <div class="zoom_resp"></div>
                        <div class="market_resp"></div>
                        <div class="burger_menu"></div>
                    </div>
                    <div class="header_input_place">
                        <form action="" class="border_search">
                            <input type="text" placeholder="Введити название детали" class="input_txt">
                            <input type="submit" value="Поиск" class="input_btn">
                        </form>
                    </div>
                    <div class="dropdown">
                        <div class="tel">
                            <div class="tel_intro">
                                <a href="viber://chat?number=%2B0634588778" class="txt_d" target="_blank"><p class="first_num">063 <span class="semi_bold">458 87 78</span></p></a>
                                <a href="https://wa.me/0674578745" class="txt_d" target="_blank"><p class="second_num">067 <span class="semi_bold">457 87 45</span></p></a>
                            </div>
                            <div class="arrow"><img src="/img/svg/arrow_down.svg" alt=""></div>                    
                            <div class="dropdown-content">
                                <a href="viber://chat?number=%2B0634588778" target="_blank"><p class="first_num line_height_24">063 <span class="semi_bold">458 87 78</span></p></a>
                                <a href="https://wa.me/0674578745" target="_blank"><p class="second_num line_height_24">067 <span class="semi_bold">457 87 45</span></p></a>
                                <a href="https://telegram.me/0674578745" target="_blank"><p class="third_num line_height_24">067 <span class="semi_bold">457 87 45</span></p></a>
                                <a href="viber://chat?number=%2B0674578745" target="_blank"><p class="fourth_num line_height_24">067 <span class="semi_bold">457 87 45</span></p></a>
                                <p class="shedule">График роботы:</p>
                                <p class="weekdays">Пн.-Пт.-<span class="semi_bold">9:00-18:00</span></p>
                                <p class="weekend">Сб.-<span class="semi_bold">10:00-18:00</span></p>
                                <p class="orders">Заказы через сайт: <span class="semi_bold">круглосуточно</span></p>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="acc_data">
                    <div class="star"></div>
                    <div class="market">12 780 грн.</div>
                </div>
            </div>
        </div>
    </header>
    
    <main class="main_information">
        <!-- Бургер меню старт -->
        <div class="burger_wrapper" id="burger_wrapper">
            <div class="burger_content">
                <div class="burger_star">
                    <div class="star"></div>
                    <p class="burger_star_txt">Избранное</p>
                </div>
                <div class="burger_nav">
                    <nav class="header_nav">
                        <ul class="burger_list">
                            <li class="header_item burger_item">
                                <a href="#!" class="header_link burger_link">О нас</a>
                            </li>
                            <li class="header_item burger_item">
                                <a href="#!" class="header_link burger_link">Как заказать</a>
                            </li>
                            <li class="header_item burger_item">
                                <a href="#!" class="header_link burger_link">Гарантия</a>
                            </li>
                            <li class="header_item burger_item">
                                <a href="#!" class="header_link burger_link">Доставка и Оплата</a>
                            </li>
                            <li class="header_item burger_item">
                                <a href="#!" class="header_link burger_link">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tel_intro">
                    <a href="viber://chat?number=%2B0634588778" class="txt_d" target="_blank"><p class="first_num">063 <span class="semi_bold">458 87 78</span></p></a>
                    <a href="https://wa.me/0674578745" class="txt_d" target="_blank"><p class="second_num">067 <span class="semi_bold">457 87 45</span></p></a>
                </div>
                <div class="language">
                    <ul class="header_list_lang">
                        <li class="header_item_lang">
                            <a href="#!" class="header_link_lang header_link_lang_active">UA</a>
                        </li>
                        <li class="header_item">
                            <a href="#!" class="header_link_lang header_link_lang_dis">RU</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Бургер меню кінець -->
        <!-- контакти старт -->
        <div class="contacts_burger_wrapper">
            <div class="contacts_burger">
                <p class="shedule">Телефоны:</p>
                <a class="a_contacts" href="viber://chat?number=%2B0634588778" target="_blank"><p class="first_num line_height_24 p_contacts">063 <span class="semi_bold">458 87 78</span></p></a>
                <a class="a_contacts" href="https://wa.me/0674578745" target="_blank"><p class="second_num line_height_24 p_contacts">067 <span class="semi_bold">457 87 45</span></p></a>
                <a class="a_contacts" href="https://telegram.me/0674578745" target="_blank"><p class="third_num line_height_24 p_contacts">067 <span class="semi_bold">457 87 45</span></p></a>
                <a class="a_contacts" href="viber://chat?number=%2B0674578745" target="_blank"><p class="fourth_num line_height_24 p_contacts">067 <span class="semi_bold">457 87 45</span></p></a>
                <p class="shedule">График роботы:</p>
                <p class="weekdays">Пн.-Пт.-<span class="semi_bold">9:00-18:00</span></p>
                <p class="weekend">Сб.-<span class="semi_bold">10:00-18:00</span></p>
                <p class="orders">Заказы через сайт: <span class="semi_bold">круглосуточно</span></p>
            </div>
        </div>
        <!-- контакти кінець -->
        <!-- пошук меню старт -->
        <div class="search_burger_wrapper">
            <div class="search_burger">
                <div class="input_search_resp">
                    <form action="" class="border_search">
                        <input type="text" placeholder="Введити название детали" class="input_txt">
                        <input type="submit" value="Поиск" class="input_btn">
                    </form>
                </div>
                <div class="search_burger_txt shedule">Не найшли что искали?<br>Тогда позвоните нам</div>
                <div class="tel_intro search_burger_tel">
                    <a href="viber://chat?number=%2B0634588778" class="txt_d" target="_blank"><p class="first_num">063 <span class="semi_bold">458 87 78</span></p></a>
                    <a href="https://wa.me/0674578745" class="txt_d" target="_blank"><p class="second_num">067 <span class="semi_bold">457 87 45</span></p></a>
                </div>
            </div>
        </div>
        <!-- пошук меню кінець -->

        <div class="intro_site container">
            <div class="intro_search_slider">
                <div class="filter__ col-4">
                    <div class="filter_">
                        <p class="filter_p">Фильтр автозапчастей:</p>
                        <div class="chose">
                            <form name="my_chose">
                            <div class="chose_cont">
                                <p class="number" id="num_1">1</p>
                                <span class="number_line" id="num_span_1"></span>
                                <select class="filter_chose" name="brand" id="brand" onchange="document.my_chose.model.disabled = !this.selectedIndex">
                                    <option value="brand" selected disabled hidden>Марка машины</option>
                                </select>
                            </div>
                            <div class="chose_cont">
                                <p class="number" id="num_2">2</p>
                                <span class="number_line" id="num_span_2"></span>
                                <select class="filter_chose" name="model" id="model" disabled onchange="document.my_chose.group.disabled = !this.selectedIndex">
                                    <option value="model" selected disabled hidden>Модель машины</option>
                                </select>
                            </div>
                            <div class="chose_cont">
                                <p class="number" id="num_3">3</p>
                                <span class="number_line" id="num_span_3"></span>
                                <select class="filter_chose" name="group" id="group" disabled onchange="document.my_chose.type.disabled = !this.selectedIndex">
                                    <option value="volvo" selected disabled hidden>Группа запчастей</option>
                                </select>
                            </div>
                            <div class="chose_cont">
                                <p class="number" id="num_4">4</p>
                                <span class="number_line" id="num_span_4"></span>
                                <select class="filter_chose" name="type" id="type" disabled onchange="document.my_chose.chose_zap.disabled = !this.selectedIndex">
                                    <option value="volvo" selected disabled hidden>Тип запчасти</option>
                                </select>
                            </div>
                            <div class="chose_cont">
                                <p class="number" id="num_5">5</p>
                                <select class="filter_chose" name="chose_zap" id="chose_zap" disabled>
                                    <option value="volvo" selected disabled hidden>Выберите запчасть</option>
                                </select>
                            </div>
                        </form>
                        <button class="search_btn"><img src="/img/svg/zoom_icon.svg" alt="" width="20px" class="search_zoom_img"> Поиск запчастей</button>
                        </div>
                    </div>
                </div>
                <div class="slider col-8">
                    <div class="slide">
                        <div class="all">
                            <input checked type="radio" name="respond" id="desktop">
                                <article id="slider">
                                        <input checked type="radio" name="slider" id="switch1">
                                        <input type="radio" name="slider" id="switch2">
                                        <input type="radio" name="slider" id="switch3">
                                        <input type="radio" name="slider" id="switch4">
                                        <input type="radio" name="slider" id="switch5">
                                    <div id="slides">
                                        <div id="overflow">
                                            <div class="image">
                                                <article> 
                                                    <img src="/img/slide_first.png" alt="" class="slide_photo">
                                                </article>
                                                <article>                    
                                                    <img src="/img/slide_second.png" alt="" class="slide_photo">
                                                </article>
                                                <article>
                                                    <img src="/img/slide_third.png" alt="" class="slide_photo">
                                                </article>
                                                <article>
                                                    <img src="/img/slide_fourth.png" alt="" class="slide_photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="controls">
                                        <label for="switch1"></label>
                                        <label for="switch2"></label>
                                        <label for="switch3"></label>
                                        <label for="switch4"></label>
                                        <label for="switch5"></label>
                                    </div>
                                    <div id="active">
                                        <label for="switch1"></label>
                                        <label for="switch2"></label>
                                        <label for="switch3"></label>
                                        <label for="switch4"></label>
                                    </div>
                                </article>
                                <button class="slide_btn"><p>Перейти в каталог</p> <img src="/img/svg/arrow_right.svg" width="28px" height="11px" alt="" class="arrow_right_btn"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brands container">
                <div class="brands_txt">
                    <h1 class="intro_block_h1"><span class="semi_bold">Марки</span> авто</h1>
                    <div class="scroll_btn">
                        <div class="scroll_btn_back" id="scroll_btn_back"></div>
                        <div class="scroll_btn_go" id="scroll_btn_go"></div>
                    </div>
                </div>
                <div class="brands_resp" id="brands_resp">
                    <div class="brands_icon">
                        <?php foreach ($result as $row) {
                            echo "<div class='col_icon midle_icon'><img src='/admin/img/" . $row["logo"] . "'><p class='p_icon' style='width: 100px;' >" . $row["name_brand"] . "</p></div>";
                            
                        } ?>
                    </div>
                </div>
            </div>
            <div class="categories_popular container">
                <div class="categories_txt">
                    <h1 class="cat_block_h1"><span class="semi_bold">Популярные</span> категории</h1>
                </div>
                <div class="slider_cat">
                    <?php foreach ($result2 as $row2) {
                            echo "<div class='slider__item filter'><img src='/admin/img/category/" . $row2["photo"] . "' class='categories_photo'><p class='cat_arrow'  >" . $row2["name_category"] . "</p></div>";
                            
                        } ?>
                    <div class="slider__item">
                        <img src="img/categories_five.jpg" alt="" class="categories_photo">
                        <p class="cat_arrow">Двигатели</p>
                    </div>
                </div>
            </div>
            <div class="latest_arrivals container">
                <div class="latest_txt last_post">
                    <h1 class="intro_block_h1"><span class="semi_bold">Последние</span> поступления</h1>
                </div>
                <div class="slider_lat">
                    <?php foreach ($result3 as $row3) {
                            echo "<div class='slider__item filter lat_item'>
                            <button class='obrane'>
                            <img src='/img/svg/star_white.svg'>
                            </button>
                            <img src='/admin/img/prod/" . $row3["photo"] . "' class='latest_photo' style='height: 160px; width: 217px'>
                            <p class='ser_number'  >Номер лота: <span>" . $row3["number_lot"] . "</span></p>
                            <p class='lat_name' style='height: 41.59px;'>" . $row3["name_product"] . "</p><div class='buy_lat'>
                            <p class='price_lat'><span>" . $row3["price"] . "</span> грн.</p>
                            <button class='btn_buy_lat'>Купить</button>
                        </div></div>";
                            
                        } ?>                                            
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_1.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_2.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_3.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_4.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_5.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_6.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_7.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_8.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_9.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_10.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_1.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                    <div class="slider__item filter lat_item">
                        <button class="obrane"><img src="/img/svg/star_white.svg" alt=""></button>
                        <img src="img/lat_1.jpg" alt="" class="latest_photo">
                        <p class="ser_number">Номер лота: <span>4549545774</span></p>
                        <p class="lat_name">Ibiza iv polo fabia 1.6 b 10r 105km двигатель bts</p>
                        <div class="buy_lat">
                            <p class="price_lat"><span>55 500</span> грн.</p>
                            <button class="btn_buy_lat">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why container">
                <div class="why_txt">
                    <p class="txt_">Почему стоит покупать товары<spav> Export</spav><spac>Parts</spac></p>
                    <p class="phone_txt_resp">Вы наверняка станете постоянным клиентом нашего магазина<spav> «ExportParts»</spav>, потому что мы дарим множество<spav> преимуществ</spav> нашим клиентам:</p>
                </div>
                <div class="why_blocks">
                    <div class="why_block col-3 why_block_1">
                        <img src="/img/svg/why_block_1.svg" alt="" class="col-3">
                        <p class="why_intro col-9">Удобные способы доставки<br><span>Доставка по всех точках Украины удобными вам способами</span> </p>
                    </div>
                    <div class="why_block container col-3 why_block_2">
                        <img src="/img/svg/why_block_2.svg" alt="" class="col-3">
                        <p class="why_intro col-9">Минимальная наценка<br><span>Доставка по всех точках Украины удобными вам способами</span> </p>                    </div>
                    <div class="why_block container col-3 why_block_3">
                        <img src="/img/svg/why_block_3.svg" alt="" class="col-3">
                        <p class="why_intro col-9">Гибкий рабочий график<br><span>Доставка по всех точках Украины удобными вам способами</span> </p>                    </div>
                    <div class="why_block container col-3 why_block_4">
                        <img src="/img/svg/why_block_4.svg" alt="" class="col-3">
                        <p class="why_intro col-9">Различные способы оплаты<br><span>Доставка по всех точках Украины удобными вам способами</span> </p>                    </div>
                </div>
            </div>
            <div class="last_block container">
                <div class="why_txt">
                    <p class="txt_">Интернет-магазин автотоваров<spav> Export</spav><spac>Parts</spac></p>
                </div>
                <div class="why_blocks">
                    <div class="col-4 col_last_img">
                        <img src="/img/last_block_photo.jpg" alt="" class="last_block_photo">
                    </div>
                    <div class="container col_last_midle">
                        <p class="last_block_txt">В нашем интернет-магазине представлен широкий выбор автомобильных товаров для легковых и грузовых авто: <span>аккумуляторы, колёсные диски, автомобильная химия, электроника, масла</span> и т.д. Вы легко найдёте нужный товар в одном из разделов нашего сайта. У нас представлены только качественные товары от проверенных производителей. <br><br>Покупая у нас, вы экономите, потому что цены у нас <span>значительно ниже, чем в обычных автомагазинах</span> вашего города. Мы обеспечим максимально оперативную доставку в любой город Украины. <br><br>Мы предоставляем нашим клиентам качественные во множестве наших представительств в Киеве и крупных городах Украины: в <span>Луцке, Львове, Виннице, Хмельницком, Чернигове, Харькове, Одессе, Николаеве</span> и многих других.                    
                    </div>
                    <div class="col_last_img_resp">
                        <img src="/img/last_block_photo.jpg" alt="" class="last_block_photo">
                    </div>
                    <div class="col_last_last">
                        <p class="last_block_txt"><span>Вы наверняка станете постоянным клиентом нашей сети «ExportParts», потому что мы дарим множество преимуществ нашим клиентам:</span><br><br><br></p>                    
                        <div class="check_last_txt">
                            <p class="last_block_txt check_txt">мы всегда гарантируем качество наших товаров и услуг;<br><br></p>
                            <p class="last_block_txt check_txt">у нас — демократичные цены на все группы автомобильных товаров;<br><br></p>
                            <p class="last_block_txt check_txt">вы легко найдёте на нашем сайте ближайшее к вам представительство за считанные минуты.<br><br><br></p>
                        </div>
                        <p class="last_block_txt_">Делайте выгодные покупки именно у нас!</p>                    
                    </div>
                </div>
            </div>
        </div>
    </main>

<footer class="footer_wrapper">
    <div class="footer_col container">
        <div class="fot_contacts col-3">
            <img src="/img/svg/logo_foot.svg" alt="" class="logo_fot">
            <p class="foot_cont_1 foot_cont">0 800 454-12-88</p>
            <p class="foot_cont_2 foot_cont">067 784-78-45</p>
            <p class="foot_cont_3 foot_cont">063 788-78-47</p>
        </div>
        <div class="foot_shedule col-3">
            <p class="foot_shedule_intro">График роботы</p>
            <?php 
            $querys4 = "SELECT * FROM `workday`";
            $result4 = mysqli_query($link, $querys4); 
            foreach ($result4 as $row4) {
                if($row4['workdayfrom']== '00:00'){
                    $row4['workdayfrom'] = 'вихідний';
                    echo "<p class='foot_shedule_main'  ><spav> " . $row4["day"] . " — </spav>" . $row4["workdayfrom"] . "<br><br></p>";
                }
                else{
                            echo "<p class='foot_shedule_main'  ><spav> " . $row4["day"] . ": </spav>" . $row4["workdayfrom"] . "–" . $row4["workdayto"] . "<br><br></p>";
                }            
                } ?>
        </div>
        <div class="foot_shedule col-3">
            <p class="foot_shedule_intro">Адреса</p>
            <?php 
            $querys5 = "SELECT * FROM `adress`";
            $result5 = mysqli_query($link, $querys5); 
            foreach ($result5 as $row5) {
                if($row5['id']==1){
                   echo "<p class='foot_shedule_main'  ><spav>Главный офис:</spav><br>" . $row5["adress"] . "<br><br></p>";
                } 
                else if($row5['id']==2){
                    echo "<p class='foot_shedule_main'  ><spav>Отделение №2:</spav><br>" . $row5["adress"] . "<br><br></p>";
                }          
                } ?>
        </div>
        <div class="foot_shedule col-3">
            <p class="foot_shedule_intro">О компании</p>
            <a href="#!" class="foot_about"><p class="a_foot">О нас</p></a>
            <a href="#!" class="foot_about"><p class="a_foot">Как заказать</p></a>
            <a href="#!" class="foot_about"><p class="a_foot">Гарантия</p></a>
            <a href="#!" class="foot_about"><p class="a_foot">Доставка и оплата</p></a>
            <a href="#!" class="foot_about"><p class="a_foot">Контакты</p></a>
        </div>
        <div class="footer_down">
            <p class="fot_down">ExportParts © Все права защищены 2021</p>
            <img src="/img/svg/fot_down.svg" alt="">
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>