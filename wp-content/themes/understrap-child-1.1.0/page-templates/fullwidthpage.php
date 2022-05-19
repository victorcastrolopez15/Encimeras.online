<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>
	<div class="fondo_azul_claro">

		<div class="container">
			<div class="row">
				<div class="col-6 d-flex align-items-center mt-2 p-0">
					<img class="width_50" src="<?php echo get_stylesheet_directory_uri();?>/assets/logo.png" alt="Logo">
				</div>
				<div class="col-6 d-flex justify-content-end mt-2 p-0 zindex_2">
					<div class="altura_100">
						<img class="altura_100" src="<?php the_field("imagen_contacto");?>" alt="Teléfono">
					</div>
					<div class="text-center d-flex flex-column justify-content-center altura_100 mx-2">
						<p class="tipografia_blanca titulares_bold font-size-30px mb-0 text1"><strong><a class="a_blanco" href="tel:+34900000000"><?php the_field("numero_de_contacto");?></a></strong></p>
						<p class="tipografia_blanca font-size-18px mayuscula mb-0 text2"><?php the_field("texto_bajo_contacto");?></p>
					</div>
				</div>
			</div>
			<div class="row row1">
				<div class="col-lg-6 p-0 mb-5">
					<div class="container mt-5 p-0">
						<div class="row">
							<div class="col-12">
								<h1 class="tipografia_blanca titulares_bold font-size-32px titular_responsive"><?php the_field("titulo_1");?></h1>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<p class="tipografia_blanca font-size-18px descripcion_responsive">
									<?php the_field("descripcion_1");?>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-8">
								<button class="tipografia_blanca font-size-18px boton_contacto fondo_naranja py-2 px-3 btn-popup">Contactar con un técnico</button>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-12 d-flex">
								<div class="tamaño_div">
									<p class="circunferencia tipografia_blanca w-100"><i class="fa-solid fa-thumbs-up"></i></p>
								</div>
								<p class="tipografia_blanca font-size-18px mx-2"><?php the_field("punto_1_header");?></p>
							</div>
						</div>
						<div class="row mt-2 mb-5">
							<div class="col-12 d-flex">
								<div class="tamaño_div">
									<p class="circunferencia tipografia_blanca w-100"><i class="fa-solid fa-location-dot"></i></p>
								</div>
								<p class="tipografia_blanca font-size-18px mx-2">
									<?php the_field("punto_2_header");?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<div style="position: relative;">
		<div class=" clip-circle " style=" height: 597px; ">
	</div>
	</div>
	<div class="container" style="position: relative;z-index: 50;">
		<div class="row fondo_azul_oscuro pt-4 pb-3 zindex_container1">
			<div class="col-md-4 text-center">
				<p class="tipografia_blanca sin_centrar font-size-18px">
					<?php the_field("punto_1_post_header");?>
				</p>
			</div>
			<div class="col-md-4 text-center">
				<p class="tipografia_blanca sin_centrar font-size-18px">
					<?php the_field("punto_2_post_header");?>
				</p>
			</div>
			<div class="col-md-4 text-center">
				<p class="tipografia_blanca sin_centrar font-size-18px">
					<?php the_field("punto_3_post_header");?>
				</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-5">
			<div class="col-12 text-center">
				<h2 class="font-size-32px tipografia_azul_oscuro titulo1"><?php the_field("titulo_2");?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">

				<!-- CARROUSEL 1 -->
				<div class="my-3 scroll">
					<div class="swipe-scroll mb-3">
						<div class="fondo_blanco tamano_cards mx-2 bordes_menos_redondeados">
							<div class="container">
								<div class="row">
									<div class="col-12 d-flex mt-2">
										<div class="tamaño_div z_index_50 d-flex align-items-center">
											<p class="mb-0 circunferencia_carrousel fondo_azul_celeste w-100"><i class="fa-solid fa-droplet"></i></p>
										</div>
										<img class="width_18 margin_left_6 " src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado.png" alt="trazado">
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-18px"><strong><?php the_field("texto1_card1_carrousel1");?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-16px"><?php the_field("texto2_card1_carrousel1");?></p>
									</div>
								</div>
							</div>
						</div>

						<div class="fondo_blanco tamano_cards mx-2 bordes_menos_redondeados">
							<div class="container">
								<div class="row">
									<div class="col-12 d-flex mt-2">
										<div class="tamaño_div z_index_50 d-flex align-items-center">
											<p class="mb-0 circunferencia_carrousel fondo_azul_celeste w-100"><i class="fa-solid fa-toilet-paper"></i></p>
										</div>
										<img class="width_18 margin_left_12" src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado.png" alt="trazado">
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-18px"><strong><?php the_field("texto1_card2_carrousel1");?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-16px">
											<?php the_field("texto2_card2_carrousel1");?>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="fondo_blanco tamano_cards mx-2 bordes_menos_redondeados">
							<div class="container">
								<div class="row">
									<div class="col-12 d-flex mt-2">
										<div class="tamaño_div z_index_50 d-flex align-items-center z_index_5">
											<p class="mb-0 circunferencia_carrousel fondo_azul_celeste w-100"><i class="fa-solid fa-faucet"></i></p>
										</div>
										<img class="width_18 margin_left_15 img_espejo" src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado.png" alt="trazado">
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-18px"><strong><?php the_field("texto1_card3_carrousel1");?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-16px">
											<?php the_field("texto2_card3_carrousel1");?>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="fondo_blanco tamano_cards mx-2 bordes_menos_redondeados">
							<div class="container">
								<div class="row">
									<div class="col-12 d-flex mt-2">
										<div class="tamaño_div z_index_50 d-flex align-items-center">
											<p class="mb-0 circunferencia_carrousel fondo_azul_celeste w-100"><i class="fa-solid fa-fire"></i></p>
										</div>
										<img class="width_18 margin_left_12" src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado.png" alt="trazado">
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-18px"><strong><?php the_field("texto1_card4_carrousel1");?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-16px">
											<?php the_field("texto2_card4_carrousel1");?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row mt-2 mb-5">
			<div class="col-12 text-center">
				<button class="tipografia_blanca font-size-18px boton_contacto fondo_naranja py-2 px-3 btn-popup">Contactar con un técnico</button>
			</div>
		</div>
	</div>
	<div class="fondo_azul_oscuro pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-2 order-lg-1 mt-5">
					<div class="container ancho">
						<div class="row">
							<div class="col-12">
								<div class="d-flex">
									<div class="width_81">
										<img class="w-75 img_responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado.png" alt="trazado">
									</div>
									<h2 class="font-size-32px titulos_medio tipografia_blanca"><?php the_field("titulo1_medio");?></h2>
								</div>
								<p class="tipografia_blanca font-size-18px">
									<?php the_field("descripcion1_medio");?>
								</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								<div class="d-flex">
									<div class="width_81">
										<img class="w-75 img_responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado.png" alt="trazado">
									</div>
									<h2 class="font-size-32px titulos_medio tipografia_blanca"><?php the_field("titulo2_medio");?></h2>
								</div>
								<p class="tipografia_blanca font-size-18px">
									<?php the_field("descripcion2_medio");?>
								</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12">
								<div class="d-flex">
									<div class="width_81">
										<img class="w-75 img_responsive" src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado.png" alt="trazado">
									</div>
									<h2 class="font-size-32px titulos_medio tipografia_blanca"><?php the_field("titulo3_medio");?></h2>
								</div>
								<p class="tipografia_blanca font-size-18px">
									<?php the_field("descripcion3_medio");?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-center align-items-center mt-5 p-0">
					<div class="imagen_medio">
						<div class="difuminado_imagen_medio">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mb-5">
		<div class="row zindex_container2">
			<div class="col-12 text-center">
				<button class="tipografia_blanca font-size-18px boton_contacto fondo_naranja py-2 px-3 btn-popup">Contactar con un técnico</button>
			</div>
		</div>
	</div>

	<!-- CARROUSEL 2 -->
	<div class="my-3 scroll">
		<div class="swipe-scroll mb-3">
			<div class="fondo_azul_claro padding_bottom_21 tamano_cards2 mx-2">
				<div class="container">
					<div class="row">
						<div class="col-12 d-flex flex-column align-items-end mt-2">
							<img class="w-50" src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado2.png" alt="trazado">
						</div>
					</div>
					<div class="row padding_top_10">
						<div class="col-12">
							<h2 class="tipografia_negra titulares_bold font-size-32px"><strong><?php the_field("texto1_card1_carrousel2");?></strong></h2>
						</div>
					</div>
					<div class="row margin_top_9">
						<div class="col-12">
							<p class="tipografia_negra font-size-18px"><?php the_field("texto2_card1_carrousel2");?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="card2_img_fondo padding_bottom_21 tamano_cards2 mx-2">
				<div class="card2_difuminado_fondo padding_bottom_21 tamano_cards2">
					<div class="container">
						<div class="row padding_top_44">
							<div class="col-12">
								<p class="tipografia_blanca titulares_bold font-size-32px"><strong><?php the_field("texto1_card2_carrousel2");?></strong></p>
							</div>
						</div>
						<div class="row margin_top_175">
							<div class="col-12">
								<p class="tipografia_blanca font-size-18px"><?php the_field("texto2_card2_carrousel2");?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fondo_azul_oscuro padding_bottom_21 tamano_cards2 mx-2">
				<div class="container">
					<div class="row">
						<div class="col-12 d-flex flex-column align-items-end card3_carrousel2">
							<img class="w-100" src="<?php echo get_stylesheet_directory_uri();?>/assets/card_3_carrousel2.png" alt="trazado">
						</div>
					</div>
					<div class="row margin_top_4">
						<div class="col-12">
							<p class="tipografia_blanca titulares_bold font-size-32px mb-0"><strong><?php the_field("texto1_card3_carrousel2");?></strong></p>
						</div>
					</div>
					<div class="row ">
						<div class="col-12">
							<p class="tipografia_blanca font-size-18px"><?php the_field("texto2_card3_carrousel2");?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="card4_img_fondo padding_bottom_21 tamano_cards2 mx-2">
				<div class="card2_difuminado_fondo tamano_cards2">
					<div class="container">
						<div class="row padding_top_545">
							<div class="col-12">
								<p class="tipografia_blanca titulares_bold font-size-32px"><strong><?php the_field("texto1_card4_carrousel2");?></strong></p>
							</div>
						</div>
						<div class="row margin_top_7">
							<div class="col-12">
								<p class="tipografia_blanca font-size-18px"><?php the_field("texto2_card4_carrousel2");?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-5 centrar_intervencion">
			<div class="col-md-6 text-center mb-5">
				<img class="width_madrid" src="<?php echo get_stylesheet_directory_uri();?>/assets/madrid.png" alt="Madrid">
			</div>
			<div class="col-md-6 fondo_gris_claro width_95 p-5">
				<h3 class="tipografia_negra titulares_bold font-size-32px"><?php the_field("titulo_card_intervencion");?></h3>
				<p class="tipografia_negra font-size-18px">
					<?php the_field("descripcion_intervencion");?>
				</p>
				<button class="tipografia_blanca font-size-18px boton_contacto fondo_naranja py-2 px-3 btn-popup">Contactar con un técnico</button>
			</div>
		</div>
		<div class="row margin_top">
			<div class="col-12 text-center">
				<h2 class="tipografia_azul_oscuro font-size-32px titulo2"><?php the_field("titulo_bajo_intervencion");?></h2>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-12">

				<!-- CARROUSEL 3 -->
				<div class="my-3 scroll">
					<div class="swipe-scroll mb-3">
						<div class="fondo_blanco tamano_cards mx-2 bordes_menos_redondeados">
							<div class="container p-3">
								<div class="row">
									<div class="col-12 d-flex mt-2 tipografia_azul_claro">
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-18px min_height_54"><strong><?php the_field("texto1_card1_carrousel3");?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-16px altura_p_comentarios"><?php the_field("texto2_card1_carrousel3");?></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="text-muted font-size-16px"><?php the_field("texto3_card1_carrousel3");?></p>
									</div>
								</div>
							</div>
						</div>

						<div class="fondo_blanco tamano_cards mx-2 bordes_menos_redondeados">
							<div class="container p-3">
								<div class="row">
									<div class="col-12 d-flex mt-2 tipografia_azul_claro">
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-18px min_height_54"><strong><?php the_field("texto1_card2_carrousel3");?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-16px altura_p_comentarios"><?php the_field("texto2_card2_carrousel3");?></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="text-muted font-size-16px"><?php the_field("texto3_card2_carrousel3");?></p>
									</div>
								</div>
							</div>
						</div>

						<div class="fondo_blanco tamano_cards mx-2 bordes_menos_redondeados">
							<div class="container p-3">
								<div class="row">
									<div class="col-12 d-flex mt-2 tipografia_azul_claro">
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-18px min_height_54"><strong><?php the_field("texto1_card3_carrousel3");?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-16px altura_p_comentarios"><?php the_field("texto2_card3_carrousel3");?></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="text-muted font-size-16px"><?php the_field("texto3_card3_carrousel3");?></p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="fondo_blanco tamano_cards mx-2 bordes_menos_redondeados">
							<div class="container p-3">
								<div class="row">
									<div class="col-12 d-flex mt-2 tipografia_azul_claro">
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>&nbsp;&nbsp;
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-18px min_height_54"><strong><?php the_field("texto1_card4_carrousel3");?></strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="tipografia_negra font-size-16px altura_p_comentarios"><?php the_field("texto2_card4_carrousel3");?></p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<p class="text-muted font-size-16px"><?php the_field("texto3_card4_carrousel3");?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- ÚLTIMO CARROUSEL -->
	<div class="mt-3 scroll ajuste_con_footer">
		<div class="swipe-scroll mb-3">
			<div class="card1_img_fondo tamano_cards2 mx-2">
				<div class="card2_difuminado_fondo tamano_cards2">
					<div class="container">
						<div class="row padding_top_210">
							<div class="col-12">
								<p class="tipografia_blanca titulares_bold font-size-32px"><strong><?php the_field("texto1_card1_carrousel4");?></strong></p>
							</div>
						</div>
						<div class="row mt-5 row_ult_carrousel">
							<div class="col-12">
								<p class="tipografia_blanca font-size-18px"><?php the_field("texto2_card1_carrousel4");?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fondo_azul_claro tamano_cards2 mx-2">
				<div class="container">
					<div class="row pb-3">
						<div class="col-12 pb-3 d-flex flex-column align-items-end">
							<div class=" d-flex flex-column align-items-end">
								<img class="width_35" src="<?php echo get_stylesheet_directory_uri();?>/assets/telefono2.png" alt="Teléfono">
							</div>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-12">
							<p class="tipografia_blanca font-size-18px mb-0"><strong><?php the_field("texto1_card2_carrousel4");?></strong></p>
							<p class="tipografia_negra titulares_bold font-size-32px"><?php the_field("texto2_card2_carrousel4");?></p>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-12">
							<p class="tipografia_blanca font-size-18px"><?php the_field("texto3_card2_carrousel4");?></p>
							<p class="tipografia_negra titulares_bold font-size-32px"><?php the_field("texto4_card2_carrousel4");?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="card3_img_fondo tamano_cards2 mx-2">
				<div class="card2_difuminado_fondo tamano_cards2">
					<div class="container">
						<div class="row padding_top_210">
							<div class="col-12">
								<p class="tipografia_blanca titulares_bold font-size-32px"><strong><?php the_field("texto1_card3_carrousel4");?></strong></p>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<p class="tipografia_blanca font-size-18px"><?php the_field("texto2_card3_carrousel4");?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fondo_azul_negro tamano_cards2 mx-2">
				<div class="container">
					<div class="row pb_rem">
						<div class="col-12">
							<div>
								<img class="width_45" src="<?php echo get_stylesheet_directory_uri();?>/assets/trazado3.png" alt="trazado">
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-12">
							<p class="tipografia_blanca titulares_bold font-size-32px"><strong><?php the_field("texto1_card4_carrousel4");?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p class="tipografia_blanca font-size-18px"><?php the_field("texto2_card4_carrousel4");?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="overlay">
		<div class="popup">
			<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa-solid fa-x"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h3 class="tipografia_blanca font-size-24px texto_popup_1">Solicita una llamada</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<p class="tipografia_blanca font-size-12px texto_popup_2">
							Solicita aquí la llamada de uno de nuestros técnicos para conocer su problema. Te contactamos en 10 minutos.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<?php echo do_shortcode('[gravityform id="1" title="false"]')?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		jQuery( document ).ready(function() {
			console.log( "ready2!" );
			jQuery(".popup").on('click', function (e) {
				e.stopPropagation();
			});

			jQuery(".btn-popup").on('click', function (e) {
				e.preventDefault();
				jQuery(".overlay").addClass('active');
			});

			jQuery("#btn-cerrar-popup").on('click', function (e) {
				jQuery(".overlay").removeClass('active');
			});

			jQuery(".overlay").on('click', function (e) {
				jQuery(".overlay").removeClass('active');
			});
		});
	</script>
</main>

<?php
get_footer();
?>