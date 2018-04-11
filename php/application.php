<?php
		    $email = "babanjerelo@gmail.com";    

    if (isset($_POST['submit']))
    {
			
        $phoneNumber = "Empty";
		if(isset($_POST['number']))	
			$phoneNumber = $_POST['number']; 
        $message = "<h2>Заказ обратного звонка</h2><hr> 
                    <p><strong>Заказ с сайта: </strong>".$_SERVER['HTTP_HOST']." </p>
                    <p><strong>Имя: </strong>".$_POST['name']." </p>
                    <p><strong>Телефон: </strong>".$phoneNumber."</p>"; 
		
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";        

        mail($email, 'Заказ обратного звонка', $message, $headers);   
    }
?>
<!DOCTYPE html>
<!-- saved from url=(0037)http://m.flying-fairy.org/success.php -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поздравляем! Ваш заказ принят!</title>
    <link type="text/css" rel="stylesheet" href="css/style000.css">
</head>
<body>
<div class="wrap_block_success">
    <div class="block_success">
        <h2>Поздравляем! Ваш заказ принят!</h2>

        <!--p class="order_number">Код заказа: <span></span></p-->

        <p class="success">В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш
            контактный телефон.</p>
    </div>
</div>

</body></html>