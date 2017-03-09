<?php
/**
 * Widget Class for Social networking links
 */
class Social_Networking_Links extends WP_Widget {
	function __construct() {
		$control_options = array(
			'width'  => 750
		);
	 	parent::__construct(
				    'wp-social-widget', // base ID of the widget
				    __('WP Social Widget', 'wp-social-widget' ), // name of the widget
				    // widget options
				    array (
				        'description' => __( 'Sharing Social networks link', 'wp-social-widget' ),
				        'classname'   => 'wp-social-widget',
				    ),
				    $control_options
				);
	}

	function form( $instance ){
		// generate form		
		$defaults = array('title' => 'Image','target'=>'_blank','icon_circle'=>'','background_color' => '', 'background_hover_color' => '','icon_color' => '', 'icon_hover_color' => '', 'mail' => '', 'rss' => '', 'behance' => '', 'foursquare' => '', 'skype' => '', 'soundcloud' => '', 'vine' => '', 'youtube' => '', 'vk' => '', 'xing' => '', 'yelp' => '', 'dribbble' => '', 'facebook' => '', 'flickr' => '', 'github' => '', 'google' => '', 'instagram' => '', 'linkedin' => '', 'pinterest' => '', 'stumbleupon' => '', 'tumblr' => '', 'twitter' => '', 'vimeo' => '');

		$title = isset($instance[ 'title' ])?$instance[ 'title' ]:'';
		$target = isset($instance[ 'target' ])?$instance[ 'target' ]:'';
		$background_color = isset($instance[ 'background_color' ])?$instance[ 'background_color' ]:'';
		$background_hover_color = isset($instance[ 'background_hover_color' ])?$instance[ 'background_hover_color' ]:'';
		$icon_color = isset($instance[ 'icon_color' ])?$instance[ 'icon_color' ]:'';
		$icon_hover_color = isset($instance[ 'icon_hover_color' ])?$instance[ 'icon_hover_color' ]:'';
		$icon_circle = isset($instance[ 'icon_circle' ])?$instance[ 'icon_circle' ]:'';
		$mail = isset($instance['mail'])?$instance['mail']:'';
		$rss = isset($instance['rss'])?$instance['rss']:'';
		$behance = isset($instance['behance'])?$instance['behance']:'';
		$foursquare = isset($instance['foursquare'])?$instance['foursquare']:'';
		$skype = isset($instance['skype'])?$instance['skype']:'';
		$soundcloud = isset($instance['soundcloud'])?$instance['soundcloud']:'';
		$vine = isset($instance['vine'])?$instance['vine']:'';
		$vk = isset($instance['vk'])?$instance['vk']:'';
		$xing = isset($instance['xing'])?$instance['xing']:'';
		$yelp = isset($instance['yelp'])?$instance['yelp']:'';
		$youtube = isset($instance['youtube'])?$instance['youtube']:'';
		$dribbble = isset($instance['dribbble'])?$instance['dribbble']:'';
		$facebook = isset($instance['facebook'])?$instance['facebook']:'';
		$flickr = isset($instance['flickr'])?$instance['flickr']:'';
		$github = isset($instance['github'])?$instance['github']:'';
		$google = isset($instance['google'])?$instance['google']:'';
		$instagram = isset($instance['instagram'])?$instance['instagram']:'';
		$linkedin = isset($instance['linkedin'])?$instance['linkedin']:'';
		$pinterest = isset($instance['pinterest'])?$instance['pinterest']:'';
		$stumbleupon = isset($instance['stumbleupon'])?$instance['stumbleupon']:'';
		$tumblr = isset($instance['tumblr'])?$instance['tumblr']:'';
		$twitter = isset($instance['twitter'])?$instance['twitter']:'';
		$vimeo = isset($instance['vimeo'])?$instance['vimeo']:'';
		?>
			<div class="wp-social-row">
				<div class="wp-social-col-half">
					<label>Title :</label>
					<input class="" type="text" id="<?php echo $this->get_field_id("mail")?>" name="<?php echo $this->get_field_name("title")?>" value="<?php echo esc_attr($title)?>" />
				</div>

		 		<div class="wp-social-col-half">
					<label>Open Social Profile Links in:</label>
					<select id="<?php echo $this->get_field_id("target")?>" name="<?php echo $this->get_field_name('target')?>">
						<option value="_blank" <?php selected(esc_attr($target),'_blank')?> > Blank(New Tab) Page</option>	
						<option value="_self" <?php selected(esc_attr($target),'_self')?> > Same Page</option>
					</select>
				</div>	

		
				<div class="wp-social-col-half">
					<label>Background Color:</label>
					<input class="color-field" type="text" id="<?php echo $this->get_field_id("background_color")?>" name="<?php echo $this->get_field_name('background_color')?>" value="<?php echo esc_attr($background_color)?>" />
				</div>
				<div class="wp-social-col-half">
					<label>Icon Color:</label>
					<input class="color-field" type="text"  id="<?php echo $this->get_field_id("icon_color")?>" name="<?php echo $this->get_field_name('icon_color')?>" value="<?php echo esc_attr($icon_color)?>" />
				</div>
				
			</div>	
			
			<div class="wp-social-row">
				<div class="wp-social-col-half">
					<label>Background Hover Color:</label>
					<input class="color-field" type="text"  id="<?php echo $this->get_field_id("background_hover_color")?>" name="<?php echo $this->get_field_name('background_hover_color')?>" value="<?php echo esc_attr($background_hover_color)?>" />
				</div>
			

				<div class="wp-social-col-half">
					<label>Icon Hover Color:</label>
					<input class="color-field" type="text"  id="<?php echo $this->get_field_id("icon_hover_color")?>" name="<?php echo $this->get_field_name('icon_hover_color')?>" value="<?php echo esc_attr($icon_hover_color)?>" />
				</div>
			</div>	
		<div class="wp-social-row">
			<div class="wp-social-col-full">
				<label>Icon Circle:</label>
				<input type="checkbox"  id="<?php echo $this->get_field_id("icon_circle")?>" name="<?php echo $this->get_field_name('icon_circle')?>" value="yes" <?php echo ( "yes" == esc_attr($icon_circle))?'checked="checked"':''?> />
			</div>
		</div>
			
		<div class="wp-social-row">
			<div class="wp-social-col-half">
				<label><span class="sicon-behance"></span> Behance link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("behance")?>" name="<?php echo $this->get_field_name("behance")?>" value="<?php echo esc_attr($behance)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-dribbble"></span> Dribbble link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("dribbble")?>" name="<?php echo $this->get_field_name("dribbble")?>" value="<?php echo esc_attr($dribbble)?>" />
			</div>
	

		
			<div class="wp-social-col-half">
				<label><span class="sicon-facebook"></span> Facebook link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("facebook")?>" name="<?php echo $this->get_field_name("facebook")?>" value="<?php echo esc_attr($facebook)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-flickr"></span> Flickr link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("flickr")?>" name="<?php echo $this->get_field_name("flickr")?>" value="<?php echo esc_attr($flickr)?>" />
			</div>
		

			<div class="wp-social-col-half">
				<label><span class="sicon-foursquare"></span> Foursquare link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("foursquare")?>" name="<?php echo $this->get_field_name("foursquare")?>" value="<?php echo esc_attr($foursquare)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-github"></span> Github link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("github")?>" name="<?php echo $this->get_field_name("github")?>" value="<?php echo esc_attr($github)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-google"></span> Google link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("google")?>" name="<?php echo $this->get_field_name("google")?>" value="<?php echo esc_attr($google)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-instagram"></span> Instagram link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("instagram")?>" name="<?php echo $this->get_field_name("instagram")?>" value="<?php echo esc_attr($instagram)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-linkedin"></span> Linkedin link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("linkedin")?>" name="<?php echo $this->get_field_name("linkedin")?>" value="<?php echo esc_attr($linkedin)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-mail"></span> Mail link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("mail")?>" name="<?php echo $this->get_field_name("mail")?>" value="<?php echo esc_attr($mail)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-pinterest"></span> Pinterest link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("pinterest")?>" name="<?php echo $this->get_field_name("pinterest")?>" value="<?php echo esc_attr($pinterest)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-rss"></span> Rss link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("rss")?>" name="<?php echo $this->get_field_name("rss")?>" value="<?php echo esc_attr($rss)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-skype"></span> Skype link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("skype")?>" name="<?php echo $this->get_field_name("skype")?>" value="<?php echo esc_attr($skype)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-soundcloud"></span> Soundcloud link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("soundcloud")?>" name="<?php echo $this->get_field_name("soundcloud")?>" value="<?php echo esc_attr($soundcloud)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-stumbleupon"></span> Stumbleupon link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("stumbleupon")?>" name="<?php echo $this->get_field_name("stumbleupon")?>" value="<?php echo esc_attr($stumbleupon)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-tumblr"></span> Tumblr link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("tumblr")?>" name="<?php echo $this->get_field_name("tumblr")?>" value="<?php echo esc_attr($tumblr)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-twitter"></span> Twitter link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("twitter")?>" name="<?php echo $this->get_field_name("twitter")?>" value="<?php echo esc_attr($twitter)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-vimeo"></span> Vimeo link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("vimeo")?>" name="<?php echo $this->get_field_name("vimeo")?>" value="<?php echo esc_attr($vimeo)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-vine"></span> Vine link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("vine")?>" name="<?php echo $this->get_field_name("vine")?>" value="<?php echo esc_attr($vine)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-vk"></span> Vk link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("vk")?>" name="<?php echo $this->get_field_name("vk")?>" value="<?php echo esc_attr($vk)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-xing"></span> Xing link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("xing")?>" name="<?php echo $this->get_field_name("xing")?>" value="<?php echo esc_attr($xing)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-yelp"></span> Yelp link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("yelp")?>" name="<?php echo $this->get_field_name("yelp")?>" value="<?php echo esc_attr($yelp)?>" />
			</div>

			<div class="wp-social-col-half">
				<label><span class="sicon-youtube"></span> Youtube link :</label>
				<input class="widefat" type="text" id="<?php echo $this->get_field_id("youtube")?>" name="<?php echo $this->get_field_name("youtube")?>" value="<?php echo esc_attr($youtube)?>" />
			</div>

		</div>
			<script type="text/javascript">
				jQuery(document).ready(function($){
					social_color_picker();

				});
			</script>
		<?php
	}

	function update( $new_instance, $old_instance ){
		$instance['title' ] = strip_tags( $new_instance['title' ] );
		$instance['target' ] = strip_tags( $new_instance['target' ] );

		$instance['background_color'] = $new_instance['background_color'];
		$instance['background_hover_color'] = $new_instance['background_hover_color'];
		$instance['icon_color'] = $new_instance['icon_color'];
		$instance['icon_hover_color'] = $new_instance['icon_hover_color'];
		$instance['icon_circle'] = $new_instance['icon_circle'];

		$instance['mail'] = strip_tags( $new_instance['mail'] );
		$instance['rss'] = strip_tags( $new_instance['rss'] );
		$instance['behance'] = strip_tags( $new_instance['behance'] );
		$instance['foursquare'] = strip_tags( $new_instance['foursquare'] );
		$instance['skype'] = strip_tags( $new_instance['skype'] );
		$instance['soundcloud'] = strip_tags( $new_instance['soundcloud'] );
		$instance['vine'] = strip_tags( $new_instance['vine'] );
		$instance['vk'] = strip_tags( $new_instance['vk'] );
		$instance['xing'] = strip_tags( $new_instance['xing'] );
		$instance['yelp'] = strip_tags( $new_instance['yelp'] );
		$instance['dribbble'] = strip_tags( $new_instance['dribbble'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['flickr'] = strip_tags( $new_instance['flickr'] );
		$instance['github'] = strip_tags( $new_instance['github'] );
		$instance['google'] = strip_tags( $new_instance['google'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['pinterest'] = strip_tags( $new_instance['pinterest'] );
		$instance['stumbleupon'] = strip_tags( $new_instance['stumbleupon'] );
		$instance['tumblr'] = strip_tags( $new_instance['tumblr'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['vimeo'] = strip_tags( $new_instance['vimeo'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );
		return $instance;
	}

	function widget( $args, $instance ) {
		// display in front end
		extract( $args );

		$instance['background_color']       = ( isset($instance['background_color']) && $instance['background_color']!="" )?$instance['background_color']:'#ffffff';
		$instance['background_hover_color'] = ( isset($instance['background_hover_color']) && $instance['background_hover_color'] !="" )?$instance['background_hover_color']:'#000000';
		$instance['icon_color']             = ( isset($instance['icon_color']) && $instance['icon_color'] !="" )?$instance['icon_color']:'#000000';
		$instance['icon_hover_color']       = ( isset($instance['icon_hover_color']) && $instance['icon_hover_color'] !="" )?$instance['icon_hover_color']:'#ffffff';
		
		$target = ( isset($instance['target']) && $instance['target'] !="" )?$instance['target']:'_blank';
		
		$style = "<style type='text/css'>
			body .wpsw-social-links li a .social-icon {
				background: ".$instance['background_color'] ." !important;
				color:".$instance['icon_color']." !important;
			}

			body .wpsw-social-links li a .social-icon:hover,
			body .wpsw-social-links li a .social-icon:focus {
				background: ".$instance['background_hover_color'] ." !important;
				color:".$instance['icon_hover_color']." !important;

			}";
		if( "yes" == $instance['icon_circle'] ){
		$style .= " body .wpsw-social-links li .social-icon,
					body .wpsw-social-links li .social-icon:after {
                        -webkit-border-radius: 50%;
                        -moz-border-radius: 50%;
                        -ms-border-radius: 50%;
                        -o-border-radius: 50%;
                        border-radius: 50%;
                        }";
		}
		$style .= "</style>";


		$socialBlock = $style;
		$socialBlock .= $before_widget;
		if( isset($instance['title']) && $instance['title']!="" )
			$socialBlock .= $before_title . $instance['title'] . $after_title;
			$socialBlock .= "<ul class='wpsw-social-links'>";
		
		if( isset($instance['behance']) && $instance['behance']!="" )
			$socialBlock .= '<li><a href="'.$instance['behance'].'" target="'. $target .'" ><span class="social-icon sicon-behance"></span></a></li>';

		if( isset($instance['dribbble']) && $instance['dribbble']!="" )
			$socialBlock .= '<li><a href="'.$instance['dribbble'].'" target="'. $target .'" ><span class="social-icon sicon-dribbble"></span></a></li>';

		if( isset($instance['facebook']) && $instance['facebook']!="" )
			$socialBlock .= '<li><a href="'.$instance['facebook'].'" target="'. $target .'" ><span class="social-icon sicon-facebook"></span></a></li>';

		if( isset($instance['flickr']) && $instance['flickr']!="" )
			$socialBlock .= '<li><a href="'.$instance['flickr'].'" target="'. $target .'" ><span class="social-icon sicon-flickr"></span></a></li>';
		
		if( isset($instance['foursquare']) && $instance['foursquare']!="" )
			$socialBlock .= '<li><a href="'.$instance['foursquare'].'" target="'. $target .'" ><span class="social-icon sicon-foursquare"></span></a></li>';

		if( isset($instance['github']) && $instance['github']!="" )
			$socialBlock .= '<li><a href="'.$instance['github'].'" target="'. $target .'" ><span class="social-icon sicon-github"></span></a></li>';

		if( isset($instance['google']) && $instance['google']!="" )
			$socialBlock .= '<li><a href="'.$instance['google'].'" target="'. $target .'" ><span class="social-icon sicon-google"></span></a></li>';

		if( isset($instance['instagram']) && $instance['instagram']!="" )
			$socialBlock .= '<li><a href="'.$instance['instagram'].'" target="'. $target .'" ><span class="social-icon sicon-instagram"></span></a></li>';

		if( isset($instance['linkedin']) && $instance['linkedin']!="" )
			$socialBlock .= '<li><a href="'.$instance['linkedin'].'" target="'. $target .'" ><span class="social-icon sicon-linkedin"></span></a></li>';

		if( isset($instance['mail']) && $instance['mail']!="" )
			$socialBlock .= '<li><a href="mailto:'.$instance['mail'].'" ><span class="social-icon sicon-mail"></span></a></li>';

		if( isset($instance['pinterest']) && $instance['pinterest']!="" )
			$socialBlock .= '<li><a href="'.$instance['pinterest'].'" target="'. $target .'" ><span class="social-icon sicon-pinterest"></span></a></li>';

		if( isset($instance['rss']) && $instance['rss']!="" )
			$socialBlock .= '<li><a href="'.$instance['rss'].'" target="'. $target .'" ><span class="social-icon sicon-rss"></span></a></li>';

		if( isset($instance['skype']) && $instance['skype']!="" )
			$socialBlock .= '<li><a href="'.$instance['skype'].'" target="'. $target .'" ><span class="social-icon sicon-skype"></span></a></li>';

		if( isset($instance['soundcloud']) && $instance['soundcloud']!="" )
			$socialBlock .= '<li><a href="'.$instance['soundcloud'].'" target="'. $target .'" ><span class="social-icon sicon-soundcloud"></span></a></li>';

		if( isset($instance['stumbleupon']) && $instance['stumbleupon']!="" )
			$socialBlock .= '<li><a href="'.$instance['stumbleupon'].'" target="'. $target .'" ><span class="social-icon sicon-stumbleupon"></span></a></li>';

		if( isset($instance['tumblr']) && $instance['tumblr']!="" )
			$socialBlock .= '<li><a href="'.$instance['tumblr'].'" target="'. $target .'" ><span class="social-icon sicon-tumblr"></span></a></li>';

		if( isset($instance['twitter']) && $instance['twitter']!="" )
			$socialBlock .= '<li><a href="'.$instance['twitter'].'" target="'. $target .'" ><span class="social-icon sicon-twitter"></span></a></li>';

		if( isset($instance['vimeo']) && $instance['vimeo']!="" )
			$socialBlock .= '<li><a href="'.$instance['vimeo'].'" target="'. $target .'" ><span class="social-icon sicon-vimeo"></span></a></li>';

		if( isset($instance['vine']) && $instance['vine']!="" )
			$socialBlock .= '<li><a href="'.$instance['vine'].'" target="'. $target .'" ><span class="social-icon sicon-vine"></span></a></li>';

		if( isset($instance['vk']) && $instance['vk']!="" )
			$socialBlock .= '<li><a href="'.$instance['vk'].'" target="'. $target .'" ><span class="social-icon sicon-vk"></span></a></li>';
		
		if( isset($instance['xing']) && $instance['xing']!="" )
			$socialBlock .= '<li><a href="'.$instance['xing'].'" target="'. $target .'" ><span class="social-icon sicon-xing"></span></a></li>';

		if( isset($instance['yelp']) && $instance['yelp']!="" )
			$socialBlock .= '<li><a href="'.$instance['yelp'].'" target="'. $target .'" ><span class="social-icon sicon-yelp"></span></a></li>';
		
		if( isset($instance['youtube']) && $instance['youtube']!="" )
			$socialBlock .= '<li><a href="'.$instance['youtube'].'" target="'. $target .'" ><span class="social-icon sicon-youtube"></span></a></li>';

		$socialBlock .= "</ul>";

		$socialBlock .= $after_widget;

		echo $socialBlock;
	}	 
}

function wpsw_register_social_network() {
    register_widget( 'Social_Networking_Links' );
}
add_action( 'widgets_init', 'wpsw_register_social_network' );