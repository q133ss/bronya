<?php

if (!defined( 'FW' )) die('Forbidden');


$options = array(
    'main' => array(
        'type' => 'box',
        'title' => __('Главный экран', '{domain}'),
        'options' => array(
            'title' => array(
                'type'  => 'text',
                'value' => 'Почему <br> Броня 360° ?',
                'label' => __('Текст 1', '{domain}'),
            ),
            'description' => array(
                'type'  => 'text',
                'value' => 'БРОНЯ 360° - материал, который, <br>
                            в большинстве случаев, <br>
                            противостоит износу гаджета <br>
                            при переносе в сумке или кармане.',
                'label' => __('Текст 2', '{domain}'),
            ),
            'price' => array(
                'type'  => 'text',
                'value' => 'Наш прайс',
                'label' => __('Наш прайс', '{domain}'),
            ),
            'price_link' => array(
                'type'  => 'text',
                'value' => 'https://xn--360-9cd4dfn6j.xn--p1ai/assets/app/img/templates/price_A4%20(1).jpg',
                'label' => __('Наш прайс ссылка', '{domain}'),
            ),

            'advantage1' => array(
                'type'  => 'text',
                'value' => 'Закрывает до&nbsp;99% поверхности <br>экрана и&nbsp;корпуса',
                'label' => __('Преимущество 1', '{domain}'),
            ),
            'advantage2' => array(
                'type'  => 'text',
                'value' => 'Защита на&nbsp;выбор: глянцевая <br>или матовая',
                'label' => __('Преимущество 2', '{domain}'),
            ),
            'advantage3' => array(
                'type'  => 'text',
                'value' => 'Броня 360° это Полиуретановая плёнка <br>на&nbsp;экран, корпус, торцы и&nbsp;камеру',
                'label' => __('Преимущество 3', '{domain}'),
            ),

            'advantage4' => array(
                'type'  => 'text',
                'value' => 'Подэкранный сканер отпечатков <br>пальцев работает отлично',
                'label' => __('Преимущество 4', '{domain}'),
            ),
            'tiktok' => array(
                'type'  => 'text',
                'value' => 'https://www.tiktok.com/@bronya360msk',
                'label' => __('TikTok ссылка', '{domain}'),
            ),
            'youtube' => array(
                'type'  => 'text',
                'value' => 'https://www.youtube.com/channel/UCzOkrHAWcRD0l5ZQJAZpGvg',
                'label' => __('Youtube ссылка', '{domain}'),
            ),
            'instagram' => array(
                'type'  => 'text',
                'value' => 'https://www.instagram.com/bronya360_msk',
                'label' => __('Instagram ссылка', '{domain}'),
            ),
      
        ),
    ),



    'second' => array(
        'type' => 'box',
        'title' => __('Второй экран', '{domain}'),
        'options' => array(
            'defend' => array(
                'type'  => 'text',
                'value' => 'Защита со&nbsp;всех сторон',
                'label' => __('Защита со всех сторон', '{domain}'),
            ),
            'def_title' => array(
                'type'  => 'text',
                'value' => 'Защитная пленка Броня&nbsp;360° <br>матовая или глянцевая',
                'label' => __('Заголовок экрана', '{domain}'),
            ),

            'def_desc' => array(
                'type'  => 'text',
                'value' => 'Практичное решения для защиты <br>вашего смартфона.',
                'label' => __('Подзаголовок экрана', '{domain}'),
            ),

            'wa_num' => array(
                'type'  => 'text',
                'value' => '+79998412015',
                'label' => __('Номер Whatsapp', '{domain}'),
            ),

        ),
    ),


    'there' => array(
        'type' => 'box',
        'title' => __('Третий экран', '{domain}'),
        'options' => array(
            'title3' => array(
                'type'  => 'text',
                'value' => 'Бронепленка на любые устройства',
                'label' => __('Название экрана', '{domain}'),
                'desc' => 'Изображения на этот экран добавляются в разделе `Устройства`',
            ),

        ),
    ),

    'four' => array(
        'type' => 'box',
        'title' => __('Четвертый экран', '{domain}'),
        'options' => array(
            'title4' => array(
                'type'  => 'text',
                'value' => 'Более 250 видов текстурных плёнок на любой вкус.',
                'label' => __('Название экрана', '{domain}'),
                'desc' => 'Изображения на этот экран добавляются в разделе `Пленки`',
            ),

        ),
    ),

    'five' => array(
        'type' => 'box',
        'title' => __('Пятый экран', '{domain}'),
        'options' => array(
            'pretitle5' => array(
                'type'  => 'text',
                'value' => 'Защита со всех сторон',
                'label' => __('Подзаголовок', '{domain}'),
            ),
            'title5' => array(
                'type'  => 'text',
                'value' => 'Максимально не&nbsp;заметно <br>на&nbsp;смартфоне.',
                'label' => __('Заголовок', '{domain}'),
            ),

            'desc5' => array(
                'type'  => 'text',
                'value' => '100% отклик сенсорного экрана <br>и&nbsp;подэкранного сканера <br>отпечатка пальца.',
                'label' => __('Описание', '{domain}'),
            ),

        ),
    ),


    'six' => array(
        'type' => 'box',
        'title' => __('Шестой экран', '{domain}'),
        'options' => array(
            'title6' => array(
                'type'  => 'text',
                'value' => 'Надоели защитные стекла?',
                'label' => __('Заголовок', '{domain}'),
            ),

            '6one' => array(
                'type'  => 'text',
                'value' => 'Стекло своей толщиной портит <br>внешний вид и&nbsp;впечатление <br>от&nbsp;использования',
                'label' => __('Блок 1', '{domain}'),
            ),

            '6two' => array(
                'type'  => 'text',
                'value' => 'Быстро появляются сколы <br>и&nbsp;трещины. Устройство теряет <br>аккуратный вид',
                'label' => __('Блок 2', '{domain}'),
            ),

            '6three' => array(
                'type'  => 'text',
                'value' => 'Стекло приходится <br>каждые 2-3&nbsp;месяца <br>менять на&nbsp;новое',
                'label' => __('Блок 3', '{domain}'),
            ),
        ),
    ),

    'seven' => array(
        'type' => 'box',
        'title' => __('Седьмой экран', '{domain}'),
        'options' => array(
            'title4' => array(
                'type'  => 'text',
                'value' => 'Фотографии наших работ',
                'label' => __('Название экрана', '{domain}'),
                'desc' => 'Изображения на этот экран добавляются в разделе `Наши работы`',
            ),

        ),
    ),

    'eight' => array(
        'type' => 'box',
        'title' => __('Восьмой экран', '{domain}'),
        'options' => array(
            'pretitle8' => array(
                'type'  => 'text',
                'value' => 'Защита со&nbsp;всех сторон',
                'label' => __('Подзаголовок', '{domain}'),
            ),

            'title8' => array(
                'type'  => 'text',
                'value' => 'Не&nbsp;увеличивает <br>размеры устройства',
                'label' => __('Заголовок', '{domain}'),
            ),

            'desc8' => array(
                'type'  => 'text',
                'value' => 'Ультратонкая плёнка не&nbsp;увеличивает <br>габариты устройства, в&nbsp;отличие <br>от&nbsp;чехлов и&nbsp;стекол.</p>
                <p class="preview__text">Она незаметна, что позволяет наслаждаться <br>вашим любимым смартфоном в&nbsp;том виде, <br>в&nbsp;котором вы&nbsp;его приобрели.',
                'label' => __('Описание', '{domain}'),
            ),

        ),
    ),

    'nine' => array(
        'type' => 'box',
        'title' => __('Девятый экран', '{domain}'),
        'options' => array(
            'pretitle9' => array(
                'type'  => 'text',
                'value' => 'Защита со&nbsp;всех сторон',
                'label' => __('Подзаголовок', '{domain}'),
            ),

            'title9' => array(
                'type'  => 'text',
                'value' => 'Отзывы наших клиентов',
                'label' => __('Заголовок', '{domain}'),
                'desc'  => 'Отзывы добавляются в разделе `Отзывы`',
            ),

        ),
    ),


    'ten' => array(
        'type' => 'box',
        'title' => __('Десятый экран', '{domain}'),
        'options' => array(
            'pretitle10' => array(
                'type'  => 'text',
                'value' => 'Защита со&nbsp;всех сторон',
                'label' => __('Подзаголовок', '{domain}'),
            ),

            'title10' => array(
                'type'  => 'text',
                'value' => 'Чем Броня&nbsp;360° <br>лучше остальных?',
                'label' => __('Заголовок', '{domain}'),
            ),

            'desc10' => array(
                'type'  => 'textarea',
                'value' => '<p class="preview__text">Мы стремимся к&nbsp;созданию идеального <br>продукта для нашего клиента.</p>
                <p class="preview__text">Создаём лекало для любого устройства.</p>
                <p class="preview__text">Мы&nbsp;используем только проверенные <br>нами материалы.</p>
                <p class="preview__text">Каждому клиенту мы&nbsp;предоставляем <br>бесплатную гарантию на&nbsp;материал <br>и&nbsp;работу</p>',
                'label' => __('Заголовок', '{domain}'),
            ),

        ),
    ),

    'eleven' => array(
        'type' => 'box',
        'title' => __('Броня в Youtube', '{domain}'),
        'options' => array(
            'title11' => array(
                'type'  => 'text',
                'value' => 'Броня&nbsp;360° в&nbsp;YOUTUBE',
                'label' => __('Заголовок', '{domain}'),
                'desc'  => 'Видео можно добавить в разделе `Видео`',
            ),
        ),
    ),


    'tvelve' => array(
        'type' => 'box',
        'title' => __('12 блок', '{domain}'),
        'options' => array(
            'pretitle12' => array(
                'type'  => 'text',
                'value' => 'Защита со&nbsp;всех сторон',
                'label' => __('Подзаголовок', '{domain}'),
            ),
            'title12' => array(
                'type'  => 'text',
                'value' => 'Дарим скидку&nbsp;30% на&nbsp;комплект.',
                'label' => __('Заголовок', '{domain}'),
            ),
            'text12' => array(
                'type'  => 'textarea',
                'value' => '<p class="preview__text discount__item discount__item--number">Подписаться на&nbsp;наш <br>инстаграм @bronya360_msk</p>
                <p class="preview__text discount__item discount__item--number">Установить комплект&nbsp;360° <br>можно на&nbsp;любой смартфон.</p>
                <p class="preview__text discount__item discount__item--number">Из&nbsp;любого материала.</p>
                <p class="preview__text discount__item">Установить можно на&nbsp;торговых <br>точках: Авиапарк, Город, Zеленопарк.</p>
                <p class="preview__text discount__item discount__code">Промокод:&nbsp;Skidka30%</p>',
                'label' => 'Контент',
            ),
        ),
    ),


    'ttin' => array(
        'type' => 'box',
        'title' => __('Карта', '{domain}'),
        'options' => array(
            'title13' => array(
                'type'  => 'text',
                'value' => 'Для уточнения адреса и&nbsp;цен на&nbsp;нашу продукцию <br>вы&nbsp;можете связаться с&nbsp;нами в&nbsp;whatsapp',
                'label' => __('Заголовок', '{domain}'),
            ),
        ),
    ),


    'footer' => array(
        'type' => 'box',
        'title' => __('Футер', '{domain}'),
        'options' => array(
            'msk' => array(
                'type'  => 'box',
                'title' => 'Москва',
                'options' => array(
                    'msk1' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">ТРЦ ZЕЛЕНОПАРК</strong>

                    18&nbsp;км от&nbsp;МКАД<br>
                    по&nbsp;Ленинградскому шоссе<br>
                    Рядом с&nbsp;магазином Samsung и&nbsp;Ноу-Хау<br>
                    График работы:<br>
                    Пн -&nbsp;Вс: 10.00 -&nbsp;22.00',
                        'label' => 'Первый элемент',
                    ),

                    'msk2' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">ТРЦ “ГОРОД-ЛЕФОРТОВО”</strong>

                    (м.&nbsp;Авиамоторная, ш.&nbsp;Энтузиастов,&nbsp;12, корп.&nbsp;2)<br>
                    1-й&nbsp;этаж напротив магазина “mayorgo”<br>
                    График работы:<br>
                    Пн -&nbsp;Вс: 10.00 -&nbsp;22.00',
                        'label' => 'Второй элемент',
                    ),

                    'msk3' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">ТРЦ АВИАПАРК</strong>

                    3-й&nbsp;этаж<br>
                    напротив магазина Adidas<br>
                    График работы:<br>
                    Пн -&nbsp;Чт: 10.00 -&nbsp;22.00<br>
                    Пт -&nbsp;Сб: 10.00 -&nbsp;23.00<br>
                    Вс:&nbsp;10.00 -&nbsp;22.00',
                    ),


                    'spb1' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">ТРЦ ОХТА МОЛЛ</strong>

                    л.&nbsp;Брантовская дорога,&nbsp;3<br>
                    2-й&nbsp;этаж,<br>
                    напротив "День Сурка"<br>
                    График работы:<br>
                    Пн -&nbsp;Вс: 10.00 -&nbsp;22.00<br>
                    Тел. +7&nbsp;962&nbsp;706-95-14 (Артем)',
                    ),


                    'spb2' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">МЕГА ДЫБЕНКО</strong>

                    12-й&nbsp;км Мурманское шоссе.<br>
                    напротив магазина Аскона<br>
                    График работы:<br>
                    Пн -&nbsp;Вс: 10.00 -&nbsp;22.00<br>
                    Тел. +7&nbsp;962&nbsp;706-95-14 (Артем)',
                    ),



                    'spb3' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">ТРЦ ЛЕТО</strong>

                    Пулковское&nbsp;ш.,&nbsp;25, корп.&nbsp;1<br>
                    напротив магазина «Ашан»<br>
                    График работы:<br>
                    ЕЖЕДНЕВНО С&nbsp;10:00-22:00<br>
                    Тел. +7&nbsp;921&nbsp;587-58-88',
                    ),


                    'yrs1' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">ТРЦ АУРА</strong>

                    ул.&nbsp;Победы,&nbsp;41<br>
                    1-й&nbsp;этаж (напротив Reserved)<br>
                    График работы:<br>
                    Пн -&nbsp;Вс: 10.00 -&nbsp;22.00<br>
                    Тел. +7&nbsp;915&nbsp;993-04-81 (Иван)',
                    ),


                    'smr1' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">ТРЦ КОСМОПОРТ</strong>

                    Ул.&nbsp;Дыбенко,&nbsp;30<br>
                    1-й&nbsp;этаж (напротив магазина NewYorker)<br>
                    График работы:<br>
                    Пн -&nbsp;Вс: 10.00 -&nbsp;22.00<br>
                    Тел. +7&nbsp;960&nbsp;179-65-95',
                    ),


                    'nng' => array(
                        'type' => 'textarea',
                        'value' => '<strong class="footer__item-strong">ТРЦ "МЕГА"</strong>

                    1-й&nbsp;этаж, напротив М.Видео<br>
                    График работы:<br>
                    Пн -&nbsp;Вс: 10.00 -&nbsp;22.00<br>
                    Тел. +7&nbsp;962&nbsp;706-95-14 (Артем)',
                    ),


                    'copyright' => array(
                        'type' => 'text',
                        'value' => 'Copyright &copy;&nbsp;2021. Броня360. Все права защищены',
                    ),
                    

                ),
            ),
        ),
    ),


);