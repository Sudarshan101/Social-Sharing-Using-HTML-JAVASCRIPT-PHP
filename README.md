# Social-Sharing-Using-HTML-JAVASCRIPT-PHP
Simple and easy code for social sharing. you can use simply links in href if you want to set static or if you want to set dynamic links then here also available javascript code and PHP code also. Example code also available in the git link Simply copy and past code in your page.

#PHP Funtion 

<pre>
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
</pre>

# Javascript Function
<pre>
  function socialsharingbuttons(social, params){
			var button= '';
			switch (social) {
				case 'facebook':
					button='http://www.facebook.com/share.php?u='+params.url;
					break;
				case 'twitter':
					button='https://twitter.com/share?url='+params.url+'&amp;text='+params.title+'&amp;hashtags='+params.tags;
					break;
				case 'google-plus':
					button='https://plus.google.com/share?url='+params.url;
					break;
				case 'whatsapp':
					if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
						button='whatsapp://send?text='+params.url;
					}else{
						button='https://web.whatsapp.com/send?text='+params.url;
					}
					break;
				case 'linkedin':
					button='http://www.linkedin.com/shareArticle?mini=true&amp;url='+params.url;
					break;
				default:
					break;
			}
			return button; 
		}
</pre>
