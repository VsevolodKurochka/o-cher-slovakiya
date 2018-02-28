<?php require_once 'inc/functions.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Среднее образование в Польше</title>
	<meta charset="UTF-8">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="width">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<meta name="theme-color" content="#000000">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#000000">
	<meta name="apple-mobile-web-app-title" content="Application Name">
	<meta name="msapplication-TileImage" content="img/favicons/144x144.png">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<meta name="application-name" content="Среднее образование в Польше">
	<meta property="og:title" content="Среднее образование в Польше">
	<meta itemprop="headline" content="Среднее образование в Польше">
	<meta property="og:site_name" content="Среднее образование в Польше">
	<meta itemprop="description" content="Среднее образование в Польше">
	<meta property="og:description" content="Среднее образование в Польше">
	<link rel="shortcut icon" href="img/logo.png" type="image/png">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="v-fixed v-fixed_md-top">
		<div class="v-nav v-nav_style" id="js-wrapper-navigation">
			<div class="v-nav__container v-container">
				<div class="v-nav__row v-row v-flex v-flex_y-center">
					<div class="v-nav__logo v-col-8 v-col-md-2">
						<button class="v-hamburger v-hamburger_effect-1" type="button" id="js-vnav__btn"><span class="v-hamburger__lines"><span>Line1</span><span>Line2</span><span>Line3</span></span>
							<!--+e.SPAN.text Menu-->
						</button>
						<div class="v-nav__logo-content"><img class="v-nav__logo-content-img" src="img/logo.png" alt="" role="presentation"/>
						</div>
					</div>
					<nav class="v-nav__menu v-col-12 v-col-md-10" id="js-navigation"><ul>
						<li class="v-nav__menu-item"><a href="#section-consultation">Что будет на консультации</a>
						</li>
						<li class="v-nav__menu-item"><a href="#section-about">О нас</a>
						</li>
						<li class="v-nav__menu-item"><a href="#section-review">Отзывы родителей</a>
						</li>
						<li class="v-nav__menu-item">
							<button class="v-btn v-btn_navigation v-effect v-effect_bounce-top" data-action="v-modal" data-open="#modal-form">Записаться на консультацию
							</button>
						</li>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="site" id="page">
		<header class="v-site-header">
			<?php echo quadro('1', 'v-site-header', '1'); ?>
			<div class="v-container">
				<div class="v-site-header__row v-row">
					<div class="v-col-12 v-col-sm-7">
						<h1 class="v-site-header__title v-title-lg">Среднее<br>образование в <span class="v-site-header__title-flag">Польше</span>
						</h1>
						<div class="v-site-header__description">
							<p class="v-site-header__description-title">Поможем Вашему ребенку поступить в престижную польскую школу, лицей или техникум, после которого он сможет:
							</p>
							<div class="v-site-header__description-content">
								<div class="v-site-header__description-content-inner">
									<ul class="v-list v-list_check">
										<li>Стать студентом рейтингового Европейского вуза</li>
										<li>Остаться жить и работать в Европе или</li>
										<li>Вернуться востребованным специалистом в Украину</li>
									</ul>
									<div class="v-site-header__description-footer">
										<p><span class="v-color-brand-3">* </span>9 из 10 детей наших клиентов остаются жить в Европе после окончания лицея или техникума в Польше</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="v-site-header__column v-site-header__column_form v-col-12 v-col-sm-5 v-col-md-4">
						<div class="v-shadow">
							<div class="v-shadow__header">
								<p class="v-shadow__title">Запишитесь на <span class="v-color-brand-2">бесплатную консультацию </span>и мы предварительно оценим шансы Вашего ребенка на поступление
								</p>
							</div>
							<div class="v-shadow__content">
								<?php echo form('Проконсультироваться бесплатно'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="site-content" id="content">
			<?php include 'inc/sections/bonus.php'; ?>
			<section class="v-section v-study">
				<div class="v-container">
					<div class="v-shadow v-shadow_large v-shadow_background v-shadow_background-ukraine-map">
						<div class="v-shadow__header">
							<p class="v-shadow__subtitle">Мы движемся в Европу и всё такое…
							</p>
							<h3 class="v-shadow__title v-title-md">Но пока <span class="v-color-brand-2">украинское образование</span> - это:
							</h3>
						</div>
						<div class="v-row">
							<div class="v-icon v-icon_center v-col-12 v-col-sm-4 v-wow v-fadeInUp" data-wow-delay="0.1s">
								<div class="v-icon__inner">
									<div class="v-icon__header"><img class="v-icon__img" src="img/icon-study-1.png" alt="" role="presentation"/>
									</div>
									<div class="v-icon__body"><span class="bold">Сплошная теория</span>, которая безнадежно устарела еще 15 лет назад
									</div>
								</div>
							</div>
							<div class="v-icon v-icon_center v-col-12 v-col-sm-4 v-wow v-fadeInUp" data-wow-delay="0.3s">
								<div class="v-icon__inner">
									<div class="v-icon__header"><img class="v-icon__img" src="img/icon-study-2.png" alt="" role="presentation"/>
									</div>
									<div class="v-icon__body"><span class="bold">Диплом</span>, который НЕ дает возможности работать где-то, кроме Украины
									</div>
								</div>
							</div>
							<div class="v-icon v-icon_center v-col-12 v-col-sm-4 v-wow v-fadeInUp" data-wow-delay="0.5s">
								<div class="v-icon__inner">
									<div class="v-icon__header"><img class="v-icon__img" src="img/icon-study-3.png" alt="" role="presentation"/>
									</div>
									<div class="v-icon__body"><span class="bold">Коррупция</span>, взяточничество и бюрократия в чистом виде
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="v-future">
				<div class="v-container">
					<div class="v-row">
						<div class="v-future__column v-future__column_text v-col-12 v-col-sm-6">
							<h3 class="v-title-md v-offset-static-sm"><span class="v-color-brand-2">Какое будущее </span>Вы
								готовите своему ребенку?
							</h3>
							<div class="v-text">
								<p>Давайте честно: единственное, что «светит» Вашему чаду после украинской школы или даже университета - это зарплата 5000 грн. и офис без кондиционера.</p>
								<p>Не хочется нагнетать, но это правда так.</p>
								<p>Конечно, Вы посматривали в сторону Европы… но как всё устроить?</p>
								<p>Это же дорого… сложно… Да и как отпустить ребенка в чужую страну без присмотра?</p>
							</div>
						</div>
						<div class="v-future__column v-future__column_image v-col-12 v-col-sm-6"><img class="v-future__img" src="img/future-1.png" alt="" role="presentation"/><span class="v-future__icon v-future__icon_1">!</span><span class="v-future__icon v-future__icon_2">!</span>
						</div>
					</div>
				</div>
			</section>
			<section class="v-benefits v-benefits_organization">
				<?php echo quadro('1', 'v-benefits', '1'); ?>
				<?php echo quadro('2', 'v-benefits', '2'); ?>
				<div class="v-container">
					<h3 class="v-title-md v-title-section">Мы организуем поступление так, что Вам даже не придется никуда ехать
					</h3>
					<div class="v-row">
						<div class="v-icon v-icon_left v-col-12 v-col-sm-6 v-col-md-4 v-wow v-fadeInUp" data-wow-delay="0.1s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-1.png" alt="" role="presentation"/>
									<p class="v-icon__title">Всё в удаленном режиме
									</p>
								</div>
								<div class="v-icon__body">
									<p>Если у Вас нет времени или возможности приехать к нам в офис, мы организуем всё удаленно. Собеседование с ребенком по Скайпу, доставка документов по почте</p>
								</div>
							</div>
						</div>
						<div class="v-icon v-icon_left v-col-12 v-col-sm-6 v-col-md-4 v-wow v-fadeInUp" data-wow-delay="0.15s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-2.png" alt="" role="presentation"/>
									<p class="v-icon__title">Соберем документы и откроем визу
									</p>
								</div>
								<div class="v-icon__body">
									<p>Особенность Польши в том, что там каждая школа устанавливает свои правила поступления. Мы общаемся со школами напрямую и поэтому без ошибок и задержек делаем все нужные документы и визу</p>
								</div>
							</div>
						</div>
						<div class="v-icon v-icon_left v-col-12 v-col-sm-6 v-col-md-4 v-wow v-fadeInUp" data-wow-delay="0.2s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-3.png" alt="" role="presentation"/>
									<p class="v-icon__title">Отвезем, поселим, обеспечим опекуна
									</p>
								</div>
								<div class="v-icon__body">
									<p>После поступления мы едем с Вашим ребенком в Польшу, договариваемся за его поселение в общежитие, покупаем местную SIM-карту и обеспечиваем ему личного опекуна</p>
								</div>
							</div>
						</div>
						<div class="v-icon v-icon_left v-col-12 v-col-sm-6 v-col-md-4 v-wow v-fadeInUp" data-wow-delay="0.25s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-4.png" alt="" role="presentation"/>
									<p class="v-icon__title">Продолжим поддерживать после поступления
									</p>
								</div>
								<div class="v-icon__body">
									<p>Первый год учебы мы постоянно на связи с Вашим ребенком, его учителями и директором школы. Вы всегда в курсе его успеваемости, поведения и местонахождения</p>
								</div>
							</div>
						</div>
						<div class="v-icon v-icon_left v-col-12 v-col-sm-6 v-col-md-4 v-wow v-fadeInUp" data-wow-delay="0.3s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-5.png" alt="" role="presentation"/>
									<p class="v-icon__title">Оперативно решаем любые ситуации
									</p>
								</div>
								<div class="v-icon__body">
									<p>Вы знаете детей - они любознательны и активны. К сожалению, это не всегда хорошо заканчивается. Но будьте уверены, что мы обеспечим круглосуточный присмотр за Вашими детьми и квалифицированную медицинскую помощь</p>
								</div>
							</div>
						</div>
						<div class="v-icon v-icon_left v-col-12 v-col-sm-6 v-col-md-4 v-wow v-fadeInUp" data-wow-delay="0.35s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-6.png" alt="" role="presentation"/>
									<p class="v-icon__title">Помогаем выбрать специализацию
									</p>
								</div>
								<div class="v-icon__body">
									<p>Не беда, если Ваш ребенок пока не решил, на кого хочет учиться. Мы проведем с ним комплексное интервью, выявим сильные стороны и предложим несколько школ, где ему будет комфортнее всего</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="v-security" id="section-consultation">
				<div class="v-container">
					<h3 class="v-title-md v-title-section">Безопасность Вашего ребенка - прежде всего
					</h3><img class="v-security__image" src="img/icon-security.png" alt="" role="presentation"/>
					<div class="v-security__row v-row">
						<div class="v-security__column v-security__column_text v-col-12 v-col-sm-6 v-wow v-fadeInUp">
							<h4 class="v-title-sm v-offset-static-xs"><span class="v-color-brand-2">Что Вы узнаете </span>на бесплатной консультации
							</h4>
							<ul class="v-list v-list_flag">
								<li>Как выбрать идеальную школу для своего ребенка?</li>
								<li>Школы каких направлений есть в Польше?</li>
								<li>Школа в мегаполисе или в небольшом городе: куда лучше и безопаснее отправлять ребенка?</li>
								<li>Нужна ли ребенку виза и какая? Нужны ли визы Вам, чтобы навещать его?</li>
								<li>Во сколько обойдется поступление и 1 месяц жизни в Польше для ребенка?</li>
								<li>Как предусмотреть болезнь ребенка или несчастный случай, без необходимости срочно мчаться в Польшу?</li>
								<li>«Мой ребенок неважно учится, есть ли у него шансы поступить?»</li>
								<li>Как быть с польским языком? На каком уровне нужно его знать, чтобы комфортно учиться?</li>
							</ul>
						</div>
						<div class="v-security__column v-security__column_form v-col-12 v-col-sm-6 v-col-md-4 v-wow v-fadeInUp" data-wow-delay="0.2s">
							<div class="v-shadow">
								<div class="v-shadow__header">
									<p class="v-shadow__title">Оставьте заявку и мы проконсультируем Вас по всем нюансам поступления
									</p>
								</div>
								<div class="v-shadow__content">
									<?php echo form('Проконсультироваться бесплатно') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="v-consultation">
				<div class="v-container">
					<div class="v-shadow v-shadow_large v-shadow_background v-shadow_background-poland-arms">
						<div class="v-shadow__header">
							<h3 class="v-shadow__title v-title-md">
								Наша консультация - самый быстрый способ<br><span class="v-color-brand-2">узнать всё об учебе в Польше</span>
							</h3>
						</div>
						<div class="v-row">
							<div class="v-icon v-icon_center v-col-12 v-col-sm-4 v-wow v-fadeInUp">
								<div class="v-icon__inner">
									<div class="v-icon__header"><img class="v-icon__img" src="img/icon-study-4.png" alt="" role="presentation"/>
									</div>
									<div class="v-icon__body"><span class="bold">Не нужно никуда ехать</span>, даже если Вы хотите подать документы. Собеседования проведем по телефону или Скайпу, а документы отправим по почте
									</div>
								</div>
							</div>
							<div class="v-icon v-icon_center v-col-12 v-col-sm-4 v-wow v-fadeInUp" data-wow-delay="0.15s">
								<div class="v-icon__inner">
									<div class="v-icon__header"><img class="v-icon__img" src="img/icon-study-5.png" alt="" role="presentation"/>
									</div>
									<div class="v-icon__body"><span class="bold">Работаем только официально</span>, подписываем прозрачный договор
									</div>
								</div>
							</div>
							<div class="v-icon v-icon_center v-col-12 v-col-sm-4 v-wow v-fadeInUp" data-wow-delay="0.25s">
								<div class="v-icon__inner">
									<div class="v-icon__header"><img class="v-icon__img" src="img/icon-study-6.png" alt="" role="presentation"/>
									</div>
									<div class="v-icon__body"><span class="bold">Гарантируем поступление ребенка в выбранную школу</span>. Если не получилось - возвращаем деньги
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include 'inc/sections/bonus.php'; ?>
			<section class="v-future">
				<div class="v-container">
					<div class="v-row">
						<div class="v-future__column v-future__column_text v-future__column_text-small v-col-12 v-col-sm-6">
							<h3 class="v-title-md v-offset-static-sm">Какие шансы <span class="v-color-brand-2">остаться в Польше </span>после учебы?</h3>
							<div class="v-text">
								<p>Варианта по сути 2.</p>
								<p>Если Ваш ребенок окончит лицей или школу, то сможет поступить в польский или практически любой европейский ВУЗ. По статистике, каждый 3-й украинский выпускник успешно поступает и остается в Европе.</p>
								<p>Конечно, Вы посматривали в сторону Европы… но как всё устроить?</p>
								<p>Если же Вы окончите техникум, то будете иметь уже готовую профессию. И может остаться работать по специальности в Европе.</p>
							</div>
						</div>
						<div class="v-future__column v-future__column_image v-col-12 v-col-sm-6"><img class="v-future__img" src="img/future-2.png" alt="" role="presentation"/><span class="v-future__icon v-future__icon_3">?</span><span class="v-future__icon v-future__icon_4">?</span>
						</div>
					</div>
				</div>
			</section>
			<section class="v-benefits v-benefits_result" id="section-about">
				<?php echo quadro('2', 'v-benefits', '2'); ?>
				<div class="v-container">
					<h3 class="v-title-md v-title-section">Подтверждаем свои слова реальными результатами детей
					</h3>
					<div class="v-row">
						<div class="v-icon v-icon_left-icon v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.1s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-7.png" alt="" role="presentation"/>
									<p class="v-icon__title">500+
									</p>
								</div>
								<div class="v-icon__body">
									<p>Украинских детей успешно поступили в польские школы с нашей помощью</p>
								</div>
							</div>
						</div>
						<div class="v-icon v-icon_left-icon v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-8.png" alt="" role="presentation"/>
									<p class="v-icon__title">Каждый 3-й
									</p>
								</div>
								<div class="v-icon__body">
									<p>Поступил в ВУЗ или устроился на работу в Польше после окончания лицея</p>
								</div>
							</div>
						</div>
						<div class="v-icon v-icon_left-icon v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.3s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-9.png" alt="" role="presentation"/>
									<p class="v-icon__title">70%
									</p>
								</div>
								<div class="v-icon__body">
									<p>Учеников переезжают жить и работать в страны Западной Европы</p>
								</div>
							</div>
						</div>
						<div class="v-icon v-icon_left-icon v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.4s">
							<div class="v-icon__inner">
								<div class="v-icon__header"><img class="v-icon__img" src="img/icon-benefit-10.png" alt="" role="presentation"/>
									<p class="v-icon__title">7 лет
									</p>
								</div>
								<div class="v-icon__body">
									<p>Наша компания отправляет украинских детей учиться за границу. За это время было лишь 2% отказов</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="v-for-what">
				<?php echo quadro('3', 'v-for-what', '1'); ?>
				<div class="v-container">
					<h3 class="v-for-what__title v-title-md">Зачем мне консультация?<br>Почитаю всё сам в Интернете …
					</h3>
				</div>
			</section>
			<section class="v-answer">
				<div class="v-container">
					<div class="v-answer__content v-offset-static-md">
						<div class="v-answer__item v-row">
							<div class="v-answer__item-column v-answer__item-column_image v-col-12 v-col-sm-5 v-wow v-fadeInRight"><img class="v-answer__item-image" src="img/answer-1.svg" alt="" role="presentation"/>
							</div>
							<div class="v-answer__item-column v-answer__item-column_text v-col-12 v-col-sm-7 v-wow v-fadeInLeft">
								<h3 class="v-answer__item-title v-title-md">На сайте школы может быть <span class="v-color-brand-2">устаревший список </span>документов
								</h3>
								<div class="v-text">
									<p>Представьте - Вы всё собрали, приехали в школу, а там говорят: </p>
									<p>“Справка – не такая, оценки должны быть за другие периоды, а этот документ нужно было переводить у уполномоченного переводчика”...</p>
									<p>Потратили время, деньги, кучу нервов и, скорее всего, отложили поступление на 1 год.</p>
								</div>
							</div>
						</div>
						<div class="v-answer__item v-row">
							<div class="v-answer__item-column v-answer__item-column_image v-col-12 v-col-sm-5 v-wow v-fadeInLeft"><img class="v-answer__item-image" src="img/answer-2.svg" alt="" role="presentation"/>
							</div>
							<div class="v-answer__item-column v-answer__item-column_text v-col-12 v-col-sm-7 v-wow v-fadeInRight">
								<h3 class="v-answer__item-title v-title-md">Поступили -<br><span class="v-color-brand-2">не значит </span>поселились
								</h3>
								<div class="v-text">
									<p>Часто бывает еще и другое.</p>
									<p>Вы отправили документы, сдали тесты. Получили письмо что зачислены, всё хорошо. </p>
									<p>Приехали в школу и вдруг оказывается… что для Вас нет места в общежитии!</p>
									<p>Начинаются слезы, мольбы… а потом наступает разочарование.</p>
									<p>А всё потому, что не занялись этим вопросом заранее.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="v-text-center v-wow v-fadeInUp">
						<button class="v-btn v-btn_size-lg v-btn_brand-1 v-btn_shadow-brand-1 v-effect v-effect_bounce-top" data-action="v-modal" data-open="#modal-form">Задать вопросы специалисту
						</button>
					</div>
				</div>
			</section>
			<section class="v-review v-section" id="section-review">
				<div class="v-container">
					<div class="v-review__shadow v-shadow">
						<div class="v-shadow__header">
							<h3 class="v-title-md v-offset-static-md"><span class="v-color-brand-2">Отзывы родителей </span>счастливых <br>польских учеников из Украины
							</h3>
						</div>
						<div class="v-row">
							<div class="v-review-item v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
								<div class="v-review-item__content">
									<p>Мы отправили своего ребенка учиться в Польшу после 9-го класса. Компания “Освита Маркет” очень помогла нам в коммуникации с преподавательским составом, в размещении ребенка. Через представителей компании мы всегда оперативно узнавали о проблемах в учебе, если таковые возникали.</p>
									<p>Было приятно, что поляки хорошо относятся к нашим детям, во всем помогают. Очень редко бывает, что дети попадают в разные неприятные ситуации, так как за ними постоянно присматривают учителя, воспитатели и психологи. Дети привыкают к самостоятельной жизни!</p>
								</div>
								<div class="v-review-item__footer">
									<div class="v-review-item__image"><img src="img/review-1.png">
									</div>
									<div class="v-review-item__info">
										<p>Светлана и Геннадий Новиковы</p>
										<p>Крым</p>
									</div>
								</div>
							</div>
							<div class="v-review-item v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
								<div class="v-review-item__content">
									<p>О компании “Освита Маркет” услышали от знакомых и сразу решили проконсультироваться насчет поступления. Польский учили всего пару месяцев и по приезду уровень языка был средний. </p>
									<p>Но это не помешало сыну быстро адаптироваться, подтянуть польский и показывать хорошую успеваемость. Своим выбором довольны, так как нас грамотно проконсультировали и реально помогли с поступлением</p>
								</div>
								<div class="v-review-item__footer">
									<div class="v-review-item__image"><img src="img/review-2.png">
									</div>
									<div class="v-review-item__info">
										<p>Вера Пархоменко</p>
										<p>Винница</p>
									</div>
								</div>
							</div>
							<div class="v-review-item v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
								<div class="v-review-item__content">
									<p>Ехать учиться за рубеж мы решили после 9-го класса. Неожиданным было то, что ребенок отлично адаптировался к условиям проживания, нашел себя в коллективе, плюс занятия спортом также помогают скрасить проживание вдали от родителей. А самое главное начал учиться лучше чем в Украине. </p>
									<p>Компания Освита Маркет очень помогла не только в организационных моментах, но и морально поддерживали нас и ребенка. Потому что до отъезда в Польшу неоднократно посещали всяческие сомнения. Помимо всего сотрудники компании четко и доступно давали ответы на все вопросы</p>
								</div>
								<div class="v-review-item__footer">
									<div class="v-review-item__image"><img src="img/review-3.png">
									</div>
									<div class="v-review-item__info">
										<p>Людмила Жук</p>
										<p>Борисполь</p>
									</div>
								</div>
							</div>
							<div class="v-review-item v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
								<div class="v-review-item__content">
									<p>Мы обращались в разные компании, так как моя дочь училась в Украине на ветеринара и мы подыскивали техникум с похожей специальностью в Польше. И только “Освита Маркет” предложила учебное заведение, которое полностью нам подходило.</p>
									<p>Моя Алиса очень довольна и обучением, и питанием,  и режимом. Много тренировок и отдыха в техникуме, у нее много подруг и друзей, хотя она в учебном заведении одна только из Украины. На сегодня проблем в общении с поляками не возникает ни с языком, ни с традициями</p>
								</div>
								<div class="v-review-item__footer">
									<div class="v-review-item__image"><img src="img/review-4.png">
									</div>
									<div class="v-review-item__info">
										<p>Виолетта Рудновская</p>
										<p>Миргород</p>
									</div>
								</div>
							</div>
							<div class="v-review-item v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
								<div class="v-review-item__content">
									<p>Мы отправили дочь в Польшу после 9-го класса и очень переживали, что ребенок в столь ЮНОМ возрасте остался без опеки родителей, да еще и в другой стране…</p>
									<p>Однако, нас очень удивило прекрасное отношение дирекции школы и опекунов школы как к детям, так и к нам - родителям.</p>
									<p>Безусловно, “Освита Маркет” очень помогла нам на всех этапах поступления и даже больше. Мы уже посоветовали Вашу компанию нашим друзьям, и некоторые даже уже заключили контракт с Вами.</p>
								</div>
								<div class="v-review-item__footer">
									<div class="v-review-item__image"><img src="img/review-5.png">
									</div>
									<div class="v-review-item__info">
										<p>Наталья Божок</p>
										<p>Киев</p>
									</div>
								</div>
							</div>
							<div class="v-review-item v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
								<div class="v-review-item__content">
									<p>Ми відправили сина на навчання до Польщі після 9-го класу. Особливих побоювань в мене не було, але одразу після вступу мене приємно вразила висока якість харчування у ліцеї. </p>
									<p>Найбільше, що сподобалося сину - це самостійне життя. Нові враження, нові друзі, усвідомлення відповідальності за свої дії та відчуття того, що твоє життя у твоїх руках.</p>
									<p>Компанія “Osvita Market” надала вичерпну актуальну інформацію про ліцеї Польщі та напрямки навчання. Співробітники компанії завжди були он-лайн з будь-яких питань.</p>
								</div>
								<div class="v-review-item__footer">
									<div class="v-review-item__image"><img src="img/review-6.png">
									</div>
									<div class="v-review-item__info">
										<p>Снежанна Малиновская</p>
										<p>Запорожье</p>
									</div>
								</div>
							</div>
							<div class="v-review-item v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
								<div class="v-review-item__content">
									<p>Перед відправкою, ми побоювалися, що дитина занадто  "домашня" та не зможе адаптуватися до абсолютно нового підходу до навчання, нового класу та вчителів, в умовах іноземного середовища та за необхідності самостійно задовільняти свої побутові потреби.</p>
									<p>Нам допомогло дружнє ставлення вчителів і взаємодопомога дітей. Також дуже допомогли професіонали з “Osvita Market”, які завжди готові підстрахувати в екстренних випадках.</p>
								</div>
								<div class="v-review-item__footer">
									<div class="v-review-item__image"><img src="img/review-7.png">
									</div>
									<div class="v-review-item__info">
										<p>Ирина Батина</p>
										<p>Киев</p>
									</div>
								</div>
							</div>
							<div class="v-review-item v-col-12 v-col-sm-6 v-wow v-fadeInUp" data-wow-delay="0.2s">
								<div class="v-review-item__content">
									<p>Больше всего ему и нам родителям нравиться отношение учителей к детям, а со временем и отношение детей к учителям. Дети общаются с учителями очень непринужденно, свободно и легко. Они могут вступать в дискуссию с учителем если с чем то не согласны и решать это конструктивным методом. Учителя всегда готовы помочь ребенку в том случае если он этого просит и проявляет инициативу сам и никогда не откажут сославшись на плотный график, хотя на самом деле график у них очень плотный.</p>
									<p>Мы очень рады встрече с компанией “Osvita Market” и за их ценные советы относительно обучения в Польше. На сегодняшний день мы не разу не пожалели что отправили сына на учебу за границу..</p>
								</div>
								<div class="v-review-item__footer">
									<div class="v-review-item__image"><img src="img/review-8.png">
									</div>
									<div class="v-review-item__info">
										<p>Дмитрий Сигнеев</p>
										<p>Киев</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="v-benefits v-benefits_children">
				<?php echo quadro('1', 'v-benefits', '1'); ?>
				<?php echo quadro('1', 'v-benefits', '2'); ?>
				<div class="v-container">
					<h3 class="v-title-md v-title-section">Что говорят сами дети об учебе в Польше
					</h3>
					<div class="v-benefits__video">
						<iframe class="v-benefits__video-iframe" src="https://www.youtube.com/embed/F_JdFqhtoTY?rel=0&amp;amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen>
						</iframe>
					</div>
					<div class="v-text-center">
						<button class="v-btn v-btn_size-lg v-btn_brand-1 v-btn_shadow-brand-1 v-effect v-effect_bounce-top" data-action="v-modal" data-open="#modal-form">Задать вопросы специалисту
						</button>
					</div>
				</div>
			</section>
			<?php include 'inc/sections/bonus.php'; ?>
			<?php include 'inc/sections/map.php'; ?>
			
</div>
<footer class="v-site-footer">
	<div class="v-site-footer__container v-container">
		<div class="v-site-footer__row v-row">
			<div class="v-site-footer__logo v-col-12 v-col-sm-2"><img src="img/logo.png">
			</div>
			<div class="v-site-footer__info v-col-12 v-col-sm-10">
				<button class="v-site-footer__link" data-action="v-modal" data-open="#modal-politic">Политика конфиденциальности
				</button>
				<button class="v-site-footer__link" data-action="v-modal" data-open="#modal-otkaz">Отказ от ответственности
				</button>
			</div>
		</div>
	</div>
</footer>
<div class="v-modal" id="modal-form">
	<div class="v-modal__box v-modal__box_default">
		<div class="v-modal__header">
			<p class="v-modal__title">Проконсультироваться бесплатно
			</p>
			<button class="v-modal__close" data-close="v-modal">&times;
			</button>
		</div>
		<div class="v-modal__body">
			<?php echo form('Проконсультироваться бесплатно') ?>
		</div>
	</div>
</div>
<div class="v-modal" id="modal-politic">
	<div class="v-modal__box v-modal__box_default">
		<div class="v-modal__header">
			<p class="v-modal__title">Политика конфиденциальности
			</p>
			<button class="v-modal__close" data-close="v-modal">&times;
			</button>
		</div>
		<div class="v-modal__body">
			<p>Lorem....</p>
		</div>
	</div>
</div>
<div class="v-modal" id="modal-otkaz">
	<div class="v-modal__box v-modal__box_default">
		<div class="v-modal__header">
			<p class="v-modal__title">Отказ от ответственности
			</p>
			<button class="v-modal__close" data-close="v-modal">&times;
			</button>
		</div>
		<div class="v-modal__body">
			<p>Lorem....</p>
		</div>
	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/lib/libs.min.js"></script>
<script src="js/lib/cookietimer.js"></script>
<script src="js/vanilla.main.js"></script>
</div>
</body>
</html>