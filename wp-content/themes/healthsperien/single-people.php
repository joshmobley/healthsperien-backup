<?php
    $fields = get_fields();
    get_header('people');
?>

<section class="section">
    <div class="wrapper dynamic-content">
        <img class="u-float-left" src="<?php echo esc_url($fields['headshot']['url']); ?>">
        <?php echo wp_kses($fields['biography'], get_allowed_html()); ?>

        <?php foreach($fields['extra_sections'] as $section): ?>
            <div class="accordion">
                <div class="accordion__title">
                    <?php echo esc_html($section['title']); ?>
                </div>
                <div class="accordion__content">
                    <?php echo $section['content']; ?>
                </div>
        <?php endforeach; ?>

        <a class="button" href="<?php echo esc_url(bloginfo('url')); ?>/about">Back to About Us</a>
    </div>
</section>


<?php get_footer(); ?>
