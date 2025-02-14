<?php

/**
 * Template Name: Flexible Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 * @package Understrap
 *
 */

// Makes sure Css is saved
if (function_exists('process_scss')) {
  process_scss();
}

get_header();

if(is_page(array( 'contact-us', 'testimonial-list'))){
  get_template_part('global-templates/inner-banner');
}

if( have_rows('page_flexible_content') ): 
  while( have_rows('page_flexible_content') ): the_row();

    switch(get_row_layout()){
      case 'info_box':
        get_template_part('page-templates/template-parts/info-box');
        break;
      case 'hero_section':
        get_template_part('page-templates/template-parts/hero-section');
        break;
      case 'two_column':
        get_template_part('page-templates/template-parts/two-column');
        break;
      case 'logo':
        get_template_part('page-templates/template-parts/logo');
        break;
      case 'counter':
        get_template_part('page-templates/template-parts/counter');
        break;
      case 'form-block':
        get_template_part('page-templates/template-parts/form-block');
        break;
      case 'call_to_action':
        get_template_part('page-templates/template-parts/call-to-action');
        break;
      case 'hero_slider':
        get_template_part('page-templates/template-parts/hero_slider');
        break;
      case 'testimonial':
        get_template_part('page-templates/template-parts/testimonial');
        break;
      case 'full_width_section':
        get_template_part('page-templates/template-parts/full-width');
        break;
      case 'pricing':
        get_template_part('page-templates/template-parts/pricing');
        break;
      case 'sign_up':
        get_template_part('page-templates/template-parts/sign-up');
        break;
      case 'get_to_know_section':
        get_template_part('page-templates/template-parts/get-to-know-section');
        break;
      case 'accordions':
        get_template_part('page-templates/template-parts/accordions');
        break;
      case 'latest-posts':
        get_template_part('page-templates/template-parts/latest-posts');
        break;
      case 'newsletter':
        get_template_part('page-templates/template-parts/newsletter');
        break;
      case 'full_width_section_contents':
        get_template_part('page-templates/template-parts/full-width-contents');
        break;
      case 'ordered_content':
        get_template_part('page-templates/template-parts/ordering-content');
        break;

    }

  endwhile;
endif;  

get_footer();
?>