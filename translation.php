<?php

if (isset($_POST['submit']) && strlen($_POST['text'])>0) {
    $text = ($_POST['text']);
    $from = $_POST['from'];
    $to = $_POST['to'];
    $url = "https://api.mymemory.translated.net/get?q=" . urlencode($text) . "&langpair={$from}|{$to}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    $responseArray = json_decode($response, true);

    if (isset($responseArray['responseData']['translatedText'])) {
        $translation = $responseArray['responseData']['translatedText'];
    } else {
        $translation = "Translation not found.";
    }
}

$languages = [
    'uz' => 'Uzbek',
    'en' => 'English',
    'ru' => 'Russian',
    'fr' => 'French',
    'de' => 'German',
    'es' => 'Spanish',
    'it' => 'Italian',
    'zh' => 'Chinese',
    'ja' => 'Japanese',
    'ko' => 'Korean',
    'ar' => 'Arabic',
    'hi' => 'Hindi',
    'pt' => 'Portuguese',
    'bn' => 'Bengali',
    'pa' => 'Punjabi',
    'jv' => 'Javanese',
    'ms' => 'Malay',
    'id' => 'Indonesian',
    'tr' => 'Turkish',
    'vi' => 'Vietnamese',
    'th' => 'Thai',
    'nl' => 'Dutch',
    'pl' => 'Polish',
    'uk' => 'Ukrainian',
    'sv' => 'Swedish',
    'no' => 'Norwegian',
    'fi' => 'Finnish',
    'da' => 'Danish',
    'he' => 'Hebrew',
    'el' => 'Greek',
    'cs' => 'Czech',
    'hu' => 'Hungarian',
    'ro' => 'Romanian',
    'bg' => 'Bulgarian',
    'sr' => 'Serbian',
    'hr' => 'Croatian',
    'sk' => 'Slovak',
    'sl' => 'Slovenian',
    'lt' => 'Lithuanian',
    'lv' => 'Latvian',
    'et' => 'Estonian',
    'is' => 'Icelandic',
    'mt' => 'Maltese',
    'ga' => 'Irish',
    // Boshqa tillar qo'shing
];
