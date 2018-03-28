<!DOCTYPE html>
<?php
	function socialsharingbuttons($social='', $params=''){
		$button= '';
		switch ($social) {
			case 'facebook':
			$button='http://www.facebook.com/share.php?u='. $params['url'];
			break;
			case 'twitter':
				$button='https://twitter.com/share?url='.$params['url'].'&amp;text='. $params['title'] .'&amp;hashtags='. $params['tags'];
				break;
			case 'google-plus':
				$button='https://plus.google.com/share?url='. $params['url'];
				break;
			case 'whatsapp':
				if(preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])){
					$button='whatsapp://send?text='. $params['url'];
				}else{
					$button='https://web.whatsapp.com/send?text='. $params['url'];
				}
				break;
			case 'linkedin':
				$button='http://www.linkedin.com/shareArticle?mini=true&amp;url='. $params['url'];
				break;
			default:
				break;
		}
		return $button;      
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<h1>Social Sharing using PHP</h1>
		
		<p>Here is the simple php function just use it in you page</p>
		<p><b>Replace "YOUR_URL", "YOUR_TITLE", "YOUR_HASHTAGS" with your content</b></p>

		<div>
			<?php
				$params=array(
					  'url'=>'YOUR_URL',
					  'title'=>'YOUR_TITLE',
					  'tags'=>'YOUR_HASHTAGS'
				);			
			?>
			<a href="<?php echo socialsharingbuttons('facebook', $params); ?>" target="_blank">Facebook</a> | 
			<a href="<?php echo socialsharingbuttons('twitter', $params); ?>" target="_blank">Twitter</a> | 
			<a href="<?php echo socialsharingbuttons('whatsapp', $params); ?>" target="_blank">Whatsapp</a> | 
			<a href="<?php echo socialsharingbuttons('google-plus', $params); ?>" target="_blank">Google Plus</a> | 
			<a href="<?php echo socialsharingbuttons('linkedin', $params); ?>" target="_blank">Linkedin</a> | 
		</div>
	</body>
</html>