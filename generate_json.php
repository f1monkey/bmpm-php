<?php

$type = 'gen';
$options = getopt('t::');

if (isset($options['t']) && $options['t'] !== null) {
    $type = $options['t'];
}
$_GET['type'] = $type;

$files = glob($type . '/*.php');

if (!file_exists($type)) {
    die(sprintf('invalid type "%s"', $type));
}

require_once "phoneticutils.php";
foreach ($files as $file) {
    if ($file === "$type/languagenames1.php" || $file == "$type/languagenames2.php") {
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
    'hebrewCommon'=> $hebrewCommon,
    'languageRules' => $languageRules,
    'rules' => $rules,
);

file_put_contents($type . '.json', json_encode($data));
