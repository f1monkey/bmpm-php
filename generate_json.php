<?php

$type = 'gen';
$options = getopt('t::');

if (isset($options['t']) && $options['t'] !== null) {
    $type = $options['t'];
}
$_GET['type'] = $type;

const DIR_PREFIX = "bmpm/";

$files = glob(DIR_PREFIX . "$type/*.php");

if (!file_exists(DIR_PREFIX . $type)) {
    die(sprintf('invalid type "%s"', $type));
}

require_once "bmpm/phoneticutils.php";
foreach ($files as $file) {
    if (($file === DIR_PREFIX ."$type/languagenames1.php") || ($file === DIR_PREFIX ."$type/languagenames2.php")) {
        continue;
    }
    require_once($file);
}
$data = array(
    'languages' => $languages,
    'approx' => $approx,
    'approxCommon' => $approxCommon,
    'exact' => $exact,
    'exactCommon' => $exactCommon,
    'hebrewCommon' => $hebrewCommon,
    'languageRules' => $languageRules,
    'rules' => $rules,
);

file_put_contents("$type.json", json_encode($data));
