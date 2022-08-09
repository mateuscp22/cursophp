<?php
//Cookie
setcookie('user', 'MateusCP', time() + 3600);
setcookie('email', 'mateuscandicocp@gmail.com', time() + 3600);
setcookie('utlima_pesquisa', 'tenis adidas', time() + 3600);

var_dump($_COOKIE);
