<?php
/*
 * Plugin Name: iLike Social Media Optimization
 * Version: 1.0
 * Plugin URI: http://plugins.svn.wordpress.org/ilike-social-media-optimization/
 * Description: With iLike Social Media Optimization (SMO) for Wordpress, you can turn on and customize many social network profile buttons which power by AddThis.com but with slight enhanced iLikeiPlus feature (which can be enabled and disabled as well) to let your earn more traffic for your social profile. The standard buttons will show Facebook, Google+, Pinterest, and Twitter button.
 * Author: iLikeiPlus Development Team
 * Author URI: http://ilikeiplus.com
 * License: GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
class ilike_social_media_optimization extends WP_Widget
{
	/**
	* Declares the ilike_social_media_optimization class.
	*
	*/
	function ilike_social_media_optimization(){
		$widget_ops = array('classname' => 'widget_ilike_social_media_optimization', 'description' => __( "With iLike Social Media Optimization (SMO) for Wordpress, you can turn on and customize many social network profile buttons which power by AddThis.com but with slight enhanced iLikeiPlus feature (which can be enabled and disabled as well) to let your earn more traffic for your social profile. The standard buttons will show Facebook, Google+, Pinterest, and Twitter button. If you need to customize the buttons you can register free account at AddThis.com to customise and fill up your AddThis profile in this plugin setting.") );
		$control_ops = array('width' => 310, 'height' => 220);
		$this->WP_Widget('ilike_social_media_optimization', __('iLike Social Media Optimization'), $widget_ops, $control_ops);
	}
	
	/**
	* Displays the Widget
	*
	*/
	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'iLike Social Media Optimization' : $instance['title']);
		
		$ilikeStyle = empty($instance['ilikeStyle']) ? '1' : $instance['ilikeStyle'];
		$enableiLike = empty($instance['enableiLike']) ? 'no' : $instance['enableiLike'];
		$ilikeid = empty($instance['ilikeid']) ? '' : $instance['ilikeid'];
		$addThisPubId = empty($instance['addThisPubId']) ? '' : $instance['addThisPubId'];
		
		$siteurl = get_option('siteurl');
		$img_url = $siteurl . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/images';
		
		# Before the widget
		echo $before_widget;
		
		# The title
		if ( $title )
			echo $before_title . $title . $after_title;
	
		switch ($ilikeStyle) {
		case '1':
		  $htmlStyle = "
		  <!-- AddThis Button BEGIN -->
			<div class=\"addthis_toolbox addthis_default_style \">
			<a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
			<a class=\"addthis_button_tweet\"></a>
			<a class=\"addthis_button_pinterest_pinit\"></a>
			<a class=\"addthis_counter addthis_pill_style\"></a>";
			if ($enableiLike == "yes") {
				$htmlStyle .= "&nbsp;&nbsp;<a title=\"Bookmark Me and Earn coins for your social profile (Facebook, Twitter, Google+)\" href=\"http://ilikeiplus.com/index.php?ref=$ilikeid\" target=\"_blank\"><img border=\"0\" src=\"$img_url/iLike-Hoz-1.png\"></a>";
			}
			$htmlStyle .= "</div>
			<script type=\"text/javascript\" src=\"http://s7.addthis.com/js/250/addthis_widget.js#pubid=$addThisPubId\"></script>
			<!-- AddThis Button END -->";		
			break;
			
		case '2':
			$htmlStyle = "
			<!-- AddThis Button BEGIN -->
			<div class=\"addthis_toolbox addthis_default_style addthis_32x32_style\">
			<a class=\"addthis_button_preferred_1\"></a>
			<a class=\"addthis_button_preferred_2\"></a>
			<a class=\"addthis_button_preferred_3\"></a>
			<a class=\"addthis_button_preferred_4\"></a>
			<a class=\"addthis_button_compact\"></a>";
			if ($enableiLike == "yes") {
				$htmlStyle .= "&nbsp;&nbsp;<a title=\"Bookmark Me and Earn coins for your social profile (Facebook, Twitter, Google+)\" href=\"http://ilikeiplus.com/index.php?ref=$ilikeid\" target=\"_blank\"><img border=\"0\" src=\"$img_url/iLike-Hoz-2.png\"></a>";
			}
			$htmlStyle .= "</div>
			<script type=\"text/javascript\" src=\"http://s7.addthis.com/js/250/addthis_widget.js#pubid=$addThisPubId\"></script>
			<!-- AddThis Button END -->";		
			break;
			
		case '3':
			$htmlStyle = "
			<!-- AddThis Button BEGIN -->
			<div class=\"addthis_toolbox addthis_default_style \">
			<a class=\"addthis_button_preferred_1\"></a>
			<a class=\"addthis_button_preferred_2\"></a>
			<a class=\"addthis_button_preferred_3\"></a>
			<a class=\"addthis_button_preferred_4\"></a>
			<a class=\"addthis_button_compact\"></a>
			<a class=\"addthis_counter addthis_bubble_style\"></a>";
			if ($enableiLike == "yes") {
				$htmlStyle .= "&nbsp;&nbsp;<a title=\"Bookmark Me and Earn coins for your social profile (Facebook, Twitter, Google+)\" href=\"http://ilikeiplus.com/index.php?ref=$ilikeid\" target=\"_blank\"><img border=\"0\" src=\"$img_url/iLike-Hoz-3.png\"></a>";
			}
			$htmlStyle .= "</div>
			<script type=\"text/javascript\" src=\"http://s7.addthis.com/js/250/addthis_widget.js#pubid=$addThisPubId\"></script>
			<!-- AddThis Button END -->";		
			break;
			
		case '4':
			$htmlStyle = "
			<!-- AddThis Button BEGIN -->
			<div class=\"addthis_toolbox addthis_floating_style addthis_counter_style\" style=\"left:50px;top:50px;\">
			<a class=\"addthis_button_facebook_like\" fb:like:layout=\"box_count\"></a>
			<a class=\"addthis_button_tweet\" tw:count=\"vertical\"></a>
			<a class=\"addthis_button_google_plusone\" g:plusone:size=\"tall\"></a>
			<a class=\"addthis_counter\"></a>";
			if ($enableiLike == "yes") {
				$htmlStyle .= "&nbsp;&nbsp;<a title=\"Bookmark Me and Earn coins for your social profile (Facebook, Twitter, Google+)\" href=\"http://ilikeiplus.com/index.php?ref=$ilikeid\" target=\"_blank\"><img border=\"0\" src=\"$img_url/iLike-Ver-1.png\"></a>";
			}
			$htmlStyle .= "</div>
			<script type=\"text/javascript\" src=\"http://s7.addthis.com/js/250/addthis_widget.js#pubid=$addThisPubId\"></script>
			<!-- AddThis Button END -->";		
			break;
			
		case '5':
			$htmlStyle = "
		 <!-- AddThis Button BEGIN -->
			<div class=\"addthis_toolbox addthis_floating_style addthis_32x32_style\" style=\"left:50px;top:50px;\">
			<a class=\"addthis_button_preferred_1\"></a>
			<a class=\"addthis_button_preferred_2\"></a>
			<a class=\"addthis_button_preferred_3\"></a>
			<a class=\"addthis_button_preferred_4\">";
			if ($enableiLike == "yes") {
				$htmlStyle .= "&nbsp;&nbsp;<a title=\"Bookmark Me and Earn coins for your social profile (Facebook, Twitter, Google+)\" href=\"http://ilikeiplus.com/index.php?ref=$ilikeid\" target=\"_blank\"><img border=\"0\" src=\"$img_url/iLike-Ver-2.png\"></a>";
			}
			$htmlStyle .= "</div>
			<script type=\"text/javascript\" src=\"http://s7.addthis.com/js/250/addthis_widget.js#pubid=$addThisPubId\"></script>
			<!-- AddThis Button END -->";		
			break;
			
		case '6':
			$htmlStyle = "
			<!-- AddThis Button BEGIN -->
				<div class=\"addthis_toolbox addthis_floating_style addthis_16x16_style\" style=\"left:50px;top:50px;\">
				<a class=\"addthis_button_preferred_1\"></a>
				<a class=\"addthis_button_preferred_2\"></a>
				<a class=\"addthis_button_preferred_3\"></a>
				<a class=\"addthis_button_preferred_4\"></a>
				<a class=\"addthis_button_compact\"></a>";
			if ($enableiLike == "yes") {
				$htmlStyle .= "&nbsp;&nbsp;<a title=\"Bookmark Me and Earn coins for your social profile (Facebook, Twitter, Google+)\" href=\"http://ilikeiplus.com/index.php?ref=$ilikeid\" target=\"_blank\"><img border=\"0\" src=\"$img_url/iLike-Ver-3.png\"></a>";
			}
			$htmlStyle .= "</div>
			<script type=\"text/javascript\" src=\"http://s7.addthis.com/js/250/addthis_widget.js#pubid=$addThisPubId\"></script>
			<!-- AddThis Button END -->";		
			break;		

		} 
		echo $html;
		echo $htmlStyle;

		# After the widget
		echo $after_widget;
	}
	
	/**
	* Saves the widgets settings.
	*
	*/
	function update($new_instance, $old_instance){
	
		$ilikeStyle = empty($instance['ilikeStyle']) ? '1' : $instance['ilikeStyle'];
		$enableiLike = empty($instance['enableiLike']) ? 'no' : $instance['enableiLike'];
		$ilikeid = empty($instance['ilikeid']) ? '1' : $instance['ilikeid'];
		$addThisPubId = empty($instance['addThisPubId']) ? '' : $instance['addThisPubId'];
		
		$instance = $old_instance;
		$instance['title'] = strip_tags(stripslashes($new_instance['title']));
		$instance['ilikeStyle'] = strip_tags(stripslashes($new_instance['ilikeStyle']));
		$instance['enableiLike'] = strip_tags(stripslashes($new_instance['enableiLike']));
		$instance['ilikeid'] = strip_tags(stripslashes($new_instance['ilikeid']));
		$instance['addThisPubId'] = strip_tags(stripslashes($new_instance['addThisPubId']));
		
	return $instance;
	}
	
	/**
	* Creates the edit form for the widget.
	*
	*/
	function form($instance){
		//Defaults
		$instance = wp_parse_args( (array) $instance, array('title'=>'iLike Social Media Optimization', 'ilikeStyle'=>'1', 'enableiLike'=>'yes', 'ilikeid'=>'') );
		
		
		$title = htmlspecialchars($instance['title']);		
		$ilikeStyle = empty($instance['ilikeStyle']) ? '1' : $instance['ilikeStyle'];
		$enableiLike = empty($instance['enableiLike']) ? 'yes' : $instance['enableiLike'];
		$ilikeid = empty($instance['ilikeid']) ? '1' : $instance['ilikeid'];
		$addThisPubId = empty($instance['addThisPubId']) ? '' : $instance['addThisPubId'];
				
		# Output the options
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('title') . '">' . __('Title:') . ' <input style="width: 250px;" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></label></p>';
		
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('ilikeStyle') . '">' . __('Buttons Style:') . ' <select name="' . $this->get_field_name('ilikeStyle')  . '" id="' . $this->get_field_id('ilikeStyle')  . '">"';
?>
		<option value="1" <?php if ($ilikeStyle == '1') echo 'selected="yes"'; ?> >Horizontal 1</option>
		<option value="2" <?php if ($ilikeStyle == '2') echo 'selected="yes"'; ?> >Horizontal 2</option>			 		
		<option value="3" <?php if ($ilikeStyle == '3') echo 'selected="yes"'; ?> >Horizontal 3</option>			 		
		
		<option value="4" <?php if ($ilikeStyle == '4') echo 'selected="yes"'; ?> >Vertical 1</option>			 		
		<option value="5" <?php if ($ilikeStyle == '5') echo 'selected="yes"'; ?> >Vertical 2</option>			 		
		<option value="6" <?php if ($ilikeStyle == '6') echo 'selected="yes"'; ?> >Vertical 3</option>			 		
		
<?php
		echo '</select></label>';
		
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('enableiLike') . '">' . __('Increase Social Profile Traffic with iLikeiPlus?') . ' <select name="' . $this->get_field_name('enableiLike')  . '" id="' . $this->get_field_id('enableiLike')  . '">"';
?>
		<option value="yes" <?php if ($enableiLike == 'yes') echo 'selected="yes"'; ?> >Yes</option>
		<option value="no" <?php if ($enableiLike == 'no') echo 'selected="yes"'; ?> >No</option>			 		
<?php
		echo '</select></label>';
		
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('ilikeid') . '">' . __('iLikeiPlus Id:') . ' <input style="width: 150px;" id="' . $this->get_field_id('ilikeid') . '" name="' . $this->get_field_name('ilikeid') . '" type="text" value="' . $ilikeid . '" /></label></p>';
		
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('addThisPubId') . '">' . __('AddThis Pub Id:') . ' <input style="width: 150px;" id="' . $this->get_field_id('addThisPubId') . '" name="' . $this->get_field_name('addThisPubId') . '" type="text" value="' . $addThisPubId . '" /></label></p>';
	
	} //end of form

}// END class
	
	/**
	* Register  widget.
	*
	* Calls 'widgets_init' action after widget has been registered.
	*/
	function ilike_social_media_optimizationInit() {
		register_widget('ilike_social_media_optimization');
	}	
		
	
	add_action('widgets_init', 'ilike_social_media_optimizationInit');
	
		
?>