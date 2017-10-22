<?php

class PasswordStrengthIndicator {

    const STATUS_VERY_WEAK = 1;
    const STATUS_WEAK = 2;
    const STATUS_STRONG = 3;
    const STATUS_VERY_STRONG = 4;

    const MIN_LENGTH_FOR_STRONG = 8;

    public function passwordValidator($password) {
        $status = $this->doValidatePassword($password);
        $password_statuses = [
            1 => 'very weak password',
            2 => 'weak password',
            3 => 'strong password',
            4 => 'very strong password'
        ];

        echo "The password '$password' is $password_statuses[$status].";
    }

    public function doValidatePassword($password) {
        $is_min_length_for_strong = strlen(trim($password)) >= self::MIN_LENGTH_FOR_STRONG;

        if (!$is_min_length_for_strong) {
            if (is_numeric($password)) {
                return self::STATUS_VERY_WEAK;
            }

            if ($this->hasNumbersAndLetters($password)) {
                return self::STATUS_WEAK;
            }
        } else {
            $hasSpecialCharacters = $this->hasSpecialCharacters($password);

            if ($this->hasNumbersAndLetters($password) && !$hasSpecialCharacters) {
                return self::STATUS_STRONG;
            }

            if ($hasSpecialCharacters) {
                return self::STATUS_VERY_STRONG;
            }
        }

        return false;
    }

    private function hasNumbersAndLetters($password) {
        return preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $password);
    }

    private function hasSpecialCharacters($password) {
        return preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password);
    }
}

