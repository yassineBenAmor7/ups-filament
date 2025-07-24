<?php


namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use LanguageDetection\Language;

class IsFrenchOnly implements ValidationRule
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

        // Map vers le nom courant
        $mapping = [
            'fr' => 'french',
            'en' => 'english',
            'ar' => 'arabic',
        ];

        $mapped = $mapping[$detectedCode] ?? $detectedCode;
        $this->detectedLanguage = $mapped;

        // Liste de mots typiquement français (sans accents)
        $commonFrenchWords = ['bonjour', 'merci', 'salut', 'oui', 'non', 'fille', 'garcon', 'ecole', 'travail', 'etudiant', 'professeur', 'ville', 'maison'];

        // S'il détecte autre chose que le français
        if ($mapped !== 'french') {
            // Vérifie s’il contient des mots français connus
            foreach ($commonFrenchWords as $word) {
                if (stripos($value, $word) !== false) {
                    return; // Accepté si au moins un mot français est trouvé
                }
            }

            $fail("The field must be in French.");
        }
    }
}

