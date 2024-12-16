<?php

get_header();

?>
<div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular">
					<div class="et_pb_module et_pb_post_title   et_pb_fullwidth_post_title_0 et_pb_bg_layout_light et_pb_featured_bg"> 
						<div class="et_pb_title_container">
                                                    <h1 class="entry-title-custom">
							Search by Business Category or City Location
                                                    </h1>	
						</div>				
					</div>				
				</div>
<div id="main-content">
	<div class="wrap">
    
    <h2 style="font-size: 32px; margin-bottom: 30px;">Top Business Categories</h2>
    
    <?php
        
        // Get all Parent Category
        echo '<div class="category-navigation">';    
            echo '<ul class="child-cat">';
                
                // Get All Parent Terms    
                $hiterms = get_terms('business-category', array('hide_empty' => false, 'exclude' => '30', 'parent' => 0)); 
                foreach($hiterms as $key => $hiterm) :
                   
                    //Parent Category Link
                    echo '<li>';
                        echo '<a href="' . esc_url( get_term_link( $hiterm ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $hiterm->name ) ) . '"><span>' . $hiterm->name . '</span></a>'; 
                    echo '</li>';
                    
                 endforeach;
                 
            echo '</ul>'; 
        echo '</div>'; // end Business Listings
        ?>
        <div class="view-all-btn"><a href="/">View all Categories</a></div>
        <h2 style="font-size: 32px; margin-bottom: 30px;">Top Cities</h2>
    
        <?php
        // Get All Cities 
        echo '<div class="category-navigation">';    
            echo '<ul class="child-cat">';
                
                // Fetch All Cities    
                $hiterms = get_terms('city', array('hide_empty' => false, 'parent' => 0)); 
                foreach($hiterms as $key => $hiterm) :
				
				//Parent Category Link
                //echo '<li>';
                //echo '<a href="' . esc_url( get_term_link( $hiterm ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $hiterm->name ) ) . '"><span>' . $hiterm->name . '</span></a>';
                //echo '</li>';
				
				// Get Child terms
                $loterms = get_terms('city', array('hide_empty' => false, 'parent' => $hiterm->term_id, 'number' => 12)); 
                if($loterms) : 
				foreach($loterms as $key => $loterm) :   
                  echo '<li>';
                    
                     //City Link
                     echo '<a href="' . esc_url( get_term_link( $loterm ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $hiterm->name ) ) . '"><span>' . $loterm->name . '</span></a>';
                     
                  echo '</li>';
				  endforeach;
				   
				   endif;
				  
                endforeach;
                 
            echo '</ul>'; 
        echo '</div>'; // Fetch All Cities from taxonomy
    
    ?>
    <div class="view-all-btn"><a href="/">View all Cities</a></div>
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