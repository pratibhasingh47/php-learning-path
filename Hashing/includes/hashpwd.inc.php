<?php

$sensitiveData = "Pratibha";
$salt = bin2hex(random_bytes(16));
$pepper = "AsecretPepperString";

echo "<br>" . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256" , $dataToHash);

echo "<br>" . $hash;

$sensitiveData = "Pratibha";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "AsecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $storedHash;
$verificationhash = hash("sha256" , $dataToHash);

if( $storedHash === $verificationhash ){
    echo "The data are the same";
}
else{
    echo "The data are not the same";
}