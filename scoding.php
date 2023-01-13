<?php
/**
 * Template Name: Scoding
 *
 *
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">
	<div class="row">
		<div class="col-md-12 content-area">
			<div class="banner">
				<div class="container" id="content">
					<div class="banner-inside">
						<div class="col-lg-8">
								<div class="col-lg-12">
									<h1 class="title"></label><?php esc_html_e('Вигідний шлях покупки якісного авто з США', 'understrap'); ?></h1>
								</div>
								<div class="col-lg-12">
									<p class="subtitle"><?php esc_html_e('Міжнародна компанія відтепер в Україні', 'understrap'); ?></p>
								</div>
								<div class="col-lg-12">
									<p class="description"><?php esc_html_e('Найширший вибір автомобілів в наявності, а також авто у дорозі і пропозицій на аукціонах. Страхування перевезень. Кредитування навіть під замовлення.', 'understrap'); ?></p>
								</div>
						</div>
						<div class="col-lg-4">
							<div class="form">
								<div class="contact-form" id="contact-form">
									<div class="col-lg-12">
										<h4><?php esc_html_e('Цікавлять можливі варіанти? Ми знайдемо для вас найкращі пропозиції!', 'understrap'); ?></h4>
									</div>
									<div class="col-lg-12">
										<form method="post">
											<input type="text" name="your-name" size="36" class="" aria-required="true" placeholder="Ваше ім'я">
											<input type="text" name="phone-number" size="36" class="" aria-required="true" placeholder="Ваш номер телефону">
											<select id="body-type" name="body-type">
											<option value="choose"><?php esc_html_e('виберіть Тип кузова', 'understrap'); ?></option>
												<option value="sedan"><?php esc_html_e('седан', 'understrap'); ?></option>
												<option value="wagon"><?php esc_html_e('універсал', 'understrap'); ?></option>
												<option value="hatcback"><?php esc_html_e('хетчбек', 'understrap'); ?></option>
												<option value="bus"><?php esc_html_e('одномісний', 'understrap'); ?></option>
												<option value="freight"><?php esc_html_e('фрахт', 'understrap'); ?></option>
											</select>
										</form>
									</div>	
									<div class="col-lg-12 flex price-range">
										<span id="range1">0</span>
										<span>&ensp;-&ensp;</span>
										<span id="range2">100</span>
									</div>	
									<div class="col-lg-12">			
										<div class="slideris">
											<div class="slider-track"></div>
											<input type="range" min="6000" max="69900" value="6000" id="slider-1" oninput="slideOne()">
											<input type="range" min="6100" max="70000" value="30000" id="slider-2" oninput="slideTwo()">
										</div>
									</div>									
									<div class="col-lg-12 flex" style="margin-top:10px;">			
										<div class="col-lg-4">
											<span><?php esc_html_e('$6 000', 'understrap'); ?></span>
										</div>
										<div class="col-lg-4 budget">
											<span><?php esc_html_e('Бюджет', 'understrap'); ?></span>
										</div>
										<div class="col-lg-4" style="text-align:right">
											<span ><?php esc_html_e('$70 000', 'understrap'); ?></span>
										</div>
									</div>
									<div class="submit-btn">
											<input type="submit" value="замовити підбір" class="wpcf7-form-control has-spinner wpcf7-submit">
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">		
			<div class="background-blue">
				<div class="container" id="content">
					<div class="background-blue-inside">
						<div class="col-lg-3">
							<img class="img-rounded" src="<?php echo get_template_directory_uri();?>/img/cars.png"></a>
						</div>
						<div class="col-lg-6 us-title">
						<h1><?php esc_html_e('Підбір і точний розрахунок авто з США за вашими критеріями', 'understrap'); ?></h1>
						</div>
						<div class="col-lg-3" style="height:50px">
							<div class="submit-btn btn">
								<a href="#contact-form"><?php esc_html_e('Замовити розрахунок', 'understrap'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container cars">
			<div class="cars-inside">
				<div class="col-lg-12">
					<h1><?php esc_html_e('Топ пропозицій', 'understrap'); ?></h1>
				</div>
				<div class="gridas">
					<?php 
						$args = array( 'post_type' => 'cars', 'posts_per_page' => 10 );
						$the_query = new WP_Query( $args ); 
					?>
						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
						<div class="col-lg-3 car">
							<div class="entry-content">
								<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
								<div class="description">
									<h4 class="car-title"><?php the_title(); ?></h4>
									<div class="flex car-data">
										<div class="col-lg-6">
											<h3 class="car-price"><?php $value1=get_field("kaina"); echo $value1; ?></h3>
										</div>
										<div class="col-lg-6">
											<h3 class="car-year"><?php $value2=get_field("metai"); echo $value2; ?></h3>
										</div>
									</div>
									<div class="flex car-info">
										<div class="col-lg-6">
											<h3 class="car-about"><?php $value3=get_field("kuro_tipas"); echo $value3; ?></h3>
											<h3 class="car-about"><?php $value4=get_field("pavaru_deze"); echo $value4; ?></h3>
											<h3 class="car-about"><?php $value5=get_field("varantieji"); echo $value5; ?></h3>
											<h3 class="car-about"><?php $value6=get_field("variklis"); echo $value6; ?></h3>
											<h3 class="car-about"><?php $value7=get_field("rida"); echo $value7; ?></h3>
										</div>
										<div class="col-lg-6 car-loc">
											<p class="car-about-name"><?php esc_html_e('Город:', 'understrap'); ?></p>
											<h3 class="car-about"><?php $value8=get_field("miestas"); echo $value8; ?></h3>
											<p class="car-about-name"><?php esc_html_e('Дата торгов:', 'understrap'); ?></p>
											<h3 class="car-about"><?php $value9=get_field("pasiulymo_data"); echo $value9; ?></h3>
										</div>
									</div>
									<div class="col-lg-12 flex">
										<div class="car-btn">
											<a href="<?= the_permalink();?>"><?php esc_html_e('подробнee', 'understrap'); ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php endwhile;
						wp_reset_postdata(); ?>
						<?php else:  ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
				</div>
				<div class="col-lg-12 flex">
					<div class="all-cars-btn">
						<a href="http://auto-fabrikas.local/cars"><?php esc_html_e('Показать все', 'understrap'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">		
			<div class="background-white">
				<div class="container" id="content">
					<div class="background-white-inside">
						<div class="col-lg-6 auction-title">
							<h1><?php esc_html_e('Автомобільні аукціони США з якими ми співпрацюємо', 'understrap'); ?></h1>
						</div>
						<div class="col-lg-6 auction-imgs">
							<img class="auction-img" src="<?php echo get_template_directory_uri();?>/img/copart.png"></a>
							<img class="auction-img" style="margin: 0 25px 0 25px;" src="<?php echo get_template_directory_uri();?>/img/iaai.png"></a>
							<img class="auction-img" src="<?php echo get_template_directory_uri();?>/img/manheim.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">		
			<div class="background-services">
				<div class="container" id="content">
					<div class="background-services-inside">
						<div class="col-lg-12">
							<h1><?php esc_html_e('Вибір, безпека, вигода, швидкість', 'understrap'); ?></h1>
							<h3><?php esc_html_e('Наші послуги', 'understrap'); ?></h3>
						</div>
						<div class="col-lg-12">
							<div class="services">
							<div class="col-lg-3 service" style="text-align:center;">
									<div class="service-info">
										<div class="col-lg-12">
											<img class="icon" src="<?php echo get_template_directory_uri();?>/img/icon1.png"></a>
										</div>
										<div class="col-lg-12">
										<h3><?php esc_html_e('Вибір з аукціонів', 'understrap'); ?></h3>
										</div>
										<div class="col-lg-12">
										<p><?php esc_html_e('Завдякі великій кількості портів, через які ми доставляємо авто, наші менеджери мають набагато більше пропозицій. Ми не обмежуемся певними регіонами пошуку. Також ви маєте можливість вибрати авто самостійно, в меню "Аукціон"', 'understrap'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 service" style="text-align:center;">
									<div class="service-info">
										<div class="col-lg-12">
											<img class="icon" src="<?php echo get_template_directory_uri();?>/img/icon2.png"></a>
										</div>
										<div class="col-lg-12">
										<h3><?php esc_html_e('Підбір авто та його перевірка', 'understrap'); ?></h3>
										</div>
										<div class="col-lg-12">
										<p><?php esc_html_e('Наші спеціалісти професіонали з досвідом більше 600 проданих авто. Вони здійснюють ретельний пошук найкращих пропозицій по всіх аукціонах з якими ми співпраціємо. Далі – повна перевірка історії автомобіля.', 'understrap'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 service" style="text-align:center;">
									<div class="service-info">
										<div class="col-lg-12">
											<img class="icon" src="<?php echo get_template_directory_uri();?>/img/icon1.png"></a>
										</div>
										<div class="col-lg-12">
										<h3><?php esc_html_e('Швидка доставка', 'understrap'); ?></h3>
										</div>
										<div class="col-lg-12">
										<p><?php esc_html_e('Завдяки розвиненій логістиці корпорації, ми пропонуємо короткі терміни доставки. Від вибору шляху в найближчий порт, до мінімального часу очікування завантаження на судно.', 'understrap'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 service" style="text-align:center;">
									<div class="service-info">
										<div class="col-lg-12">
											<img class="icon" src="<?php echo get_template_directory_uri();?>/img/icon2.png"></a>
										</div>
										<div class="col-lg-12">
										<h3><?php esc_html_e('Максимум безпеки', 'understrap'); ?></h3>
										</div>
										<div class="col-lg-12">
										<p><?php esc_html_e('Авто під захистом з моменту придбання на аукціоні до вивантаження в порту і передачі його власнику. Ми пропонуємо повну страховку. Від мінімальних пошкоджень в дорозі до повної втрати вантажу.', 'understrap'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 service" style="text-align:center;">
									<div class="service-info">
										<div class="col-lg-12">
											<img class="icon" src="<?php echo get_template_directory_uri();?>/img/icon1.png"></a>
										</div>
										<div class="col-lg-12">
										<h3><?php esc_html_e('Оформлення документів', 'understrap'); ?></h3>
										</div>
										<div class="col-lg-12">
										<p><?php esc_html_e('Наші фахівці занимаються підготовкою всіх необхідних документів. Від проведення торгів, доставки в порт і транспортування до реєстрації авто в Україні.', 'understrap'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 service" style="text-align:center;">
									<div class="service-info">
										<div class="col-lg-12">
											<img class="icon" src="<?php echo get_template_directory_uri();?>/img/icon2.png"></a>
										</div>
										<div class="col-lg-12">
										<h3><?php esc_html_e('Вигідна вартість послуг', 'understrap'); ?></h3>
										</div>
										<div class="col-lg-12">
										<p><?php esc_html_e('Ми транспортна корпорація з більш ніж 25 річним досвідом міжнародних перевезень. У нас більше портів, через які ми доставляємо авто і за рахунок цього шлях доставки значно дешевше. Як по території США так і транспортування в Україну.', 'understrap'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 service" style="text-align:center;">
									<div class="service-info">
										<div class="col-lg-12">
											<img class="icon" src="<?php echo get_template_directory_uri();?>/img/icon1.png"></a>
										</div>
										<div class="col-lg-12">
										<h3><?php esc_html_e('Kредитование', 'understrap'); ?></h3>
										</div>
										<div class="col-lg-12">
										<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'understrap'); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 service" style="text-align:center;">
									<div class="service-info">
										<div class="col-lg-12">
											<img class="icon" src="<?php echo get_template_directory_uri();?>/img/icon2.png"></a>
										</div>
										<div class="col-lg-12">
										<h3><?php esc_html_e('Дополнительные услуги', 'understrap'); ?></h3>
										</div>
										<div class="col-lg-12">
										<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'understrap'); ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->