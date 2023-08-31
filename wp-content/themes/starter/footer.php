<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>
<style>
    .footer-menu-container .sub-menu {
        display: none !important;
    }

	.subscribe-input {
    background-color: #85DCFF33;
    border: 1px solid #00A8E8;
	}

	.subscribe-button-small {
		background-color: #85DCFF33;
    	border: 1px solid #00A8E8;
		color: white;
		color: white;
    	width: 50px; 
   		height: auto;
	}

	.arrow-icon::before {
		content: "→";
	}

</style>

<footer id="colophon" class="site-footer bg-team">
    <div class="wrapper px-6 py-1 mx-auto">

        <div class="flex flex-col sm:flex-row text-center sm:text-left gap-x-8">
          
            <div class="flex flex-col sm:w-6/12 text-center sm:text-left">
                <a href="#">
				<?= get_footer_logo(); ?>
                </a>
            </div>

            <div class="flex flex-col sm:w-6/12 mt-6 sm:mt-0 space-y-4 justify-end">
         
                <div class="text-white justify-end">
                    <h3 class="text-3xl font-semibold text-blue lg:text-4xl text-[20px] tracking-[4px] uppercase">Subscribe NOW</h3>
                    <p class="font-light text-white text-[14px] leading-[22px]">Get product drops stright to your inbox or be featured to our newslatter!</p>
                    <div class="flex space-x-4 mt-2">
						<input class="subscribe-input py-2 px-4 w-full sm:w-1/3" type="text" placeholder="Full Name">
						<input class="subscribe-input py-2 px-4 w-full sm:w-1/3" type="email" placeholder="Email">
						<button class="subscribe-button-small py-2 px-4 w-full sm:w-auto">
							<i class="arrow-icon"></i>
						</button>
					</div>
                </div>
               
                <div class="flex flex-wrap justify-end footer-menu-container gap-4 text-white">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'block sm:flex sm:flex-row space-x-4',
                            'container_class'=> 'inline-flex'
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
        <hr class="wrapper mb-4 mt-2 text-white" />
        <div class="wrapper flex flex-col items-start sm:flex-row sm:justify-between mt-1">
            <p class="text-sm text-white">© Copyright &copy; <?= date('Y') ?> | <?= get_bloginfo('name'); ?></p>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
