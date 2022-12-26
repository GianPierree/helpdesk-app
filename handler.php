<?php

require_once("./functions/Bitrix24.php");
$b24 = new Bitrix24;

$hook = "https://gianpierree2.bitrix24.es/rest/1/nihvsjtpzestwb94";

writeToLog($_REQUEST, 'Log');

if($_REQUEST["event"] == "ONCRMLEADADD"){
    $leadId = $_REQUEST["data"]["FIELDS"]["ID"];
    $leadData = $b24->leadGet($hook, $leadId);
    writeToLog($leadData, 'Hook creado desde el Módulo de desarrolladores');
}elseif($_REQUEST["document_id"][1] == "CCrmDocumentLead"){
    $leadIdArr = explode("_", $_REQUEST["document_id"][2]);
    $leadId = $leadIdArr[1];
    $leadData = $b24->leadGet($hook, $leadId);
    writeToLog($leadData, 'Hook creado desde un BP');
}

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