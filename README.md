# pure_php_scratch_security
covering the fundamental security logics using pure php

# file extension to care about
php coded files should be with php extension, otherwise these will not compiled and will be visible for the contents

# xss attack
loading the data from the database back should be escape harmful chars relating with xss.  
In this sample project, I use `htmlspecialchars`

# password hashing
using the buildin php funtion `password_hash` and verifying back `password_verify` . 
eg. password_hash('password',PASSWORD_DEFAULT,['cost' => 10]);

# Hiding dir listing
using .htaccess to forbid the access of viewing our dirs . 
eg. Options -Indexes

# Httponly cookies
store cookies with httponly so that client side can't get any cookies data. Only server side can get . 
Normally should not store any `plain text value` cookies.

# CSRF
attackers can emit an ajax request to do pretty problematic issues . 
putting a session token like a middlware can prevent this kind of issues . 
I generate a session token, adding in form and make conditional statement it matches the token or not after submitting the form . 
I use `bin2hex(random_bytes(int))` for generating the random token . For < php 7 , use `openssl_random_pseudo_bytes`

# SQL Injection
attackers can simply make sql injection attack very easily and vice versa can easily prevent using `prepare` statement . 
Example . 
$connection = $db->prepare("query = :param"). Then execute . 
$connection->execute([ . 
  'param' => $value . 
]);

# Error Reporting
You can control the debugging reports easily in `php.ini`.
If you dont want to manage php.ini. These below two statements can be used . 
`ini_set('display_errors','Off')` . 
`error_reporting(0)`




