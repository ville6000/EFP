<?php
require 'password_strength_indicator.php';

$validator = new PasswordStrengthIndicator();
$validator->passwordValidator('234ddfad');
