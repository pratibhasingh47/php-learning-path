<?php

$pwd = "Pratibha";
$options = [
    'cost' =>12
];

$hashpwd = password_hash($pwd,PASSWORD_BCRYPT,$options);

$pwdLogin = "Pratibha";
// password_verify($pwdLogin,$hashpwd);

if(password_verify($pwdLogin,$hashpwd)){
    echo "They are the same";
}
else{
    echo "they are not same";
}