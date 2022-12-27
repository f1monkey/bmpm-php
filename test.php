<?php

$type = 'gen';
$options = getopt('t::n::l::');

if (isset($options['t']) && $options['t'] !== null) {
    $type = $options['t'];
    if (!$type) {
        die('-t option must be provided');
    }
}

$_GET['type'] = $type;

if (!isset($options['n']) || $options['n'] === null || $options['n'] === "") {
    die('-n option must be provided');
}
$name = $options['n'];

$languageName = "";
if (isset($options['l']) && $options['l'] !== null && $options['l'] !== "") {
    $languageName = $options['l'];
}



const DIR_PREFIX = 'bmpm' . DIRECTORY_SEPARATOR;

$files = glob(DIR_PREFIX . "$type/*.php");

if (!file_exists(DIR_PREFIX . $type)) {
    die(sprintf('invalid type "%s"', $type));
}

require_once DIR_PREFIX . "phoneticengine.php";

require_once DIR_PREFIX . "phoneticutils.php";
require_once DIR_PREFIX . "dmsoundex.php";


foreach ($files as $file) {
    if (($file === DIR_PREFIX ."$type/languagenames1.php") || ($file === DIR_PREFIX ."$type/languagenames2.php")) {
        continue;
    }
    require_once($file);
}

if ($languageName == "auto" || $languageName == "") {
    $languageCode2 = Language_UTF8($name, $languageRules);
  } else {
    $languageCode = LanguageCode($languageName, $languages);
    $languageCode2 = $languageCode;
  }
$result2 = Phonetic_UTF8($name, $rules[LanguageIndexFromCode($languageCode2, $languages)], $approxCommon,
$approx[LanguageIndexFromCode($languageCode2, $languages)], $languageCode2);
$numbers2 = PhoneticNumbers($result2);
$soundex = soundx_name($name);
echo "$name\t$numbers2\t$soundex\n";

