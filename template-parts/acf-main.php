<?php 

/** 
 * Template part for displaying all ACF Templates on any page
 */

 if (have_rows('page_section')) :
    while (have_rows('page_section')) : the_row();

        // Full Width Gradient
        if (get_row_layout() == 'full_width_gradient') :
            get_template_part('template-parts/acf','full-width-gradient');
        endif;

        // Full Width Content
        if (get_row_layout() == 'full_width_content') :
            get_template_part('template-parts/acf','full-width-content');
        endif;

        // Full Width Video
        if (get_row_layout() == 'full_width_video') :
            get_template_part('template-parts/acf','full-width-video');
        endif;

        // Left Right Image Content
        if (get_row_layout() == 'left_right_image_content') :
            get_template_part('template-parts/acf','left-right-image-content');
        endif;

        // Sub Section Detail With Image
        if (get_row_layout() == 'sub_section_detail_with_image') :
            get_template_part('template-parts/acf','sub-section-detail-with-image');
        endif;

        // Column Rows Image Right
        if (get_row_layout() == 'column_rows_image_right') :
            get_template_part('template-parts/acf','column-rows-image-right');
        endif;

        // Two Column Content Groups
        if (get_row_layout() == 'two_column_content_groups') :
            get_template_part('template-parts/acf','two-column-content-groups');
        endif;

        // Four Box Grid
        if (get_row_layout() == 'four_box_grid') :
            get_template_part('template-parts/acf','four-box-grid');
        endif;

        // Logos Grid
        if (get_row_layout() == 'logos_grid') :
            get_template_part('template-parts/acf','logos-grid');
        endif;

        // Image Rows
        if (get_row_layout() == 'image_rows') :
            get_template_part('template-parts/acf','image-rows');
        endif;

        // Content Image List
        if (get_row_layout() == 'content_image_list') :
            get_template_part('template-parts/acf','content-image-list');
        endif;

        // Big Heading
        if (get_row_layout() == 'big_heading') :
            get_template_part('template-parts/acf','big-heading');
        endif;

        // Divider
        if (get_row_layout() == 'divider') :
            get_template_part('template-parts/acf','divider');
        endif;

    endwhile;
 endif;