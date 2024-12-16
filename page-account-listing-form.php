 <?php
/*
Template Name: Account Listing Form 

*/
?>

<?php get_header(); ?>
<?php 

$site_url = get_site_url();
	

 ?>
 
<style>
	footer.fl-builder-content.fl-builder-content-117776{
		display: none;
	}

</style> 
 
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/newadmin.css?<?php echo time(); ?>">

     

  
<div class="new-admin-profile">
	<div id="cus-sidebar" class="profile-sidebar">
 	 	<ul id="sidemenu">
 	 		<li>
				<a href="/account-info/"> 
					<?php			
						$avatar_uri = um_get_avatar_uri( um_profile('profile_photo'), 1000 );
						$default_avatar_uri = um_get_default_avatar_uri();
						
						if($avatar_uri != '' && strpos($avatar_uri, 'profile_photo') !== false){
							echo '<img src="'.$avatar_uri.'" alt="profile-image" class="profile-picture">';
						}else{
							echo '<img src="'.$default_avatar_uri.'" alt="profile-image" class="profile-picture">';
						}
					
					$user_ID= get_current_user_id();
					$field_value = get_user_meta($user_ID, 'nickname', true);
					echo '<span>Welcome,</span>'.$field_value.'</a></li>';
					?>
 	 			<li>
 	 			<a class="active" href="/widget-settings/">
 	 				<svg xmlns="http://www.w3.org/2000/svg" width="62.207" height="62.207" viewBox="0 0 62.207 62.207"><defs><style>.a{fill:#1a3a6b;}</style></defs><g transform="translate(-0.001)"><g transform="translate(0.001)"><path class="a" d="M60.993,0H7.291A1.215,1.215,0,0,0,6.076,1.215V42.281H2.735A2.737,2.737,0,0,0,0,45.015V59.473a2.737,2.737,0,0,0,2.734,2.734H7.959a2.729,2.729,0,0,0,2.089-.973l.56.22a10.867,10.867,0,0,0,3.984.753H25.637a3.4,3.4,0,0,0,3.145-4.7,3.4,3.4,0,0,0,1.679-4.423,3.4,3.4,0,0,0-.146-6.13,3.4,3.4,0,0,0-3.153-4.676H21.15l.742-2.2a5.081,5.081,0,0,0,.253-2.032H42.039a1.215,1.215,0,0,0,1.215-1.215V29.639A7.747,7.747,0,0,0,35.515,21.9H31.354v-.063a6.4,6.4,0,0,0,2.151-4.785v-3.7a5.059,5.059,0,0,0,1.872-3.929V6.075A1.215,1.215,0,0,0,34.162,4.86H27.28a6.6,6.6,0,0,0-6.6,6.6v5.6a6.4,6.4,0,0,0,2.151,4.785V21.9H18.675a7.747,7.747,0,0,0-7.739,7.739v7.193a1.215,1.215,0,0,0,1.215,1.215h2.242l-.385,1.063a5.8,5.8,0,0,1-2.681,3.122l-1.481.807a2.729,2.729,0,0,0-1.339-.7V2.43H59.778V48.6H40.839a1.215,1.215,0,0,0,0,2.43H60.993a1.215,1.215,0,0,0,1.215-1.215V1.215A1.215,1.215,0,0,0,60.993,0ZM8.263,59.473a.3.3,0,0,1-.3.3H2.735a.3.3,0,0,1-.3-.3V45.015a.3.3,0,0,1,.3-.3H7.959a.3.3,0,0,1,.3.3ZM20.242,24.46a1.227,1.227,0,0,0,.026-.13h2.568V34.593L18.91,29.667Zm8.682,11.157H25.266V23.2a6.39,6.39,0,0,0,3.659,0V35.617Zm11.9-5.978v5.978h-7.2l3.911-4.909a1.214,1.214,0,0,0,.227-1.058l-1.34-5.241A5.316,5.316,0,0,1,40.824,29.639ZM33.9,24.331a1.221,1.221,0,0,0,.026.13l1.332,5.207-3.907,4.9V24.331H33.9Zm-2.829-9.84v2.562a3.98,3.98,0,1,1-7.96,0V14.491h7.96Zm-7.96-3.035A4.17,4.17,0,0,1,27.28,7.29h5.667V9.423a2.641,2.641,0,0,1-2.638,2.638H23.115ZM13.366,35.617V29.639a5.316,5.316,0,0,1,4.38-5.226l-1.339,5.237a1.215,1.215,0,0,0,.227,1.058l2.444,3.067a5.224,5.224,0,0,0-.53-.194l-1.184-.36a1.216,1.216,0,0,0-1.5.749l-.6,1.647Zm-.877,8.749a8.225,8.225,0,0,0,3.8-4.429l1.467-4.055.08.024a2.662,2.662,0,0,1,1.749,3.4l-1.282,3.805a1.215,1.215,0,0,0,1.151,1.6h7.7a.972.972,0,1,1,0,1.944H24.647a1.215,1.215,0,1,0,0,2.43h4.27a.972.972,0,1,1,0,1.944h-4.27a1.215,1.215,0,1,0,0,2.43h2.69a.972.972,0,1,1,0,1.944h-2.69a1.215,1.215,0,1,0,0,2.43h.99a.972.972,0,0,1,0,1.944H14.592a8.446,8.446,0,0,1-3.1-.585l-.8-.315V45.344Z" transform="translate(-0.001)"></path><path class="a" d="M405.216,295.584h5.832a1.215,1.215,0,0,0,0-2.43h-5.832a1.215,1.215,0,0,0,0,2.43Z" transform="translate(-354.916 -257.537)"></path><path class="a" d="M411.048,245.154h-5.832a1.215,1.215,0,1,0,0,2.43h5.832a1.215,1.215,0,0,0,0-2.43Z" transform="translate(-354.916 -215.368)"></path><path class="a" d="M411.048,197.154h-5.832a1.215,1.215,0,0,0,0,2.43h5.832a1.215,1.215,0,0,0,0-2.43Z" transform="translate(-354.916 -173.2)"></path><path class="a" d="M373.117,86.151a1.215,1.215,0,0,0,1.718,0l3.827-3.827a1.215,1.215,0,0,0-1.718-1.718l-2.968,2.968-.9-.9a1.215,1.215,0,0,0-1.718,1.718Z" transform="translate(-325.924 -70.5)"></path><path class="a" d="M352.824,40H339.216A1.215,1.215,0,0,0,338,41.215V54.823a1.215,1.215,0,0,0,1.215,1.215h13.608a1.215,1.215,0,0,0,1.215-1.215V41.215A1.215,1.215,0,0,0,352.824,40Zm-1.215,13.608H340.431V42.43h11.178Z" transform="translate(-296.935 -35.14)"></path><path class="a" d="M287.346,400a1.215,1.215,0,1,0,.859.356A1.219,1.219,0,0,0,287.346,400Z" transform="translate(-251.367 -351.404)"></path></g></g></svg>
 	 				<span>Widget Settings</span>
 	 			</a>
 	 		</li>
 	 		<li>
 	 			<a href="/account-info/">
 	 				<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><defs><style>.a{fill:#1a3a6b;}</style></defs><path class="a" d="M60,30A30,30,0,1,0,5.038,46.618l0,.021.207.3c.18.263.374.512.562.768.076.1.151.209.229.313.238.316.483.626.732.931.072.088.145.175.218.262a30.011,30.011,0,0,0,3.793,3.794c.083.069.165.139.249.208.3.243.6.481.906.712.124.094.25.185.375.277.292.214.584.426.884.629.16.109.326.211.488.317.416.27.836.531,1.264.779.3.174.6.347.9.511.184.1.372.191.558.286.325.166.651.327.982.481q.25.115.5.227.574.255,1.162.485c.121.048.241.1.363.144a29.711,29.711,0,0,0,3.3,1.036c.046.012.093.021.139.032q.747.183,1.509.328c.135.026.27.049.405.073q.636.113,1.28.2c.164.022.327.043.491.063.419.048.841.086,1.265.117.158.012.315.027.473.036.571.03,1.145.051,1.724.051s1.153-.021,1.724-.053c.158-.009.315-.025.473-.036.424-.031.846-.068,1.265-.117.164-.019.328-.041.491-.063q.645-.085,1.28-.2c.135-.024.27-.047.4-.073q.762-.146,1.509-.328l.139-.032a29.712,29.712,0,0,0,3.3-1.036c.122-.046.243-.1.365-.144q.586-.231,1.161-.484c.168-.074.336-.15.5-.227q.5-.231.982-.481c.186-.1.374-.188.558-.286.305-.164.6-.337.9-.511q.642-.374,1.264-.779c.163-.106.328-.208.488-.317.3-.2.591-.415.884-.629.125-.092.251-.183.375-.277q.459-.346.906-.712c.084-.069.166-.139.249-.208a30.026,30.026,0,0,0,3.794-3.795c.073-.087.145-.173.216-.261.249-.305.494-.615.732-.931.078-.1.152-.208.229-.313.187-.256.382-.505.562-.768l.207-.3,0-.021A29.818,29.818,0,0,0,60,30Zm-2,0a27.822,27.822,0,0,1-3.591,13.694A13.644,13.644,0,0,0,41.311,34H35.366A.366.366,0,0,1,35,33.635V32.99a.4.4,0,0,1,.276-.352c6.439-2.421,10.455-12.464,9.613-19.488a14.935,14.935,0,0,0-4.883-9.3A28.042,28.042,0,0,1,58,30ZM52.538,46.59c-.081.109-.162.217-.244.325-.223.293-.448.584-.682.868l-.073.086a28.312,28.312,0,0,1-2.611,2.743c-.055.051-.11.1-.166.153-.277.251-.561.495-.848.735-.09.075-.181.149-.272.223-.279.227-.56.45-.847.666-.1.073-.2.142-.295.214-.165.121-.332.238-.5.355V48H44v6.233l-.118.068c-.255.146-.509.291-.768.428-.177.094-.357.185-.537.276q-.453.228-.913.44c-.15.069-.3.138-.45.2q-.577.252-1.166.479c-.081.031-.16.065-.241.1a27.908,27.908,0,0,1-3.063.95c-.075.019-.151.034-.226.052-.431.1-.866.2-1.3.279-.13.025-.26.047-.391.07q-.582.1-1.17.178c-.151.02-.3.041-.454.058-.388.045-.778.078-1.17.107-.145.01-.289.025-.435.033-.531.032-1.062.05-1.6.05s-1.065-.018-1.595-.048c-.146-.008-.29-.023-.435-.033-.391-.029-.782-.062-1.17-.107-.152-.017-.3-.038-.454-.058q-.588-.078-1.17-.178c-.13-.023-.261-.045-.391-.07q-.656-.125-1.3-.28l-.225-.052a28.143,28.143,0,0,1-3.064-.95c-.081-.03-.161-.064-.241-.1q-.588-.227-1.165-.479c-.151-.066-.3-.135-.451-.2q-.46-.211-.913-.44c-.18-.091-.36-.181-.537-.276-.259-.137-.514-.283-.768-.428L16,54.234V48H14v4.958c-.168-.117-.335-.235-.5-.355-.1-.072-.2-.141-.3-.214-.287-.216-.568-.439-.846-.665-.092-.074-.183-.149-.274-.224q-.43-.358-.847-.734l-.168-.155a28.171,28.171,0,0,1-2.61-2.742l-.073-.086c-.234-.284-.459-.575-.682-.868-.082-.108-.164-.216-.244-.325-.12-.163-.236-.329-.352-.495A11.647,11.647,0,0,1,18.689,36h2.9L30,44.414,38.414,36h2.9A11.648,11.648,0,0,1,52.89,46.1C52.774,46.261,52.659,46.427,52.538,46.59Zm-27.047-15.8C20.709,29.022,17,20.85,17,15c0-.128.015-.253.018-.38l.732-.9a5.915,5.915,0,0,1,7.012-1.4,8,8,0,0,0,10.266-3.5,16.723,16.723,0,0,1,7.943,5.5c.293,6.1-3.294,14.533-8.4,16.452A2.375,2.375,0,0,0,33,32.99v.645A2.369,2.369,0,0,0,35.365,36h.221L30,41.586,24.414,36h.221A2.369,2.369,0,0,0,27,33.635V33A2.351,2.351,0,0,0,25.491,30.791ZM30.04,2h.033a13.263,13.263,0,0,1,1.43.083,13.05,13.05,0,0,1,10.752,8.589,19.305,19.305,0,0,0-7.5-4.027l-.86-.236-.333.826a6,6,0,0,1-7.992,3.252,8.027,8.027,0,0,0-8.017.73A13.016,13.016,0,0,1,30.04,2ZM19.982,3.86c-.193.174-.392.338-.578.523A14.9,14.9,0,0,0,15,15c0,6.629,4.19,15.593,9.8,17.666A.352.352,0,0,1,25,33v.635a.366.366,0,0,1-.365.365H18.69a13.644,13.644,0,0,0-13.1,9.694A27.967,27.967,0,0,1,19.982,3.86Z"></path></svg>
 	 				<span>Account Info</span>
 	 			</a>
 	 		</li>
 	 		<li>

 	 			<?php if ( is_user_logged_in() ) {
 	 				$logout_url = wp_logout_url( home_url() );
				    echo '<a href="' . esc_url( $logout_url ) . '"><svg fill="#1a3a6b" width="60" height="60" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M106.667 512c0-200.295 162.371-362.667 362.667-362.667 57.937 0 112.644 13.57 161.173 37.687 10.551 5.243 23.356.941 28.599-9.61 5.239-10.551.939-23.355-9.613-28.599-54.293-26.982-115.486-42.144-180.16-42.144C245.473 106.667 64 288.141 64 512s181.474 405.333 405.333 405.333c64.674 0 125.867-15.164 180.16-42.146 10.551-5.244 14.852-18.044 9.613-28.595-5.244-10.551-18.048-14.857-28.599-9.613-48.529 24.115-103.236 37.687-161.173 37.687-200.295 0-362.667-162.372-362.667-362.667z"/><path d="M783.087 326.249c-8.333-8.332-21.841-8.332-30.174 0-8.329 8.331-8.329 21.839 0 30.17l134.251 134.249h-353.83c-11.78 0-21.333 9.553-21.333 21.333s9.553 21.333 21.333 21.333h353.83L752.913 667.58c-8.329 8.333-8.329 21.841 0 30.174 8.333 8.329 21.841 8.329 30.174 0l170.667-170.667a21.29 21.29 0 004.655-6.985A21.31 21.31 0 00960 512a21.252 21.252 0 00-5.79-14.613l-.512-.525-170.611-170.613z"/></svg><span>Logout</span></a>';
				}?>
 	 		</li>
			 	 	 
		 </ul>
	</div>
	  
	  
	<div class="profile-content">
		<div class="profile-header">
			<div class="wrap">
				<h1 class="entry-title" itemprop="headline"><?php echo get_the_title(); ?></h1> 
			</div>
		</div>
		
		<?php 
			$client_details = widget_submit_form();
			$get_reviews = get_widget_reviews();
			if($get_reviews){
				$js_link = 	htmlspecialchars('<div id="rize-link-building-widget"><script>var script = document.createElement("script");var rize_widget_js_link = https://rizereviews.com/rize_link_building_widget/widget.js?'. $get_reviews->user_id .';script.src = rize_widget_js_link + "&" +  Math.random();document.write(script.outerHTML);</script></div>', ENT_QUOTES); 
		?>
		
			<div class="source_box">
				<i style="color: grey;">To display your widget place the code below right before the end of the &lt;/body&gt; tag.</i> 	
				<div class="source_code">
					<p id="source_code"><?php echo $js_link; ?></p>
				</div>
			
				<button class="custom-btn copy-txt"  onclick="copyToClipboard('source_code')">Copy Code</button>
			
			</div>
			
			<?php } else { 

					if($client_details->schema_business_name){

				?>
						<div class="row profile-form-back widgetMessage">
							<div class="col-sm-12">
								<h3 class="form-inner-heading elseTxt">Your widget is gathering reviews, please check back in 2-3 hours, thank you!</h3>
							</div>
						</div>
			<?php 
				}
			} ?>
	
		<form class="profile-form-back" method="post">
			<i style="color: grey;">Fill out the form below to create your widget. For more information <a href="<?php echo $site_url; ?>/review-widget">Click Here</a></i>			
					
			<div class="row" id="form">
				<div class="form-group col-xs-12 col-sm-6 iris-wrapper">
					<label class="form-label">Choose Button color</label>
					<div class="input-group input-group-custom">
						<div class="input-group-prepend">
							<span class="input-group-text-custom"></span>
						</div>
						<input type="text"  name="buttoncolor"  placeholder="Button Color" required="required" id="color_picker" class="form-control-custom" value="<? echo $client_details->buttoncolor; ?>" autocomplete="off" />
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6 iris-wrapper">
					<label class="form-label">Choose Circle color</label>
					<div class="input-group input-group-custom">
						<div class="input-group-prepend">
							<span class="input-group-text-custom"></span>
						</div>
						<input type="text" name="circlecolor" placeholder="Circle Color" required="required" id="color_picker" class="form-control-custom" value="<? echo $client_details->circlecolor; ?>" autocomplete="off" />
					</div>
				</div>
				
				<div class="form-group col-xs-12 col-sm-6 iris-wrapper">
					<label class="form-label">Widget Side</label>
					<div class="input-group input-group-custom">
						<select class="form-control-custom" name="widget_side" type="text" placeholder="Widget Side" required="required">
							<option value="right" <? if($client_details->widget_side == 'right'){ ?>selected="selected"<? } ?>>Right</option>
							<option value="left" <? if($client_details->widget_side == 'left'){ ?>selected="selected"<? } ?>>Left</option>
						</select>
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6 iris-wrapper">
					<label class="form-label">Aggregate Rating</label>
					<div class="input-group input-group-custom">
						<select class="form-control-custom" name="show_agrregate_rating" type="text" placeholder="Aggregate Rating" required="required">
							<option value="yes" <? if($client_details->show_agrregate_rating == 'yes'){ ?>selected="selected"<? } ?>>Yes</option>
							<option value="no" <? if($client_details->show_agrregate_rating == 'no'){ ?>selected="selected"<? } ?>>No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h3 class="form-inner-heading">Google Service Schema Setting</h3>
					<i style="color: grey;">Note : We'll use your business name and address to get reviews from Google</i>
				</div>
		 
				<div class="col-xs-12 col-sm-6 form-group"> 
					<label class="form-label">Business Name</label>
					<input class="form-control-custom" name="schema_business_name" value="<? echo $client_details->schema_business_name; ?>" type="text" placeholder="Business Name" required="required">
				</div>
		 
				<div class="col-xs-12 col-sm-6 form-group"> 
					<label class="form-label">Website Logo Url</label>
					<input class="form-control-custom" name="schema_logo_url" value="<? echo $client_details->schema_logo_url; ?>" type="text" placeholder="Website Logo Url" required="required">
				</div>
		 
				<div class="col-xs-12 col-sm-6 form-group"> 
					<label class="form-label">Telephone</label>
					<input class="form-control-custom" name="schema_telephone" value="<? echo $client_details->schema_telephone; ?>" type="text" placeholder="Telephone" required="required">
				</div>
		 
				<div class="col-xs-12 col-sm-6 form-group"> 
					<label class="form-label">Street Address</label>
					<input class="form-control-custom" name="schema_street" value="<? echo $client_details->schema_street; ?>" type="text" placeholder="Street Address" required="required">
				</div>
				 
				<div class="col-xs-12 col-sm-6 form-group"> 
					<label class="form-label">City</label>
					<input class="form-control-custom" name="schema_locality" value="<? echo $client_details->schema_locality; ?>" type="text" placeholder="Locality" required="required">
					<input type="hidden" name="ip_address" value="<?php   echo $_SERVER['REMOTE_ADDR']; ?>">
				</div> 
				 
				<div class="col-xs-12 col-sm-6"> 
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label class="form-label">State</label>
							<input class="form-control-custom" name="schema_region" value="<? echo $client_details->schema_region; ?>" type="text" placeholder="Region" required="required">
						</div> 
				 
						<div class="col-xs-12 col-sm-6 form-group"> 
							<label class="form-label">Zip Code</label>
							<input class="form-control-custom" name="schema_postalCode" value="<? echo $client_details->schema_postalCode; ?>" type="text" placeholder="Postal Code" required="required">
						</div> 
					</div>
		 
				</div>
				
				<div class="col-xs-12 col-sm-12">
					<h3 class="form-inner-heading">Other Social Platforms</h3>
					<i style="color: grey;">Note : We'll also use these URLs to get your reviews</i>
				</div>
				
				<div class="col-xs-12 col-sm-6 form-group"> 
					<label class="form-label">Facebook Url</label>
					<input class="form-control-custom" name="facebook_url" value="<? echo $client_details->facebook_url; ?>" type="text" placeholder="Facebook Url">
				</div>
				
				<div class="col-xs-12 col-sm-6 form-group"> 
					<label class="form-label">BBB Url</label>
					<input class="form-control-custom" name="bbb_url" value="<? echo $client_details->bbb_url; ?>" type="text" placeholder="BBB Url">
				</div>
				
			</div>
		 
			<div class="row">
				<div class="col-xs-12 col-sm-12 form-group text-right">		 
					<input type="submit" name="widget_submit" id="" class="form-button" value="Submit">
				</div>
			</div> 
		</form>
 	</div>
</div>

<div class="admin-footer-bg" id="admin-footer">
	<div class="admin-container copy-right-txt">&copy; Copyright 2023 Rize Reviews. All rights reserved.</div>
</div>



<?php get_footer(); ?>

<?php if($get_reviews){ ?>

	<div id="rize-link-building-widget">
		<script>
			var script = document.createElement('script');
			var rize_widget_js_link = 'https://rizereviews.com/rize_link_building_widget/widget.js?' + <?php echo $get_reviews->user_id; ?>;
			script.src = rize_widget_js_link + '&' +  Math.random();
			document.write(script.outerHTML);
		</script>
	</div>
	
<?php } ?>

<script>
	jQuery(document).ready(function(){
		//var header_h = jQuery("header.fl-builder-content").height();  
		//jQuery("#cus-sidebar").css('padding-top', + header_h + 'px'); 
	});
 
	function copyToClipboard(elementId) {

	  // Create a "hidden" input
	  var aux = document.createElement("input");
	  
	  var html = document.getElementById(elementId).innerHTML;

	  // Assign it the value of the specified element
	  aux.setAttribute("value", html.replace(/&lt;/g,'<').replace(/&gt;/g,'>').replace(/&amp;/g,'&'));

	  // Append it to the body
	  document.body.appendChild(aux);

	  // Highlight its content
	  aux.select();

	  // Copy the highlighted text
	  document.execCommand("copy");

	  // Remove it from the body
	  document.body.removeChild(aux);

	}
	
	jQuery(document).ready(function(){
		
		jQuery('#shiftnav-toggle-main-button').prepend('<a href="/logout/" class="my-cusstom-button">Logout</a>');
		
		jQuery('#shiftnav-toggle-main-button').click(function(){
			jQuery("body").removeClass("shiftnav-open shiftnav-open-right");
			jQuery('#cus-sidebar').toggleClass('my-custom-menu');
			jQuery('#shiftnav-toggle-main-button .fa-bars').toggleClass('close-mymenu');
			jQuery('html').toggleClass('overflow-hid');
			
			return false;
		});
	
	});
	
 
 
</script> 
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/colorpicker-iris.min.js"></script>
	 
  <!-- TODO: Missing CoffeeScript 2 -->

  <script type="text/javascript">//<![CDATA[
    var VanillaRunOnDomReady = function() {      
		// loop the iris wrappers
		jQuery('.iris-wrapper','#form').each(function() {
		 
		  // set up current object vars
		  var $input 					= jQuery('INPUT', this);
		  var $inputGroup 		= jQuery('.input-group', this);
		  var $inputIndicator = jQuery('.input-group-text-custom', this);

		  // set our input color indicator to default color
		  $inputIndicator.css('background-color', $input.val());
		  // init iris
		  $input.iris({
			// on iris change
			change: function(event, ui) {
			  // update input value on change
			  $input.attr('value', ui.color.toString());
			  // load the current value
			  $inputIndicator.css('background-color', ui.color.toString());
			}
		  });

		  // move iris color picker after the input group
		  jQuery('.iris-picker', this).insertAfter($inputGroup);
		  // input blur function
		  $input.blur(function() {
			setTimeout(function() {
			  if (!jQuery(document.activeElement).closest(".iris-picker").length)
				$input.iris('hide');
			  else
				$input.focus();
			}, 0);
		  });
		  // when input is focused
		  $input.focus(function() {
			// input iris show
			$input.iris('show');
		  });

		});
    }

		var alreadyrunflag = 0;

		if (document.addEventListener)
			document.addEventListener("DOMContentLoaded", function(){
				alreadyrunflag=1; 
				VanillaRunOnDomReady();
			}, false);
		else if (document.all && !window.opera) {
			document.write('<script type="text/javascript" id="contentloadtag" defer="defer" src="javascript:void(0)"><\/script>');
			var contentloadtag = document.getElementById("contentloadtag")
			contentloadtag.onreadystatechange=function(){
				if (this.readyState=="complete"){
					alreadyrunflag=1;
					VanillaRunOnDomReady();
				}
			}
		}
		window.onload = function(){
		  setTimeout("if (!alreadyrunflag){VanillaRunOnDomReady}", 0);
		}
  //]]>
</script>
  


