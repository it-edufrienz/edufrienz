<?php
/**
 * Footer Template (Hardcoded Version)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

    // function downloadme(src){
    //     var link=document.createElement('a');
    //     document.body.appendChild(link);
    //     link.href= src;
    //     link.download = '';
    //     link.click();
    // }

    jQuery("#downloadFile").on("click", function (e) {
        e.preventDefault();
        var link = document.createElement("a");
        link.href = "<?php echo esc_url( home_url('/wp-content/uploads/2024/07/MERCH-CATALOGUE-1-compressed.pdf') ); ?>";
        link.download = "MERCH-CATALOGUE.pdf";
        link.target = "_blank";
        link.click();
        link.remove();
    });

    jQuery("#downloadFile2").on("click", function (e) {
        e.preventDefault();
        var link = document.createElement("a");
        link.href = "<?php echo esc_url( home_url('/wp-content/uploads/2024/07/SPARK-PROGRAM-OVERVIEW-NEW.pdf') ); ?>";
        link.download = "SPARK-PROGRAM-OVERVIEW-NEW.pdf";
        link.target = "_blank";
        link.click();
        link.remove();
    });

    // jQuery("#downloadFile").on("click", function (e) {
    //       e.preventDefault();
    //       var link=document.createElement('a');
    //         document.body.appendChild(link);
    //         link.href= src;
    //         link.download = '';
    //         link.click();
    // });
</script>

</div> <!-- ast-container -->
</div><!-- #content -->
</div><!-- #page -->
<footer>
  <section class="border-top bg-white">
    <div class="container py-5">
      <div class="row">
        
        <!-- Kolom 1: Logo, Deskripsi & Newsletter -->
        <div class="col-12 col-md-3 mb-4">
          <!-- Logo -->
          <div class="mb-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand d-block text-decoration-none">
              <?php
                    if (has_custom_logo()) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        echo wp_get_attachment_image($custom_logo_id, 'full', false, [
                            'class' => 'custom-logo'
                        ]);
                    } else {
                        echo '<span class="font-weight-bold text-primary h5 mb-0">EDUFRIENZ</span>';
                    }
                ?>
          
            </a>
          </div>
          
          <!-- Deskripsi -->
          <p class="mb-4" style="font-family: 'Varela Round', Sans-serif; font-size: 16px; font-weight: 500; line-height: 20px; color: #000000;">
            Edufrienz 99 is a digital learning library offering resources for Social Emotional Learning (SEL), 21st Century Skills, and Character Education. Our engaging and practical materials support teachers, parents, and children with ready-to-use lesson plans, interactive activities, and tools that make classroom and home learning simple, effective, and impactful. Designed with real-life examples, Edufrienz 99 helps nurture empathy, resilience, and positive character development.
          </p>
        </div>
        
        <!-- Kolom 2: Frienz Corner -->
        <div class="col-12 col-md-3 mb-4 pt-md-5 pt-0">
            <h6 class="mb-3" style="font-family: 'Varela Round', Sans-serif; font-size: 18px; font-weight: 600; color: #000000;">
                Frienz Corner
            </h6>
            <ul class="list-unstyled m-0">
                <li class="mb-2">
                    <a href="<?php echo esc_url(home_url('/spark-frienz-characters/')); ?>" target="_blank" 
                    class="d-flex align-items-center text-decoration-none"
                    style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">
                        <i class="fas fa-chevron-right mr-2" style="font-size: 14px; color: #000000; transition: color 0.3s;"></i>
                        <span style="transition: color 0s;">Spark Frienz</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="<?php echo esc_url(home_url('/lumi-frienz-characters/')); ?>" target="_blank" 
                    class="d-flex align-items-center text-decoration-none"
                    style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">
                        <i class="fas fa-chevron-right mr-2" style="font-size: 14px; color: #000000; transition: color 0.3s;"></i>
                        <span style="transition: color 0s;">Lumi Frienz</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Kolom 3: Company -->
        <div class="col-12 col-md-3 mb-4 pt-md-5 pt-0">
            <h6 class="mb-3" style="font-family: 'Varela Round', Sans-serif; font-size: 18px; font-weight: 600; color: #000000;">
                Company
            </h6>
            <ul class="list-unstyled m-0">
                <li class="mb-2">
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>" 
                    class="d-flex align-items-center text-decoration-none"
                    style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">
                        <i class="fas fa-chevron-right mr-2" style="font-size: 14px; color: #000000; transition: color 0.3s;"></i>
                        <span style="transition: color 0s;">About Us</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" 
                    class="d-flex align-items-center text-decoration-none"
                    style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">
                        <i class="fas fa-chevron-right mr-2" style="font-size: 14px; color: #000000; transition: color 0.3s;"></i>
                        <span style="transition: color 0s;">Contact Us</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="<?php echo esc_url(home_url('/faq/')); ?>" 
                    class="d-flex align-items-center text-decoration-none"
                    style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">
                        <i class="fas fa-chevron-right mr-2" style="font-size: 14px; color: #000000; transition: color 0.3s;"></i>
                        <span style="transition: color 0s;">FAQ</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" 
                    class="d-flex align-items-center text-decoration-none"
                    style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">
                        <i class="fas fa-chevron-right mr-2" style="font-size: 14px; color: #000000; transition: color 0.3s;"></i>
                        <span style="transition: color 0s;">Privacy Policy</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="<?php echo esc_url(home_url('/terms-conditions/')); ?>" 
                    class="d-flex align-items-center text-decoration-none"
                    style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">
                        <i class="fas fa-chevron-right mr-2" style="font-size: 14px; color: #000000; transition: color 0.3s;"></i>
                        <span style="transition: color 0s;">Terms & Conditions</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Kolom 4: Kontak & Social Media -->
        <div class="col-12 col-md-3 mb-4 pt-md-5 pt-0">
            <!-- Kontak -->
            <div class="mb-4">
                <h6 class="mb-3 font-weight-bold" style="font-family: 'Varela Round', sans-serif; font-size: 18px;">
                    Reach Us at
                </h6>
                <ul class="list-unstyled m-0">
                    <!-- Address -->
                    <li class="mb-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-map-marker-alt mr-3 mt-1"></i>
                            <span class="small" style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">
                            22 Sin Ming Lane #06-76 Midview City, Singapore 573969
                            </span>
                        </div>
                    </li>

                    <!-- Phone -->
                    <li class="mb-3">
                        <a href="tel:+6596935989" class="d-flex align-items-center text-dark text-decoration-none">
                            <i class="fas fa-phone-alt mr-3"></i>
                            <span class="small" style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">+65 9693 5989</span>
                        </a>
                    </li>

                    <!-- Email -->
                    <li class="mb-3">
                        <a href="mailto:talktous@edufrienz.com" class="d-flex align-items-center text-dark text-decoration-none">
                            <i class="fas fa-envelope mr-3"></i>
                            <span class="small" style="font-family: 'Varela Round', Sans-serif; font-weight: normal; color: #000000;">talktous@edufrienz.com</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Social Media -->
            <div>
                <h6 class="mb-3" style="font-family: 'Varela Round', Sans-serif; font-size: 18px; font-weight: 600; color: #000000;">
                    Stay Connected
                </h6>

                <div class="d-flex gap-2 mt-3" style="gap: 5px;">

                    <a href="https://www.facebook.com/edufrienz" target="_blank"
                        class="d-flex justify-content-center align-items-center rounded-circle text-decoration-none"
                        style="width: calc(24px + 2 * 0.5em); height: calc(24px + 2 * 0.5em);
                            background-color: #12A9EA; color: #FFFFFF;">
                        <i class="fab fa-facebook"></i>
                    </a>

                    <a href="https://www.pinterest.com/edufrienz/" target="_blank"
                        class="d-flex justify-content-center align-items-center rounded-circle text-decoration-none"
                        style="width: calc(24px + 2 * 0.5em); height: calc(24px + 2 * 0.5em);
                            background-color: #12A9EA; color: #FFFFFF;">
                        <i class="fab fa-pinterest"></i>
                    </a>

                    <a href="https://www.linkedin.com/company/edufrienz/" target="_blank"
                        class="d-flex justify-content-center align-items-center rounded-circle text-decoration-none"
                        style="width: calc(24px + 2 * 0.5em); height: calc(24px + 2 * 0.5em);
                            background-color: #12A9EA; color: #FFFFFF;">
                        <i class="fab fa-linkedin"></i>
                    </a>

                    <a href="https://www.youtube.com/@Edufrienz99" target="_blank"
                        class="d-flex justify-content-center align-items-center rounded-circle text-decoration-none"
                        style="width: calc(24px + 2 * 0.5em); height: calc(24px + 2 * 0.5em);
                            background-color: #12A9EA; color: #FFFFFF;">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="https://www.instagram.com/edufrienz99/" target="_blank"
                        class="d-flex justify-content-center align-items-center rounded-circle text-decoration-none"
                        style="width: calc(24px + 2 * 0.5em); height: calc(24px + 2 * 0.5em);
                            background-color: #12A9EA; color: #FFFFFF;">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Copyright -->
  <section class="border-top py-3" style="background-color: #8ED1FC;">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
            <span style="font-family: 'Varela Round', Sans-serif; font-size: 16px; font-weight: 500; color: #FFFFFF; line-height: 1.5;">
                Website Design by EduFrienz 99 | © <?php echo date('Y'); ?> All Rights Reserved. | Edufrienz 99 Pte. Ltd | UEN: 202309682W
            </span>
        </div>
      </div>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>