<?php

use Illuminate\Support\Facades\File;

/**
 * Get languages array from the file.
 *
 * @return mixed
 */
if (!function_exists('app_languages_from_file')) {
    function app_languages_from_file()
    {
        return ['ru', 'ua'];
    }
}

/**
 * Get translatable text.
 * @param string $text
 *
 * @return mixed
 */
if (!function_exists('t')) {
    function t(string $text, $caseInsensitive = true, $lang = false)
    {
        $initialText = $text;
        $text = $caseInsensitive ? mb_strtolower(trim($text)) : $text;
        $textModel = \App\Models\Translate::where('name', $text)->first();

        try {
            if (!$textModel) \App\Models\Translate::create(['name' => $text, 'text' => $initialText]);
        } catch (Exception $exception) {
        }

        return $textModel ? ($lang ? $textModel->getTranslation('text', $lang) : $textModel->text) : $initialText;
    }
}

/**
 * Get the current lang.
 *
 * @return mixed
 */
if (!function_exists('lang')) {
    function lang()
    {
        return str_replace('_', '-', app()->getLocale());
    }
}
