<?php
	$users = array(
						"login;password-user",
						"medik;123",
						"test;123456",
						"start;12",
					);
	if(isset($_POST['send-param'])) {
		$user_name = trim(strip_tags($_POST['user_name']));
		$user_password = trim(strip_tags($_POST['user_password']));
		if(!empty($user_name) && !empty($user_password)) {
			$result = "";
		
		for($i = 0; $i < count($users); $i++) {
			$info = explode(";",$users[$i]);
			if(
				$info[0] == $user_name &&
				$user_password == $info[1]
				) {
				$result = "Вы вошли как: <strong>".$user_name."<br>";
				break;
			}
		}
		if(!empty($result)) {
			echo $result;
		}
		else {
			echo "Ошибка при входе!";
		}

	}
	else {
		echo 'Нет запроса!';
	}
}
?>
<a href="http://localhost/AutoLineX/Operators/23_get_post_lesson_20/index.html">home</a>