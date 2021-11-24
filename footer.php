<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->


	<footer class="footer">
		<div class="container">
			<div class="footer__top">
				<a class="footer__email" href="mailto:hello@anchorpointinteriors.com">hello@anchorpointinteriors.com</a>
				<p>Ready to invigorate your workspace? <a href="/contact">Contact us</a> now to discuss your project.</p>
			</div>
			<div class="footer__middle row">
				<div class="footer__column col-12 col-sm col-md-3">
					<div class="footer__column-title branding">

						<a href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" loading="lazy">
						</a>

					</div>
					<address class="footer__address"><strong>Scotland</strong><br />
						0131 341 3066
					</address>
					<address class="footer__address"><strong>Midlands</strong><br />
						0121 514 2122
					</address>
					<address class="footer__address"><strong>London</strong><br />
						0203 797 6367
					</address>

					<address class="footer__address">
						Registration No: SC519762. <br />
						VAT No: 271 7169 48
					</address>
				</div>
				<div class="footer__column col-12 col-sm">
					<div class="footer__column-title">Quick Links</div>

					<?php
						wp_nav_menu( array(
							'theme_location'  => 'quick-links',
							'menu_class'      => 'footer__column-menu',
							) );
						?>

				</div>




				<div class="footer__column subscribe col-12 col-sm col-md-3">
					<div class="footer__column-title">Subscribe</div>

						<div id="mc_embed_signup">
	            <form action="//anchorpointinteriors.us9.list-manage.com/subscribe/post?u=27755a62c24fcac48ec50a029&amp;id=2292d1b5af" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
	                <div id="mc_embed_signup_scroll">
	                    <label for="mce-EMAIL">Subscribe to our mailing list</label>

											<div class="" style="position: relative; margin: 25px 0;">
												<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required="">
		                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_27755a62c24fcac48ec50a029_2292d1b5af" tabindex="-1" value=""></div>


												<input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="subsubmit">
											</div>



	                </div>
	            </form>
	        </div>


					<p>Enter your email address above to subscribe to our monthly workplace design updates.</p>
					<p>Our privacy policy can be viewed <a href="/privacy">here</a>.

				</div>




				<div class="footer__column footer__column col-12 col-sm col-md-3">
					<ul class="footer__social social">
						<li class="social__item">
							<a class="social__link" href="https://www.linkedin.com/company/anchorpoint-interiors/" target="_blank">

								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
								  <path id="Path_42" data-name="Path 42" d="M16.625-16H1.375a1.352,1.352,0,0,0-1,.375A1.2,1.2,0,0,0,0-14.75V.75a1.2,1.2,0,0,0,.375.875,1.352,1.352,0,0,0,1,.375h15.25a1.352,1.352,0,0,0,1-.375A1.2,1.2,0,0,0,18,.75v-15.5a1.2,1.2,0,0,0-.375-.875A1.352,1.352,0,0,0,16.625-16ZM5.375-.625H2.625V-9.25h2.75ZM4-10.375a1.362,1.362,0,0,1-1.062-.5A1.664,1.664,0,0,1,2.5-12a1.447,1.447,0,0,1,.438-1.062A1.447,1.447,0,0,1,4-13.5a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,5.5-12a1.664,1.664,0,0,1-.437,1.125A1.362,1.362,0,0,1,4-10.375ZM15.375-.625h-2.75v-4.25a6.663,6.663,0,0,0-.125-1.5,1.292,1.292,0,0,0-1.25-.75A1.342,1.342,0,0,0,10-6.5a3.127,3.127,0,0,0-.375,1.625v4.25H7V-9.25H9.625v1.125a2.506,2.506,0,0,1,.938-.937A2.848,2.848,0,0,1,12.125-9.5,2.808,2.808,0,0,1,14.75-8.25a5.068,5.068,0,0,1,.625,2.875Z" transform="translate(0 16)" fill="#666"/>
								</svg>



								<span class="visually-hidden">Linkedin</span>
							</a>
						</li>
						<li class="social__item">
							<a class="social__link" href="https://twitter.com/anchorpointin" target="_blank">

								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
								  <path id="Path_41" data-name="Path 41" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#666"/>
								</svg>


								<span class="visually-hidden">Twitter</span>
							</a>
						</li>
						<li class="social__item">
							<a class="social__link" href="https://www.instagram.com/anchorpoint_interiors/" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
								  <path id="Path_43" data-name="Path 43" d="M18-10.75a8.049,8.049,0,0,0-.5-2.187,4.582,4.582,0,0,0-1-1.562,4.582,4.582,0,0,0-1.562-1A8.049,8.049,0,0,0,12.75-16H5.25a8.049,8.049,0,0,0-2.187.5,4.781,4.781,0,0,0-1.625,1.063,4.179,4.179,0,0,0-1,1.563A9.058,9.058,0,0,0,0-10.75v7.5A8.049,8.049,0,0,0,.5-1.062,4.781,4.781,0,0,0,1.563.563a4.179,4.179,0,0,0,1.563,1A9.342,9.342,0,0,0,5.375,2H12.75a8.049,8.049,0,0,0,2.188-.5A4.781,4.781,0,0,0,16.563.438a4.179,4.179,0,0,0,1-1.562A9.342,9.342,0,0,0,18-3.375V-10.75ZM16.375-3.375A7.813,7.813,0,0,1,16-1.812a3.024,3.024,0,0,1-.687,1.125A3.024,3.024,0,0,1,14.188,0a5.924,5.924,0,0,1-1.625.313q-.937.062-3.625.063T5.375.313A5.77,5.77,0,0,1,3.813,0,3.024,3.024,0,0,1,2.688-.687,3.024,3.024,0,0,1,2-1.812a5.77,5.77,0,0,1-.312-1.562Q1.625-4.25,1.625-7t.063-3.625A5.77,5.77,0,0,1,2-12.187a3.024,3.024,0,0,1,.688-1.125A3.024,3.024,0,0,1,3.813-14a5.924,5.924,0,0,1,1.625-.312q.938-.063,3.625-.062t3.563.063A5.77,5.77,0,0,1,14.188-14a3.024,3.024,0,0,1,1.125.688A3.024,3.024,0,0,1,16-12.187a5.924,5.924,0,0,1,.313,1.625q.062.938.063,3.625ZM9-11.625A4.48,4.48,0,0,0,6.688-11,4.68,4.68,0,0,0,5-9.312,4.48,4.48,0,0,0,4.375-7,4.48,4.48,0,0,0,5-4.687,4.68,4.68,0,0,0,6.688-3,4.48,4.48,0,0,0,9-2.375,4.48,4.48,0,0,0,11.313-3,4.68,4.68,0,0,0,13-4.687,4.48,4.48,0,0,0,13.625-7,4.48,4.48,0,0,0,13-9.312,4.68,4.68,0,0,0,11.313-11,4.48,4.48,0,0,0,9-11.625ZM9-4a2.893,2.893,0,0,1-2.125-.875A2.893,2.893,0,0,1,6-7a2.893,2.893,0,0,1,.875-2.125A2.893,2.893,0,0,1,9-10a2.893,2.893,0,0,1,2.125.875A2.893,2.893,0,0,1,12-7a2.893,2.893,0,0,1-.875,2.125A2.893,2.893,0,0,1,9-4Zm3.75-7.75a.956.956,0,0,0,.313.688,1.023,1.023,0,0,0,.75.313,1.023,1.023,0,0,0,.75-.312,1.023,1.023,0,0,0,.313-.75,1.023,1.023,0,0,0-.312-.75,1.023,1.023,0,0,0-.75-.312,1.023,1.023,0,0,0-.75.313A1.1,1.1,0,0,0,12.75-11.75Z" transform="translate(0 16)" fill="#666"/>
								</svg>

								<span class="visually-hidden">Instagram</span>
							</a>
						</li>

						<li class="social__item">
							<a class="social__link" href="https://www.youtube.com/channel/UCYm1A0QpIa8Q3cN-riqMSaA" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40.02" viewBox="0 0 40 40.02">
								  <g id="Group_31" data-name="Group 31" transform="translate(-1782 -6802.14)">
								    <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(1782 6802.14)" fill="none" stroke="#ccc" stroke-width="1">
								      <ellipse cx="20" cy="20.01" rx="20" ry="20.01" stroke="none"/>
								      <ellipse cx="20" cy="20.01" rx="19.5" ry="19.51" fill="none"/>
								    </g>
								    <path id="youtube_1_" data-name="youtube (1)" d="M12.336,18.332H12.33c-.745-.005-7.327-.065-9.192-.57A3.814,3.814,0,0,1,.454,15.081,27.989,27.989,0,0,1,0,9.44,28.516,28.516,0,0,1,.453,3.756l0-.005a3.894,3.894,0,0,1,2.68-2.7l.01,0C4.988.564,11.584.505,12.33.5h.013c.746.005,7.346.065,9.194.57a3.813,3.813,0,0,1,2.68,2.678,27.153,27.153,0,0,1,.454,5.713,28.066,28.066,0,0,1-.452,5.633V15.1a3.815,3.815,0,0,1-2.685,2.682l-.005,0c-1.844.484-8.439.544-9.185.549ZM2.316,4.251a27.576,27.576,0,0,0-.388,5.177v.025a25.912,25.912,0,0,0,.388,5.129A1.88,1.88,0,0,0,3.64,15.9a64.525,64.525,0,0,0,8.7.5,67.14,67.14,0,0,0,8.7-.485A1.881,1.881,0,0,0,22.356,14.6a26,26,0,0,0,.388-5.129c0-.01,0-.02,0-.03a25.1,25.1,0,0,0-.386-5.184v0a1.881,1.881,0,0,0-1.324-1.322,64.283,64.283,0,0,0-8.7-.5,67.231,67.231,0,0,0-8.7.484A1.934,1.934,0,0,0,2.316,4.251Zm20.972,10.6h0ZM9.879,13.32V5.512l6.747,3.9Zm0,0" transform="translate(1789.663 6812.733)" fill="#666"/>
								  </g>
								</svg>
							</a>

							<span class="visually-hidden">Youtube</span>


						</li>
					</ul>

					<img class="bm-trada" src="<?php echo get_template_directory_uri() ?>/images/bm-trada.jpg" alt="bm trada certified">


				</div>
			</div>
			<div class="row">
				<div class="footer__copyright col-12 col-sm-6">
					© 2021 <span>ANCHORPOINT</span>. All Rights Reserved Design by <span><a href="https://creativemediani.com/" target="_blank">Creative Media</a></span>
				</div>
				<div class="footer__design col-12 col-sm-6">

					<a href="/cookies">Cookies   •   <a href="/terms">Terms</a>   •   <a href="/privacy-policy">Privacy</a>

				</div>
			</div>
		</div>
	</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
var whoistrack_params=whoistrack_params||[];whoistrack_params.push(["wait","9d28d3529ea84b62802891dc651c032f"]);var t=document["createElement"]("script"),i;t["type"]="text/javascript";t["src"]=window["location"]["href"]["split"]("/")[0]+"//app.whoisvisiting.com/who.js";i=document["getElementsByTagName"]("script")[0];i["parentNode"]["insertBefore"](t,i);
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ec670318ee2956d73a34a62/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
