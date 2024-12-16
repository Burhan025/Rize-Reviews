<?php

get_header();
?>
<div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular">
					<div class="et_pb_module et_pb_post_title   et_pb_fullwidth_post_title_0 et_pb_bg_layout_light et_pb_featured_bg"> 
						<div class="et_pb_title_container">
                                                    <h1 class="entry-title-custom">
                                                    								
								<?php
    								$postterms = wp_get_post_terms($post->ID, $taxonomy);   // get post terms
    								$parentId = $postterms[0]->parent;                      // get parent term ID
    								$parentObj = get_term_by('id', $parentId, $taxonomy);   // get parent object 
								?>
                                                    
							Best Companies In <?php $catname = get_queried_object(); echo $catname->name; echo ', '; echo $parentObj->name; ?>
                                                    </h1>	
						</div>				
					</div>				
				</div>
<div id="main-content">
	<div class="wrap">
    
            <div class="category-description">
                
                <?php $catdescription = get_queried_object();  
                    echo $catdescription->description;
					
					//echo $catdescription->term_id;
                    //print_r($catdescription);
                ?>
                
            </div>
            
            <h2>Find Top <?php $catname = get_queried_object(); echo $catname->name; ?> Businesses</h2>
    <?php
        
       // Get the current term and pass in query below
        $term_slug = get_queried_object()->slug;
        if ( !$term_slug )
        return;
        else  
		$args = array(
  	  		'post_type'   => 'reviews',
  	  		'post_status' => 'publish',
			'tax_query' => array(
                     array(
                       'taxonomy' => 'city',
                       'field' => 'slug',
                       'terms' => $term_slug,
                     )
                   ),
	  		//'orderby'=> 'title', 
	  		'order' => 'DESC',
    	);
		$reviews = new WP_Query( $args );
	

	// Fetch all reviews from the category
	if ( $reviews->have_posts() ) :
        
        printf( '<div class="ureview-list">' );
		// Loop through every post.
		 while ( $reviews->have_posts() ) : $reviews->the_post();
		 
                printf( '<div class="single-review">' );
				
				//checking if it ureview me client
				$ratingexists = get_field('enter_shortcode_to_generate_aggregate_ratings');
				$emptygoogleid = get_field('google_local_review_placeid');
				
				if( !empty($image) || empty($emptygoogleid) ) {
                
                    //Company Name
                    echo '<div class="company-title"><a href="'. get_permalink() .'">';
                        the_field('company_name_ureview'); 
                    echo '</a></div>';
                    
                    //City, State, Zipcode
                    echo '<div class="company-address">';
                        the_field('city_ureview'); echo', '; 
                        the_field('state_ureview'); echo ', ';  
                        the_field('postal_code_ureview'); 
                    echo '</div>';
            
                    // Company Rating
                    echo '<div class="company-rating">';
                        $shortcode = get_field( "enter_shortcode_to_generate_aggregate_ratings" );
                        echo do_shortcode("$shortcode");
                    echo '</div>';
                    
                    //Company Decription
                    echo '<div class="company-description">';
                        the_field('business_description');
                    echo '</div>';
                    
                    //Latest Positive Review
                    $reviews_shortcode = get_field( "enter_shortcode_to_generate_one_business_reviews" );
		    		echo do_shortcode("$reviews_shortcode");
                
				} else {
					
					
					//Company Name
                    echo '<div class="company-title"><a href="'. get_permalink() .'">';
                        the_field('company_name_ureview'); 
                    echo '</a></div>';
                    
                    //City, State, Zipcode
                    echo '<div class="company-address">';
                        the_field('city_ureview'); echo', '; 
                        the_field('state_ureview'); echo ', ';  
                        the_field('postal_code_ureview'); 
                    echo '</div>';
            
                    // Company Rating
                    echo '<div class="company-rating empty-stars">';
					$emptystars = get_stylesheet_directory_uri(); 
							printf('<img src="'. $emptystars .'/images/empty-stars.gif" alt="empty stars" /><br/>');
                        	the_field('company_name_ureview'); echo ' has not been rated.';
                    echo '</div>';
                    
                    //Company Decription
                    echo '<div class="company-description">';
                        the_field('business_description');
                    echo '</div>';
				
				
				}
			  
                printf ( '</div>' );

                 endwhile;
        printf(' </div> ');
	
        wp_reset_postdata();

		endif;
	 
    
    ?>
  
  <div class="local-business-professional">
      <h4>Are You A Local Business Professional?</h4>
      <p>Find out how <a href="https://get.ureview.me/">uReview.me</a> can help your business monitor customer satisfaction, <br/>collect feedback and generate more positive online reviews.</p>
      <a class="button" href="https://get.ureview.me/">Learn More</a>
  </div>
  
  <?php
  
  $queried_object = get_queried_object(); 
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;  
  ?>
  
  <!--<div class="otherservices mm111">	
  
    <h3>Other Service Providers in <?php //$catname = get_queried_object(); echo $catname->name; ?></h3>  
    <?php //the_field ('other_service_providers', $taxonomy . '_' . $term_id); ?>
    
  </div>-->
  
  </div>
  <!-- .container -->
   
</div>
<!-- #main-content -->

<?php get_footer(); ?>