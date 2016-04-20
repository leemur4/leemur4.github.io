<?php

mail('sales@hd78.by', "Заказ обратного звонка!", "Имя: $_POST[name] \nТелефон: $_POST[phone]");
header("Location: /thanks.html");
?>