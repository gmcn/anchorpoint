<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>



<article class="contacts">

	<header class="contacts__header container">
		<div class="row">
			<div class="col-12 col-lg-5">
				<h1 class="contacts__heading heading"><?php echo the_title(); ?></h1>
				<ul class="contacts__social social">
					<li class="social__item">
						<a class="social__link" href="https://twitter.com/anchorpointin" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
							  <path id="Path_41" data-name="Path 41" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#666"/>
							</svg>
							<span class="visually-hidden">twitter</span>
						</a>
					</li>
					<li class="social__item">
						<a class="social__link" href="https://www.linkedin.com/company/anchorpoint-interiors/" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							  <path id="Path_37" data-name="Path 37" d="M16.625-16H1.375a1.352,1.352,0,0,0-1,.375A1.2,1.2,0,0,0,0-14.75V.75a1.2,1.2,0,0,0,.375.875,1.352,1.352,0,0,0,1,.375h15.25a1.352,1.352,0,0,0,1-.375A1.2,1.2,0,0,0,18,.75v-15.5a1.2,1.2,0,0,0-.375-.875A1.352,1.352,0,0,0,16.625-16ZM5.375-.625H2.625V-9.25h2.75ZM4-10.375a1.362,1.362,0,0,1-1.062-.5A1.664,1.664,0,0,1,2.5-12a1.447,1.447,0,0,1,.438-1.062A1.447,1.447,0,0,1,4-13.5a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,5.5-12a1.664,1.664,0,0,1-.437,1.125A1.362,1.362,0,0,1,4-10.375ZM15.375-.625h-2.75v-4.25a6.663,6.663,0,0,0-.125-1.5,1.292,1.292,0,0,0-1.25-.75A1.342,1.342,0,0,0,10-6.5a3.127,3.127,0,0,0-.375,1.625v4.25H7V-9.25H9.625v1.125a2.506,2.506,0,0,1,.938-.937A2.848,2.848,0,0,1,12.125-9.5,2.808,2.808,0,0,1,14.75-8.25a5.068,5.068,0,0,1,.625,2.875Z" transform="translate(0 16)" fill="#666"/>
							</svg>

							<span class="visually-hidden">linkedin</span>
						</a>
					</li>
					<li class="social__item">
						<a class="social__link" href="https://www.instagram.com/anchorpoint_interiors/" target="_blank">

							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							  <path id="Path_36" data-name="Path 36" d="M18-10.75a8.049,8.049,0,0,0-.5-2.187,4.582,4.582,0,0,0-1-1.562,4.582,4.582,0,0,0-1.562-1A8.049,8.049,0,0,0,12.75-16H5.25a8.049,8.049,0,0,0-2.187.5,4.781,4.781,0,0,0-1.625,1.063,4.179,4.179,0,0,0-1,1.563A9.058,9.058,0,0,0,0-10.75v7.5A8.049,8.049,0,0,0,.5-1.062,4.781,4.781,0,0,0,1.563.563a4.179,4.179,0,0,0,1.563,1A9.342,9.342,0,0,0,5.375,2H12.75a8.049,8.049,0,0,0,2.188-.5A4.781,4.781,0,0,0,16.563.438a4.179,4.179,0,0,0,1-1.562A9.342,9.342,0,0,0,18-3.375V-10.75ZM16.375-3.375A7.813,7.813,0,0,1,16-1.812a3.024,3.024,0,0,1-.687,1.125A3.024,3.024,0,0,1,14.188,0a5.924,5.924,0,0,1-1.625.313q-.937.062-3.625.063T5.375.313A5.77,5.77,0,0,1,3.813,0,3.024,3.024,0,0,1,2.688-.687,3.024,3.024,0,0,1,2-1.812a5.77,5.77,0,0,1-.312-1.562Q1.625-4.25,1.625-7t.063-3.625A5.77,5.77,0,0,1,2-12.187a3.024,3.024,0,0,1,.688-1.125A3.024,3.024,0,0,1,3.813-14a5.924,5.924,0,0,1,1.625-.312q.938-.063,3.625-.062t3.563.063A5.77,5.77,0,0,1,14.188-14a3.024,3.024,0,0,1,1.125.688A3.024,3.024,0,0,1,16-12.187a5.924,5.924,0,0,1,.313,1.625q.062.938.063,3.625ZM9-11.625A4.48,4.48,0,0,0,6.688-11,4.68,4.68,0,0,0,5-9.312,4.48,4.48,0,0,0,4.375-7,4.48,4.48,0,0,0,5-4.687,4.68,4.68,0,0,0,6.688-3,4.48,4.48,0,0,0,9-2.375,4.48,4.48,0,0,0,11.313-3,4.68,4.68,0,0,0,13-4.687,4.48,4.48,0,0,0,13.625-7,4.48,4.48,0,0,0,13-9.312,4.68,4.68,0,0,0,11.313-11,4.48,4.48,0,0,0,9-11.625ZM9-4a2.893,2.893,0,0,1-2.125-.875A2.893,2.893,0,0,1,6-7a2.893,2.893,0,0,1,.875-2.125A2.893,2.893,0,0,1,9-10a2.893,2.893,0,0,1,2.125.875A2.893,2.893,0,0,1,12-7a2.893,2.893,0,0,1-.875,2.125A2.893,2.893,0,0,1,9-4Zm3.75-7.75a.956.956,0,0,0,.313.688,1.023,1.023,0,0,0,.75.313,1.023,1.023,0,0,0,.75-.312,1.023,1.023,0,0,0,.313-.75,1.023,1.023,0,0,0-.312-.75,1.023,1.023,0,0,0-.75-.312,1.023,1.023,0,0,0-.75.313A1.1,1.1,0,0,0,12.75-11.75Z" transform="translate(0 16)" fill="#666"/>
							</svg>

							<span class="visually-hidden">instagram</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-lg-7">
				<ul class="contacts__info contact-info">
					<li class="contact-info__item">
						<div class="contact-info__icon">

							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22">
							  <path id="Path_34" data-name="Path 34" d="M10.833-16.833a.679.679,0,0,0,.167.5.679.679,0,0,0,.5.167,1.027,1.027,0,0,0,.583-.167.561.561,0,0,0,.25-.5.561.561,0,0,0-.25-.5,1.852,1.852,0,0,0-.583-.25.422.422,0,0,0-.5.167A1.027,1.027,0,0,0,10.833-16.833Zm12,1.833L15-16.833a3.392,3.392,0,0,0-1-2.5,3.292,3.292,0,0,0-2.417-1A3.17,3.17,0,0,0,9.167-19.25a3.479,3.479,0,0,0-1,2.417,4.094,4.094,0,0,0,.333,1.5L2-17a1.537,1.537,0,0,0-1.333.333,1.09,1.09,0,0,0-.5.5A1.479,1.479,0,0,0,0-15.5V-2.833A1.681,1.681,0,0,0,.333-1.75.9.9,0,0,0,1-1.333L7.5,1.5l.667.167a.679.679,0,0,0,.5-.167l7.167-2.833L22,1h.5a1.792,1.792,0,0,0,1-.333A1.5,1.5,0,0,0,24-.667V-13.5a1.681,1.681,0,0,0-.333-1.083A1.026,1.026,0,0,0,22.833-15ZM11.5-18.333a1.466,1.466,0,0,1,1.083.417A1.274,1.274,0,0,1,13-17a3.229,3.229,0,0,1-.333,1.25A11.764,11.764,0,0,1,11.5-13.833a13.716,13.716,0,0,1-1.083-1.917A4.895,4.895,0,0,1,10-16.833a1.344,1.344,0,0,1,.5-1.083A1.566,1.566,0,0,1,11.5-18.333Zm-1,6.5a2.731,2.731,0,0,0,.417.333,1.364,1.364,0,0,0,.75.167.979.979,0,0,0,.833-.5,24.331,24.331,0,0,0,1.833-3l.5-.167V-3.333l-6,2.5V-13.5l.5-.167ZM2-15l5,1.333V-.833L2-3ZM22-1.167,17-3V-14.5l5,1.167Z" transform="translate(0 20.333)" fill="#999"/>
							</svg>

						</div>
						<div class="contact-info__content">
							<div class="contact-info__title">Scotland</div>
							<div class="contact-info__text">
								<a href="tel:+44(0) 131 341 3066">0131 341 3066</a>
								<br>
									<a href="mailto:help@anchorpointinteriors.com">help@anchorpointinteriors.com</a>
								</div>
							</div>
						</li>
						</ul>











						<ul class="contacts__info contact-info">
								<li class="contact-info__item">
									<div class="contact-info__icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22">
										  <path id="Path_34" data-name="Path 34" d="M10.833-16.833a.679.679,0,0,0,.167.5.679.679,0,0,0,.5.167,1.027,1.027,0,0,0,.583-.167.561.561,0,0,0,.25-.5.561.561,0,0,0-.25-.5,1.852,1.852,0,0,0-.583-.25.422.422,0,0,0-.5.167A1.027,1.027,0,0,0,10.833-16.833Zm12,1.833L15-16.833a3.392,3.392,0,0,0-1-2.5,3.292,3.292,0,0,0-2.417-1A3.17,3.17,0,0,0,9.167-19.25a3.479,3.479,0,0,0-1,2.417,4.094,4.094,0,0,0,.333,1.5L2-17a1.537,1.537,0,0,0-1.333.333,1.09,1.09,0,0,0-.5.5A1.479,1.479,0,0,0,0-15.5V-2.833A1.681,1.681,0,0,0,.333-1.75.9.9,0,0,0,1-1.333L7.5,1.5l.667.167a.679.679,0,0,0,.5-.167l7.167-2.833L22,1h.5a1.792,1.792,0,0,0,1-.333A1.5,1.5,0,0,0,24-.667V-13.5a1.681,1.681,0,0,0-.333-1.083A1.026,1.026,0,0,0,22.833-15ZM11.5-18.333a1.466,1.466,0,0,1,1.083.417A1.274,1.274,0,0,1,13-17a3.229,3.229,0,0,1-.333,1.25A11.764,11.764,0,0,1,11.5-13.833a13.716,13.716,0,0,1-1.083-1.917A4.895,4.895,0,0,1,10-16.833a1.344,1.344,0,0,1,.5-1.083A1.566,1.566,0,0,1,11.5-18.333Zm-1,6.5a2.731,2.731,0,0,0,.417.333,1.364,1.364,0,0,0,.75.167.979.979,0,0,0,.833-.5,24.331,24.331,0,0,0,1.833-3l.5-.167V-3.333l-6,2.5V-13.5l.5-.167ZM2-15l5,1.333V-.833L2-3ZM22-1.167,17-3V-14.5l5,1.167Z" transform="translate(0 20.333)" fill="#999"/>
										</svg>
									</div>
									<div class="contact-info__content">
										<div class="contact-info__title">Midlands</div>
										<div class="contact-info__text">
											<a href="tel:+44(0) 121 514 2122">0121 514 2122</a>
											<br>
												<a href="mailto:help@anchorpointinteriors.com">help@anchorpointinteriors.com</a>
											</div>
										</div>
								</li>
								<li class="contact-info__item">
									<div class="contact-info__icon">

										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22">
										  <path id="Path_34" data-name="Path 34" d="M10.833-16.833a.679.679,0,0,0,.167.5.679.679,0,0,0,.5.167,1.027,1.027,0,0,0,.583-.167.561.561,0,0,0,.25-.5.561.561,0,0,0-.25-.5,1.852,1.852,0,0,0-.583-.25.422.422,0,0,0-.5.167A1.027,1.027,0,0,0,10.833-16.833Zm12,1.833L15-16.833a3.392,3.392,0,0,0-1-2.5,3.292,3.292,0,0,0-2.417-1A3.17,3.17,0,0,0,9.167-19.25a3.479,3.479,0,0,0-1,2.417,4.094,4.094,0,0,0,.333,1.5L2-17a1.537,1.537,0,0,0-1.333.333,1.09,1.09,0,0,0-.5.5A1.479,1.479,0,0,0,0-15.5V-2.833A1.681,1.681,0,0,0,.333-1.75.9.9,0,0,0,1-1.333L7.5,1.5l.667.167a.679.679,0,0,0,.5-.167l7.167-2.833L22,1h.5a1.792,1.792,0,0,0,1-.333A1.5,1.5,0,0,0,24-.667V-13.5a1.681,1.681,0,0,0-.333-1.083A1.026,1.026,0,0,0,22.833-15ZM11.5-18.333a1.466,1.466,0,0,1,1.083.417A1.274,1.274,0,0,1,13-17a3.229,3.229,0,0,1-.333,1.25A11.764,11.764,0,0,1,11.5-13.833a13.716,13.716,0,0,1-1.083-1.917A4.895,4.895,0,0,1,10-16.833a1.344,1.344,0,0,1,.5-1.083A1.566,1.566,0,0,1,11.5-18.333Zm-1,6.5a2.731,2.731,0,0,0,.417.333,1.364,1.364,0,0,0,.75.167.979.979,0,0,0,.833-.5,24.331,24.331,0,0,0,1.833-3l.5-.167V-3.333l-6,2.5V-13.5l.5-.167ZM2-15l5,1.333V-.833L2-3ZM22-1.167,17-3V-14.5l5,1.167Z" transform="translate(0 20.333)" fill="#999"/>
										</svg>

									</div>
									<div class="contact-info__content">
										<div class="contact-info__title">London</div>
										<div class="contact-info__text">
											<a href="tel:+44(0) 203 797 6367">0203 797 6367</a>
											<br>
												<a href="mailto:help@anchorpointinteriors.com">help@anchorpointinteriors.com</a>
											</div>
										</div>
									</li>
								</ul>
					</div>
				</div>
			</header>


			<?php include(locate_template("template-parts/flexi-content.php")); ?>


			<div class="contacts__map" style="display: none;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2219.4722389452513!2d-3.428278983861797!3d56.200798380675565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48863288213b7f1b%3A0x404c2d320a74bb9b!2sClashburn%20Cl%2C%20Kinross%20KY13%208GD!5e0!3m2!1sen!2suk!4v1621327433174!5m2!1sen!2suk" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>


			<?php include(locate_template("template-parts/flexi-content/contact-form.php")); ?>


</article>

<?php
get_footer();
