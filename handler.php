<?php

require_once("./functions/Bitrix24.php");
$b24 = new Bitrix24;

$hook = "https://gianpierree2.bitrix24.es/rest/1/nihvsjtpzestwb94";

$leadId = $_REQUEST["data"]["FIELDS"]["ID"];
$leadData = $b24->leadGet($hook, $leadId);

writeToLog($leadData, 'Log');


/**
 * Write data to log file.
 *
 * @param mixed $data
 * @param string $title
 *
 * @return bool
 */
function writeToLog($data, $title = '')
{
    $log = "\n------------------------\n";
    $log .= date("Y.m.d G:i:s") . "\n";
    $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
    $log .= print_r($data, 1);
    $log .= "\n------------------------\n";
    file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
    return true;
}