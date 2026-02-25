<?php
/**
 * Custom Search Form for Edufrienz Theme
 *
 * @package Edufrienz
 */

$edufrienz_search_input_placeholder = isset($args['input_placeholder']) ? $args['input_placeholder'] : 'Search &quot;SEL training for teachers&quot;';
$edufrienz_search_class = isset($args['class']) ? $args['class'] : '';
$edufrienz_search_id = isset($args['id']) ? $args['id'] : 'search-form-' . uniqid();
$edufrienz_search_version = isset($args['version']) ? $args['version'] : 'desktop'; // 'desktop' atau 'mobile'
?>

<form role="search" method="get" class="search-form <?php echo esc_attr($edufrienz_search_class); ?> w-100 mx-3" 
      id="<?php echo esc_attr($edufrienz_search_id); ?>" action="<?php echo esc_url(home_url('/')); ?>">
    
    <?php if ($edufrienz_search_version === 'desktop') : ?>
    <!-- Desktop Version -->
    <div class="search-inside edu-none d-md-inline-flex w-100">
        <span class="search-icon">
            <i class="fas fa-search"></i>
        </span>
        <input type="search" 
            class="search-field form-control rounded-pill" 
            placeholder="<?php echo esc_attr($edufrienz_search_input_placeholder); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" 
            aria-label="Search">
    </div>
    <?php else : ?>
    <!-- Mobile Version -->
    <div class="search-inside d-inline-flex edu-md-none w-100">
        <span class="search-icon">
            <i class="fas fa-search"></i>
        </span>
        <input type="search" 
            class="search-field form-control rounded-pill" 
            placeholder="<?php echo esc_attr($edufrienz_search_input_placeholder); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" 
            aria-label="Search">
    </div>
    <?php endif; ?>
    
    <input type="submit" class="search-submit" value="<?php esc_attr_e('Search', 'edufrienz'); ?>" hidden>
</form>