
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images -->
	<link rel="icon" href="./img/default/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="./img/default/apple-touch-icon.png">

	<!-- Preview for the site  -->
	<!-- <meta property="og:image" content="//.../img/default/social-preview.png" />
	<meta property="og:image:secure_url" content="https://.../img/default/social-preview.png" />
	<meta property="og:image:type" content="image/jpeg" /> -->

	<title>Главная | New project</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta name="theme-color" content="#000">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.min.css">
</head>
<body>
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
		<symbol id="tik-tok" viewBox="0 0 22 26">
			<path d="M8.46 10.387V9.43a7.058 7.058 0 0 0-1.003-.086A7.44 7.44 0 0 0 3.19 22.892 7.432 7.432 0 0 1 8.46 10.387Z" fill="#25F4EE"></path>
			<path d="M8.64 21.222a3.403 3.403 0 0 0 3.395-3.254V1.748H15A5.56 5.56 0 0 1 14.912.72H10.86v16.206a3.403 3.403 0 0 1-3.395 3.277 3.449 3.449 0 0 1-1.568-.392 3.403 3.403 0 0 0 2.744 1.41ZM20.534 7.25v-.902a5.535 5.535 0 0 1-3.066-.925 5.621 5.621 0 0 0 3.066 1.827Z" fill="#25F4EE"></path>
			<path d="M17.468 5.424a5.582 5.582 0 0 1-1.387-3.685h-1.082a5.614 5.614 0 0 0 2.47 3.685ZM7.457 13.397a3.403 3.403 0 0 0-1.569 6.414 3.395 3.395 0 0 1 2.752-5.387c.34.005.679.058 1.004.157v-4.124a7.112 7.112 0 0 0-1.004-.078h-.18v3.136a3.489 3.489 0 0 0-1.003-.118Z" fill="#FE2C55"></path>
			<path d="M20.534 7.251v3.136a9.62 9.62 0 0 1-5.622-1.827v8.24a7.456 7.456 0 0 1-7.455 7.44 7.378 7.378 0 0 1-4.265-1.348 7.44 7.44 0 0 0 12.889-5.065V9.611a9.635 9.635 0 0 0 5.629 1.803V7.376a5.747 5.747 0 0 1-1.176-.125Z" fill="#FE2C55"></path>
			<path d="M14.912 16.8V8.56a9.62 9.62 0 0 0 5.63 1.803V7.227a5.622 5.622 0 0 1-3.074-1.803 5.614 5.614 0 0 1-2.47-3.685h-2.963v16.23a3.403 3.403 0 0 1-6.154 1.857 3.402 3.402 0 0 1 1.568-6.413c.34.003.678.056 1.003.157v-3.136a7.432 7.432 0 0 0-5.268 12.544 7.377 7.377 0 0 0 4.273 1.262 7.456 7.456 0 0 0 7.455-7.44Z" fill="#000"></path>
		</symbol>
		<symbol id="youtube" viewBox="0 0 40 30">
			<path d="M38.4 24.488a4.785 4.785 0 0 1-4.025 3.833c-3.163.479-8.433 1.054-14.375 1.054-5.846 0-11.117-.575-14.375-1.054A4.785 4.785 0 0 1 1.6 24.487C1.217 22.284.833 19.026.833 15s.384-7.283.767-9.488A4.785 4.785 0 0 1 5.625 1.68C8.787 1.2 14.058.625 20 .625s11.117.575 14.375 1.054A4.785 4.785 0 0 1 38.4 5.512c.383 2.205.863 5.463.863 9.488-.096 4.025-.48 7.283-.863 9.488Z" fill="#FF3D00"></path>
			<path d="M16.167 21.708V8.292L27.667 15l-11.5 6.708Z" fill="#fff"></path>
		</symbol>
		<symbol id="instt" viewBox="0 0 30 30">
			
		</symbol>
	</svg>

	<header class="header">
	<picture class="header__logo">
		<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/logo.webp" type="image/webp">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" class="header__logo-img" alt="Логотип">
	</picture>

	<nav class="header__nav">
		<a href="./index.html" class="header__link">Главная</a>
		<a href="#about" class="header__link">О&nbsp;пленке</a>
		<a href="#photo" class="header__link">Галерея</a>
		<a href="#reviews" class="header__link">Отзывы</a>
		<a href="https://xn--360-9cd4dfn6j.xn--p1ai/assets/app/img/templates/price_A4%20(1).jpg" target="_blank" class="header__link">Прайс-лист</a>
		<a href="#contacts" class="header__link">Контакты</a>
	</nav>
</header>
	<section class="first">
	<div class="wrapper first__wrap">
		<h2 class="first__title first__up">
			<?php echo $option_value = fw_get_db_settings_option('title'); ?>
		</h2>

		<div class="first__quality">
			<picture class="first__iphone">
				<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/first/iphone.webp" type="image/webp">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/first/iphone.png" class="first__iphone-img" alt="iPhone">
				<span class="glare glare--mini first__glare"></span>
			</picture>

			<ul class="first__list first__up">
				<li class="first__item">
					<span class="first__item-line"></span>
					<?php echo $option_value = fw_get_db_settings_option('advantage1'); ?>
				</li>

				<li class="first__item">
					<span class="first__item-line"></span>
					<?php echo $option_value = fw_get_db_settings_option('advantage2'); ?>
				</li>

				<li class="first__item">
					<span class="first__item-line"></span>
					<?php echo $option_value = fw_get_db_settings_option('advantage3'); ?>
				</li>

				<li class="first__item">
					<span class="first__item-line"></span>
					<?php echo $option_value = fw_get_db_settings_option('advantage4'); ?>
				</li>
			</ul>
		</div>

		<p class="first__text first__up"><?php echo $option_value = fw_get_db_settings_option('description'); ?></p>

		<a href="<?php echo $option_value = fw_get_db_settings_option('price_link'); ?>" target="_blank" class="btn first__button first__up"><?php echo $option_value = fw_get_db_settings_option('price'); ?></a>
	</div>

	<div class="social first__social first__up">
		<a href="<?php echo $option_value = fw_get_db_settings_option('tiktok'); ?>" target="_blank" class="social__item social__item--youtube first__social-link"><svg class="el-decor social__icon" aria-hidden="true"><use xlink:href="#tik-tok"></use></svg></a>
		<a href="<?php echo $option_value = fw_get_db_settings_option('youtube'); ?>" target="_blank" class="social__item social__item--youtube first__social-link"><svg class="el-decor social__icon" aria-hidden="true"><use xlink:href="#youtube"></use></svg></a>
		<a href="<?php echo $option_value = fw_get_db_settings_option('instagram'); ?>" target="_blank" class="social__item social__item--inst first__social-link"><svg class="el-decor social__icon" aria-hidden="true" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
			<path d="m22.93 29.242-15.833.015C3.613 29.26.76 26.414.757 22.93L.742 7.097C.74 3.614 3.586.76 7.07.757L22.902.742c3.484-.003 6.336 2.844 6.34 6.327l.015 15.834c.004 3.484-2.844 6.336-6.327 6.34Z" fill="url(#a)"></path>
			<path d="m22.93 29.242-15.833.015C3.613 29.26.76 26.414.757 22.93L.742 7.097C.74 3.614 3.586.76 7.07.757L22.902.742c3.484-.003 6.336 2.844 6.34 6.327l.015 15.834c.004 3.484-2.844 6.336-6.327 6.34Z" fill="url(#b)"></path>
			<path d="M15 20.542A5.548 5.548 0 0 1 9.458 15 5.548 5.548 0 0 1 15 9.46 5.548 5.548 0 0 1 20.542 15 5.548 5.548 0 0 1 15 20.542Zm0-9.5A3.963 3.963 0 0 0 11.042 15 3.963 3.963 0 0 0 15 18.96 3.963 3.963 0 0 0 18.958 15 3.963 3.963 0 0 0 15 11.042ZM20.938 10.25a1.188 1.188 0 1 0 0-2.375 1.188 1.188 0 0 0 0 2.375Z" fill="#fff"></path>
			<path d="M19.75 25.292h-9.5a5.548 5.548 0 0 1-5.542-5.542v-9.5a5.548 5.548 0 0 1 5.542-5.542h9.5a5.548 5.548 0 0 1 5.542 5.542v9.5a5.548 5.548 0 0 1-5.542 5.542Zm-9.5-19a3.963 3.963 0 0 0-3.958 3.958v9.5a3.963 3.963 0 0 0 3.958 3.959h9.5a3.963 3.963 0 0 0 3.958-3.959v-9.5a3.963 3.963 0 0 0-3.958-3.958h-9.5Z" fill="#fff"></path>
			<defs>
				<radialGradient id="a" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11.342 29.278) scale(35.545)">
					<stop stop-color="#FD5"></stop>
					<stop offset=".328" stop-color="#FF543F"></stop>
					<stop offset=".348" stop-color="#FC5245"></stop>
					<stop offset=".504" stop-color="#E64771"></stop>
					<stop offset=".643" stop-color="#D53E91"></stop>
					<stop offset=".761" stop-color="#CC39A4"></stop>
					<stop offset=".841" stop-color="#C837AB"></stop>
				</radialGradient>
				<radialGradient id="b" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(23.602 0 0 15.726 5.33 .386)">
					<stop stop-color="#4168C9"></stop>
					<stop offset=".999" stop-color="#4168C9" stop-opacity="0"></stop>
				</radialGradient>
			</defs>
		</svg></a>
	</div>
</section>
	<section id="about" class="preview preview--first">
	<div class="wrapper preview__wrap">
		<div class="preview__content">
			<span class="glare glare--big preview__glare"></span>
			<span class="preview__subtitle"><?php echo $option_value = fw_get_db_settings_option('defend'); ?></span>

			<h2 class="preview__title"><?php echo $option_value = fw_get_db_settings_option('def_title'); ?></h2>

			<div class="preview__group">
				<p class="preview__text"><?php echo $option_value = fw_get_db_settings_option('def_desc'); ?></p>
			</div>

			<a href="https://wa.me/<?php echo $option_value = fw_get_db_settings_option('wa_num'); ?>" target="_blank" class="btn btn--white preview__button preview__button--whatsapp">Написать в&nbsp;whatsapp</a>
			<a href="https://xn--360-9cd4dfn6j.xn--p1ai/assets/app/img/templates/price_A4%20(1).jpg" target="_blank" class="btn preview__button">Посмотреть цены</a>
		</div>

		<!-- Блок будет скопирован javascript-ом, для мобильной версии сайта. -->
		<picture class="preview__box">
			<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/preview/phone.webp" type="image/webp">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/preview/phone.png" class="preview__box-img" alt="Презентация защитной плёнки">
		</picture>
	</div>
</section>
	<section class="devices">
	<h2 class="wrapper devices__title"><?php echo $option_value = fw_get_db_settings_option('title3'); ?></h2>

	<ul class="devices__list">
		<?php
  	$posts = get_posts(array(
    "post_type" => "post_type_name",
    'post_status' => 'publish',
    'order' => 'ASC',
));
foreach ($posts as $post) { ?>
	<li class="devices__item" style="background-image:url(' <?php the_post_thumbnail_url(); ?> ');"><?php the_title(); ?></li>
<?php } ?>
	</ul>
</section>
	<section class="types">
	<h2 class="wrapper types__title"><?php echo $option_value = fw_get_db_settings_option('title4'); ?></h2>

	<div class="types__list">
		<?php
  	$plenka = get_posts(array(
    "post_type" => "plenka",
    'post_status' => 'publish',
    'order' => 'ASC',
));
foreach ($plenka as $post) { ?>
		<picture class="types__item types__item--dark">
			<source srcset="<?php the_post_thumbnail_url(); ?>" type="image/webp">
			<img src="<?php the_post_thumbnail_url(); ?>" class="types__item-img" alt="1-ый тип">
		</picture>
	<?php } ?>
		<!-- <picture class="types__item types__item--white">
			<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/types/type-1.webp" type="image/webp">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/types/type-1.png" class="types__item-img" alt="2-ой тип">
		</picture>
		<picture class="types__item types__item--dark">
			<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/types/type-2.webp" type="image/webp">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/types/type-2.png" class="types__item-img" alt="3-ий тип">
		</picture>
		<picture class="types__item types__item--white">
			<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/types/type-1.webp" type="image/webp">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/types/type-1.png" class="types__item-img" alt="2-ой тип">
		</picture> -->
	</div>

	<div class="wrapper arrow types__arrows">
		<button class="arrow__item arrow__item--left types__arrow types__arrow--prev"></button>
		<button class="arrow__item arrow__item--right types__arrow types__arrow--next"></button>
	</div>
</section>
	<section class="preview preview--second">
	<div class="wrapper preview__wrap preview__wrap--revers">
		<div class="preview__content">
			<span class="glare glare--big preview__glare"></span>
			<span class="preview__subtitle"><?php echo $option_value = fw_get_db_settings_option('pretitle5'); ?></span>

			<h2 class="preview__title"><?php echo $option_value = fw_get_db_settings_option('title5'); ?></h2>

			<div class="preview__group">
				<p class="preview__text"><?php echo $option_value = fw_get_db_settings_option('desc5'); ?></p>
			</div>

			<a href="https://wa.me/<?php echo $option_value = fw_get_db_settings_option('wa_num'); ?>" target="_blank" class="btn btn--white preview__button preview__button--whatsapp">Написать в&nbsp;whatsapp</a>
		</div>

		<!-- Блок будет скопирован javascript-ом, для мобильной версии сайта. -->
		<picture class="preview__box">
			<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/preview/phone.webp" type="image/webp">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/preview/phone.png" class="preview__box-img" alt="Презентация защитной плёнки">
		</picture>
	</div>
</section>
	<section class="pain">
	<div class="wrapper pain__wrap">
		<h2 class="pain__title"><?php echo $option_value = fw_get_db_settings_option('title6'); ?></h2>

		<ul class="pain__list">
			<li class="pain__item">
				<svg class="pain__icon pain__icon--1" width="57" height="69" viewBox="0 0 57 69" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M23.91 10.722a2 2 0 0 1 1.902-1.38h27.056a2 2 0 0 1 1.902 2.619L37.26 65.74a2 2 0 0 1-1.902 1.38H8.302a2 2 0 0 1-1.901-2.618l17.51-53.78-.902-.294.902.293Z" stroke="#C6C6C6" stroke-width="2"></path>
					<path d="M19.74 2.38A2 2 0 0 1 21.642 1h27.055A2 2 0 0 1 50.6 3.62L33.09 57.4a2 2 0 0 1-1.901 1.38H4.132a2 2 0 0 1-1.902-2.619l17.51-53.78-.902-.294.902.294Z" stroke="#fff" stroke-width="2"></path>
					<path d="M18.073 63.951h9.732" stroke="#C6C6C6"></path>
					<path stroke="#fff" stroke-linecap="round" d="m18.196 32.669 13.083-9.158M22.314 38.223l14.519-11.879"></path>
				</svg>

				<?php echo $option_value = fw_get_db_settings_option('6one'); ?>
			</li>

			<li class="pain__item">
				<svg class="pain__icon pain__icon--2" width="74" height="72" viewBox="0 0 74 72" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="47.963" y="1.414" width="34.733" height="59.222" rx="2" transform="rotate(44.854 47.963 1.414)" stroke="#fff" stroke-width="2"></rect>
					<path d="M19.745 56.46H31.31V43.535l7.482.68" stroke="#fff"></path>
					<path d="M23.827 68.704 1.379 53.06M35.391 70.065l23.128-16.326M19.065 71.425 6.141 66.664M40.153 70.745l13.605-3.401" stroke="#fff" stroke-linecap="round"></path>
				</svg>

				<?php echo $option_value = fw_get_db_settings_option('6two'); ?>
			</li>

			<li class="pain__item">
				<svg class="pain__icon pain__icon--3" width="57" height="61" viewBox="0 0 57 61" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M.643 4.857h55.643V60.5H.643V4.857Z" stroke="#fff"></path>
					<path stroke="#fff" d="M7.905 26.643h41.119v22.238H7.905z"></path>
					<path stroke="#fff" d="M7.905 26.643h30.952v22.238H7.905z"></path>
					<path stroke="#fff" d="M7.905 26.643h20.786v22.238H7.905z"></path>
					<path stroke="#fff" d="M7.905 26.643h10.619v22.238H7.905z"></path>
					<path stroke="#fff" d="M7.905 26.643h10.619v7.714H7.905z"></path>
					<path stroke="#fff" d="M18.071 26.643H28.69v7.714H18.071z"></path>
					<path stroke="#fff" d="M28.238 26.643h10.619v7.714H28.238z"></path>
					<path stroke="#fff" d="M38.405 26.643h10.619v7.714H38.405zM7.905 33.905h10.619v7.714H7.905z"></path>
					<path stroke="#fff" d="M18.071 33.905H28.69v7.714H18.071z"></path>
					<path stroke="#fff" d="M28.238 33.905h10.619v7.714H28.238z"></path>
					<path stroke="#fff" d="M38.405 33.905h10.619v7.714H38.405zM7.905 41.167h10.619v7.714H7.905z"></path>
					<path stroke="#fff" d="M18.071 41.167H28.69v7.714H18.071z"></path>
					<path stroke="#fff" d="M28.238 41.167h10.619v7.714H28.238z"></path>
					<path stroke="#fff" d="M38.405 41.167h10.619v7.714H38.405z"></path>
					<rect x="10.809" y=".5" width="6.262" height="10.619" rx=".5" stroke="#fff"></rect>
					<rect x="41.309" y=".5" width="6.262" height="10.619" rx=".5" stroke="#fff"></rect>
				</svg>

				<?php echo $option_value = fw_get_db_settings_option('6three'); ?>
			</li>
		</ul>
	</div>
</section>
	<section id="photo" class="photos">
	<div class="wrapper photos__wrap">
		<h2 class="photos__title">Фотографии наших работ</h2>

		<div class="photos__gallery">
			<?php
  	$posts = get_posts(array(
    "post_type" => "works",
    'post_status' => 'publish',
    'order' => 'ASC',
));
foreach ($posts as $post) { ?>
			<div class="photos__gallery-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
		<?php } ?>
			<!-- <div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/02.png');"></div>
			<div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/03.png');"></div>
			<div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/04.png');"></div>
			<div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/05.png');"></div>
			<div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/01.png');"></div>
			<div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/02.png');"></div>
			<div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/03.png');"></div>
			<div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/04.png');"></div>
			<div class="photos__gallery-item" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/photos/05.png');"></div> -->
		</div>

		<button class="btn photos__more">Смотреть еще</button>
	</div>
</section>
	<section class="preview preview--three">
	<div class="wrapper preview__wrap">
		<div class="preview__content">
			<span class="glare glare--big preview__glare"></span>
			<span class="preview__subtitle"><?php echo $option_value = fw_get_db_settings_option('pretitle8'); ?></span>

			<h2 class="preview__title"><?php echo $option_value = fw_get_db_settings_option('title8'); ?></h2>

			<div class="preview__group">
				<p class="preview__text"><?php echo $option_value = fw_get_db_settings_option('desc8'); ?></p>
			</div>

			<a href="https://wa.me/<?php echo $option_value = fw_get_db_settings_option('wa_num'); ?>" target="_blank" class="btn btn--white preview__button preview__button--whatsapp">Написать в&nbsp;whatsapp</a>
			<a href="https://xn--360-9cd4dfn6j.xn--p1ai/assets/app/img/templates/price_A4%20(1).jpg" target="_blank" class="btn preview__button">Посмотреть цены</a>
		</div>

		<!-- Блок будет скопирован javascript-ом, для мобильной версии сайта. -->
		<picture class="preview__box">
			<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/preview/phone.webp" type="image/webp">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/preview/phone.png" class="preview__box-img" alt="Презентация защитной плёнки">
		</picture>
	</div>
</section>
	<section id="reviews" class="reviews">
	<div class="wrapper reviews__wrap">
		<span class="reviews__subtitle"><?php echo $option_value = fw_get_db_settings_option('pretitle9'); ?></span>
		<h2 class="reviews__title"><?php echo $option_value = fw_get_db_settings_option('title9'); ?></h2>
	</div>

	<div class="reviews__list">
		<?php
  	$review = get_posts(array(
    "post_type" => "review",
    'post_status' => 'publish',
    'order' => 'ASC',
));
foreach ($review as $post) { ?>

		<picture class="reviews__item">
			<source srcset="<?php the_post_thumbnail_url(); ?>" type="image/webp">
			<img src="<?php the_post_thumbnail_url(); ?>" class="reviews__item-img" alt="Отзыв">
		</picture>
	<?php } ?>
		
	</div>

	<div class="wrapper arrow reviews__arrows">
		<button class="arrow__item arrow__item--left reviews__arrow reviews__arrow--prev"></button>
		<button class="arrow__item arrow__item--right reviews__arrow reviews__arrow--next"></button>
	</div>
</section>
	<section class="preview preview--last">
	<div class="wrapper preview__wrap preview__wrap--revers">
		<div class="preview__content">
			<span class="glare glare--big preview__glare"></span>
			<span class="preview__subtitle"><?php echo $option_value = fw_get_db_settings_option('pretitle10'); ?></span>

			<h2 class="preview__title"><?php echo $option_value = fw_get_db_settings_option('title10'); ?></h2>

			<div class="preview__group">
				<?php echo $option_value = fw_get_db_settings_option('desc10'); ?>
			</div>
		</div>

		<!-- Блок будет скопирован javascript-ом, для мобильной версии сайта. -->
		<picture class="preview__box">
			<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/preview/phone.webp" type="image/webp">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/preview/phone.png" class="preview__box-img" alt="Презентация защитной плёнки">
		</picture>
	</div>
</section>
	<section class="in-youtube">
	<h2 class="wrapper in-youtube__title">Броня&nbsp;360° в&nbsp;YOUTUBE</h2>

	<div class="in-youtube__slider">

		<?php
  	$video = get_posts(array(
    "post_type" => "video",
    'post_status' => 'publish',
    'order' => 'ASC',
	));
	foreach ($video as $post) { ?>

		<div class="in-youtube__item">
			<?php 
			the_excerpt();
			 ?>
		</div>
<?php } ?>

	</div>

	<div class="wrapper arrow in-youtube__arrows">
		<button class="arrow__item arrow__item--left in-youtube__arrow in-youtube__arrow--prev"></button>
		<button class="arrow__item arrow__item--right in-youtube__arrow in-youtube__arrow--next"></button>
	</div>
</section>
	<section class="preview discount">
	<div class="wrapper preview__wrap preview__wrap--revers">
		<div class="preview__content">
			<span class="glare glare--big preview__glare"></span>
			<span class="preview__subtitle"><?php echo $option_value = fw_get_db_settings_option('pretitle12'); ?></span>

			<h2 class="preview__title"><?php echo $option_value = fw_get_db_settings_option('title12'); ?></h2>

			<div class="preview__group discount__group">
				<?php echo $option_value = fw_get_db_settings_option('text12'); ?>
			</div>

			<a href="https://wa.me/<?php echo $option_value = fw_get_db_settings_option('wa_num'); ?>" target="_blank" class="btn btn--white preview__button discount__btn preview__button--whatsapp">Написать в&nbsp;whatsapp</a>
		</div>

		<picture class="discount__box">
			<source srcset="<?php bloginfo('template_directory'); ?>/assets/img/ipad.webp" type="image/webp">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/ipad.png" class="discount__box-img" alt="Полный комплект">
		</picture>
	</div>
</section>
	<footer id="contacts" class="footer">
	<div class="wrapper footer__wrap">
		<h2 class="footer__title"><?php echo $option_value = fw_get_db_settings_option('title13'); ?></h2>

		<a href="https://wa.me/<?php $option_value = fw_get_db_settings_option('wa_num'); ?>" target="_blank" class="btn btn--white footer__whatsapp">Написать в&nbsp;whatsapp</a>

		<iframe class="footer__map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A7efafc83d00a65615dcabed14568657aa27d09989466911679081e44b5d6ff2c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>

		<div class="footer__cities">
			<div class="footer__city footer__city--x3">
				<div class="footer__group footer__group--up">
					<p class="footer__city-name">Москва:</p>
					<button class="footer__more"></button>
				</div>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('msk1'); ?>
				</p>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('msk2'); ?>
				</p>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('msk3'); ?>
				</p>
			</div>

			<div class="footer__city footer__city--x3">
				<div class="footer__group footer__group--up">
					<p class="footer__city-name">Санкт-Петербург:</p>
					<button class="footer__more"></button>
				</div>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('spb1'); ?>
				</p>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('spb2'); ?>
				</p>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('spb3'); ?>
				</p>
			</div>

			<div class="footer__city">
				<div class="footer__group footer__group--up">
					<p class="footer__city-name">Ярославль:</p>
				</div>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('yrs1'); ?>
				</p>
			</div>

			<div class="footer__city">
				<div class="footer__group footer__group--up">
					<p class="footer__city-name">Самара:</p>
				</div>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('smr1'); ?>
				</p>
			</div>

			<div class="footer__city">
				<div class="footer__group footer__group--up">
					<p class="footer__city-name">Нижний-новгород:</p>
				</div>

				<p class="footer__item">
					<?php echo $option_value = fw_get_db_settings_option('nng'); ?>
				</p>
			</div>
		</div>

		<div class="footer__group footer__group--down">
			<p class="footer__copy"><?php echo $option_value = fw_get_db_settings_option('copyright'); ?></p>

			<div class="social footer__social">
				<a href="https://www.tiktok.com/@bronya360msk" target="_blank" class="social__item social__item--youtube footer__social-link"><svg class="el-decor social__icon" aria-hidden="true"><use xlink:href="#tik-tok"></use></svg></a>
				<a href="https://www.youtube.com/channel/UCzOkrHAWcRD0l5ZQJAZpGvg" target="_blank" class="social__item social__item--youtube footer__social-link"><svg class="el-decor social__icon" aria-hidden="true"><use xlink:href="#youtube"></use></svg></a>
				<a href="https://www.instagram.com/bronya360_msk" target="_blank" class="social__item social__item--inst footer__social-link"><svg class="el-decor social__icon" aria-hidden="true" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
					<path d="m22.93 29.242-15.833.015C3.613 29.26.76 26.414.757 22.93L.742 7.097C.74 3.614 3.586.76 7.07.757L22.902.742c3.484-.003 6.336 2.844 6.34 6.327l.015 15.834c.004 3.484-2.844 6.336-6.327 6.34Z" fill="url(#c)"></path>
					<path d="m22.93 29.242-15.833.015C3.613 29.26.76 26.414.757 22.93L.742 7.097C.74 3.614 3.586.76 7.07.757L22.902.742c3.484-.003 6.336 2.844 6.34 6.327l.015 15.834c.004 3.484-2.844 6.336-6.327 6.34Z" fill="url(#d)"></path>
					<path d="M15 20.542A5.548 5.548 0 0 1 9.458 15 5.548 5.548 0 0 1 15 9.46 5.548 5.548 0 0 1 20.542 15 5.548 5.548 0 0 1 15 20.542Zm0-9.5A3.963 3.963 0 0 0 11.042 15 3.963 3.963 0 0 0 15 18.96 3.963 3.963 0 0 0 18.958 15 3.963 3.963 0 0 0 15 11.042ZM20.938 10.25a1.188 1.188 0 1 0 0-2.375 1.188 1.188 0 0 0 0 2.375Z" fill="#fff"></path>
					<path d="M19.75 25.292h-9.5a5.548 5.548 0 0 1-5.542-5.542v-9.5a5.548 5.548 0 0 1 5.542-5.542h9.5a5.548 5.548 0 0 1 5.542 5.542v9.5a5.548 5.548 0 0 1-5.542 5.542Zm-9.5-19a3.963 3.963 0 0 0-3.958 3.958v9.5a3.963 3.963 0 0 0 3.958 3.959h9.5a3.963 3.963 0 0 0 3.958-3.959v-9.5a3.963 3.963 0 0 0-3.958-3.958h-9.5Z" fill="#fff"></path>
					<defs>
						<radialGradient id="c" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11.342 29.278) scale(35.545)">
							<stop stop-color="#FD5"></stop>
							<stop offset=".328" stop-color="#FF543F"></stop>
							<stop offset=".348" stop-color="#FC5245"></stop>
							<stop offset=".504" stop-color="#E64771"></stop>
							<stop offset=".643" stop-color="#D53E91"></stop>
							<stop offset=".761" stop-color="#CC39A4"></stop>
							<stop offset=".841" stop-color="#C837AB"></stop>
						</radialGradient>
						<radialGradient id="d" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="matrix(23.602 0 0 15.726 5.33 .386)">
							<stop stop-color="#4168C9"></stop>
							<stop offset=".999" stop-color="#4168C9" stop-opacity="0"></stop>
						</radialGradient>
					</defs>
				</svg></a>
			</div>

			<p class="footer__made">Сделано в&nbsp;BUSINESS PUMP</p>
		</div>
	</div>
</footer>

	<script src="<?php bloginfo('template_directory'); ?>/assets/libs/jquery-1.11.0.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/libs/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/libs/slick.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/libs/app.min.js"></script>
</body>
</html>