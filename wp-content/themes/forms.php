<?php

//ajax send calc form
	add_action('wp_ajax_form3'       , 'send_form3');
	add_action('wp_ajax_nopriv_form3', 'send_form3');

	function send_form3() { 
		$calctel = trim($_POST['calctel']);
		$oemail = trim($_POST['calcemail']);
		$cbig = trim($_POST['classic_big']);
		$csmall = trim($_POST['classic_small']);
		$obig = trim($_POST['original_big']);
		$osmall = trim($_POST['original_small']);


    // Email will be send
    	$to = "svjatoslav.romanjuk@gmail.com"; // Change with your email address
    	$sub = "$oemail from MTV EnergyDrink ЗАКАЗ"; // You can define email subject
    // HTML Elements for Email Body
    	$body = <<<EOD
    		<strong>Заказ</strong> <br>
    		<strong>Телефон:</strong> $calctel <br>
    		<strong>Email:</strong> <a href="mailto:$oemail?subject=feedback" "email me">$oemail</a> <br> <br>
    		<strong>Classic Big:</strong> $cbig упаковок<br>
    		<strong>Classic Small:</strong> $csmall упаковок<br>
    		<strong>Original Big:</strong> $obig упаковок<br>
    		<strong>Original Small:</strong> $osmall упаковок<br>
EOD;
	//Must end on first column
    
    	$headers = "From: <$email>\r\n";
   		$headers .= 'MIME-Version: 1.0' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // PHP email sender
   		mail($to, $sub, $body, $headers);
		wp_die();
	}

//ajax send map form
	add_action('wp_ajax_form2'       , 'send_form2');
	add_action('wp_ajax_nopriv_form2', 'send_form2');

	function send_form2() {
        $pcity = trim($_POST['pcity']);
    	$name = trim($_POST['pname']);
    	$ptel = trim($_POST['ptel']);
    	$email = trim($_POST['pemail']);

    // Email will be send
    	$to = "svjatoslav.romanjuk@gmail.com"; // Change with your email address
    	$sub = "$name from MTV EnergyDrink"; // You can define email subject
    // HTML Elements for Email Body
    	$body = <<<EOD
    		<strong>Стать партнером</strong> <br>
            <strong>Город:</strong> $pcity <br>
    		<strong>Имя:</strong> $name <br>
    		<strong>Телефон:</strong> $ptel <br>
    		<strong>Email:</strong> <a href="mailto:$email?subject=feedback" "email me">$email</a> <br> <br>
EOD;
	//Must end on first column
    
    	$headers = "From: $name <$email>\r\n";
    	$headers .= 'MIME-Version: 1.0' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // PHP email sender
    	mail($to, $sub, $body, $headers);
	}

//ajax send contacts form
	add_action('wp_ajax_form'       , 'send_form');
	add_action('wp_ajax_nopriv_form', 'send_form');

	function send_form() {
   		$select = trim($_POST['sel']);
		$name = trim($_POST['name']);
		$fname = trim($_POST['full_name']);
		$email = trim($_POST['email']);
		$tel = trim($_POST['tel']);
		$message = trim($_POST['message']);
		$what = 'nothing';
			if ($select == 'become') {
    			$what = 'Стать региональным представителем';
			}
			elseif ($select == 'opt') {
    			$what = 'Связаться по вопросам опта';
			}
			elseif ($select == 'adv') {
    			$what = 'Связаться по вопросам рекламы';
			}
			elseif ($select == 'idea') {
    			$what = 'Предложить идею';
			}

    // Email will be send
    	$to = "svjatoslav.romanjuk@gmail.com"; // Change with your email address
    	$sub = "$name from MTV EnergyDrink"; // You can define email subject
    // HTML Elements for Email Body
    	$body = <<<EOD
    		<strong>Вы хотите:</strong> $what <br>
    		<strong>Компания:</strong> $name <br>
    		<strong>Ваше имя:</strong> $fname <br>
    		<strong>Email:</strong> <a href="mailto:$email?subject=feedback" "email me">$email</a> <br> <br>
    		<strong>Телефон:</strong> $tel <br>
    		<strong>Сообщение:</strong> $message <br>
EOD;
	//Must end on first column
    
    	$headers = "From: $name <$email>\r\n";
    	$headers .= 'MIME-Version: 1.0' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // PHP email sender
    	mail($to, $sub, $body, $headers);
   }

?>