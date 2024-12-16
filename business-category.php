<?php
/* 
 * Template Name: Business Category Listing 
 */

get_header();

?>
<div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular">
					<div class="et_pb_module et_pb_post_title   et_pb_fullwidth_post_title_0 et_pb_bg_layout_light et_pb_featured_bg"> 
						<div class="et_pb_title_container">
                                                    <h1 class="entry-title-custom">
							Search By Business Category
                                                    </h1>	
						</div>				
					</div>				
				</div>
<div id="main-content">
	<div class="wrap">
      
    <?php
        
        // Get all terms in parent child hierarchy order
        echo '<div class="category-navigation">';    
            echo '<ul class="parent-cat">';
                
                // Get Parent Terms    
                $hiterms = get_terms('business-category', array('hide_empty' => false, 'exclude' => '30', 'parent' => 0)); 
                foreach($hiterms as $key => $hiterm) :
                   
                    echo '<li>';
                    
                    //Parent Category Link
                    echo '<h2><a href="' . esc_url( get_term_link( $hiterm ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $hiterm->name ) ) . '"><span>' . $hiterm->name . '</span></a></h2>';
                        
                        // Get Child terms
                        $loterms = get_terms('business-category', array('hide_empty' => false, 'parent' => $hiterm->term_id)); 
                        if($loterms) : 
                            echo '<ul class="child-cat">';
                                 foreach($loterms as $key => $loterm) : 
                                    echo '<li>'; 
                                        //Child Category Link
                                        echo '<a href="' . esc_url( get_term_link( $loterm ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $loterm->name ) ) . '"><span>' . $loterm->name . '</span></a>'; 
                                    echo '</li>';
                                 endforeach; 
                            echo '</ul>';                
                         endif;

                    echo '</li>';
                 endforeach;
                 
            echo '</ul>'; 
        echo '</div>'; // end Business Listings
    
    ?>
  
  <div class="local-business-professional">
      <h4>Are You A Local Business Professional?</h4>
      <p>Find out how <a href="https://get.ureview.me/">uReview.me</a> can help your business monitor customer satisfaction, <br/>collect feedback and generate more positive online reviews.</p>
      <a class="button" href="https://get.ureview.me/">Learn More</a>
  </div>
      
  </div>
  <!-- .container -->
   
</div>
<!-- #main-content -->

<?php get_footer(); ?>