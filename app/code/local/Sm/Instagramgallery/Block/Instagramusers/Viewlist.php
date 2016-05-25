<?php
/**
 * Created by PhpStorm.
 * User: Vu Van Phan
 * Date: 20-07-2015
 * Time: 0:42
 */
class Sm_Instagramgallery_Block_Instagramusers_Viewlist extends Mage_Core_Block_Abstract
{
	public function __construct()
	{
		parent::_construct();
	}

	protected function _toHtml()
	{
		$output  = '';
		$helper = Mage::helper('instagramgallery');
		if($helper->enabledInstagramgallery())
		{
			$users_id = $helper->usersInstagram();
			$access_token = (string)$helper->accessToken();

			$title = $helper->titleInstagram();
			$limit_image = $helper->limitImage();

			/* For devices screen width than 1200px */
			$num_cols = $helper->numcolsScreen1200() ? $helper->numcolsScreen1200() : '3';

			/* For devices screen width from 992px to 1199px */
			$num_cols1 = $helper->numcolsScreen992() ? $helper->numcolsScreen992() : '3';

			/* For devices screen width from 768px to 991px */
			$num_cols2 = $helper->numcolsScreen768() ? $helper->numcolsScreen768() : '2';

			/* For devices screen width less than 768px */
			$num_cols3 = $helper->numcolsScreenLesThan768() ? $helper->numcolsScreenLesThan768() : '1';

			$class = "cols{$num_cols} cols1{$num_cols1} cols2{$num_cols2} cols3{$num_cols3} ";

			$output .= "<div class='container_instagramusers' style='width: 100%;height: auto; position: relative; display: inline-block;'>";
			$output .= "<h3 class='title_instagram'>{$title}</h3>";
			$output .= "<div id='divinstagramusers' style='width: 100%;height: auto; position: relative; display: inline-block;'>";
			$output .= $this->getMediaInstagramUsers($users_id, (string)$access_token, $limit_image, $class);
			$output .= "</div>";
			$output .= "</div>";
		}
		return $output;
	}

	public function getMediaInstagramUsers($users_id, $access_token, $limit_image, $class)
	{
		return "<script type='text/javascript'>
			jQuery(document).ready(function ($) {
				var users_id = $users_id;
				var access_token = '$access_token';
				var limit_image = $limit_image;
				var class_ins = '$class';
				var url;
				url = 'https://api.instagram.com/v1/users/'+users_id+'/media/recent?access_token='+access_token;
				$.ajax({
					method: 'GET',
					dataType: 'jsonp',
					cache: false,
					url: url,
					success: function(response){
					if (response.data && (response.data.length > 0))
					{
						if (response.data.length >= limit_image)
						{
							for (var i = 0; i < limit_image; i++)
							{
								$('#divinstagramusers').append('<div class=\"instagram_users img_users '+class_ins+'\"><img id=\"'+response.data[i].id+'\" class=\"image_users\" src=\"'+ response.data[i].images.low_resolution.url +'\" alt=\"\" /></div>');
							}
						}
						else
						{
							for (var i = 0; i < response.data.length; i++)
							{
								$('#divinstagramusers').append('<div class=\"instagram_users img_users '+class_ins+'\"><img id=\"'+response.data[i].id+'\" class=\"image_users\" src=\"'+ response.data[i].images.low_resolution.url +'\" alt=\"\" /></div>');
							}
						}
					}
					else
					{
						$('#divinstagramusers').append('<p class=\"no_image\">Instagram Users dont have image</p>');
					}
				},
				error: function(response) {
					$('divinstagramusers').insert('Error');
				}
				});
			});
		</script>";
	}
}