<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use LanguageDetection\Language;

class IsArabicOnly implements ValidationRule
{
    protected string $detectedLanguage = 'unknown';

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value)) {
            return;
        }

        // Vérifie s’il contient uniquement des caractères arabes
        if (!preg_match('/^[\p{Arabic}\s0-9،؛؟!.\-_"«»()\'’]+$/u', $value)) {
            $fail("The field must contain only Arabic characters.");
            return;
        }

       
    }
}
