<?php
/* 
 * Template Name: View All Cities
 */

get_header();

?>
<div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular">
					<div class="et_pb_module et_pb_post_title   et_pb_fullwidth_post_title_0 et_pb_bg_layout_light et_pb_featured_bg"> 
						<div class="et_pb_title_container">
                             <h1 class="entry-title-custom">Search Businesses By City</h1>	
						</div>				
					</div>				
				</div>
<div id="main-content">
	<div class="wrap">
      
    <?php
        
        // Fetch All Cities from taxonomy 
        echo '<div class="category-navigation">';    
            echo '<ul class="parent-cat">';
                
                // Fetch All Cities    
                $hiterms = get_terms('city', array('hide_empty' => false, 'parent' => 0)); 
                foreach($hiterms as $key => $hiterm) :
				
				//Parent Category Link
                echo '<li>';
                echo '<h2>' . $hiterm->name . '</h2>';
				
				// Get Child terms
                $loterms = get_terms('city', array('hide_empty' => false, 'parent' => $hiterm->term_id)); 
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
        echo '</div>'; // Fetch All Cities from taxonomy
    
    ?>
  <hr class="directory-hr" />
  <div class="local-business-professional">
      <h4>Are You A Local Business Professional?</h4>
      <p>Find out how <a href="https://get.ureview.me/">uReview.me</a> can help your business monitor customer satisfaction, <br/>collect feedback and generate more positive online reviews.</p>
      <a href="https://get.ureview.me/">Learn More</a>
  </div>
      
  </div>
  <!-- .container -->
   
</div>
<!-- #main-content -->

<?php get_footer(); ?>