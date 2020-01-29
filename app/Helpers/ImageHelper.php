<?php
namespace App\Helpers;
use App\Helpers\GravatarHelper;
use App\User;
/*
*gravatar helper
*/
class ImageHelper{
// static bola objcreate na korai excess kora jaba method & property ::deya 
public static function getUserImage($id){
	$user =User::find($id);
	$avatar_url = "";
	if(!is_null($user)){
		if ($user -> avatar ==null) {
			//return him gravatar image
			//static bola avaba use korta partachi .noila obj create kora lagto 17@10.20
			if (GravatarHelper::validate_gravatar($user -> email)) {
				$avatar_url =GravatarHelper::gravatar_image($user ->email,100);
			}else {
				// when there is no image
				$avatar_url = url('images/defaults/demo.png');
			}
		}else {
			//return that image
			$avatar_url = url('images/users/'.$user -> avatar);
		}
	}else {
		// return redirect('/');
	}
	return $avatar_url;
}
}