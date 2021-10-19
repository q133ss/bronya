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
);