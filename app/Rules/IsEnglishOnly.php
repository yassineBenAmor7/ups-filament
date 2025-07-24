<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use LanguageDetection\Language;

class IsEnglishOnly implements ValidationRule
{
    protected string $detectedLanguage = 'unknown';

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value)) {
            return;
        }

        $ld = new Language();
        $results = $ld->detect($value)->bestResults()->close();

        if (empty($results)) {
            $fail("Unable to detect language.");
            return;
        }

        $detectedCode = array_key_first($results);

        $mapping = [
            'en' => 'english',
            'fr' => 'french',
            'ar' => 'arabic',
        ];

        $mapped = $mapping[$detectedCode] ?? $detectedCode;
        $this->detectedLanguage = $mapped;

        // Liste de mots anglais typiques sans accent
        $commonEnglishWords = ['hello', 'student', 'school', 'teacher', 'computer', 'language', 'university', 'work', 'morning'];

        if ($mapped !== 'english') {
            foreach ($commonEnglishWords as $word) {
                if (stripos($value, $word) !== false) {
                    return; // Le mot anglais est reconnu manuellement
                }
            }

            $fail("The field must be in English.");
        }
    }
}
