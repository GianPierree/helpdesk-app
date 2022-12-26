<?php
class Bitrix24 {
    function leadGet($hook, $id){
        $url0 = "$hook/crm.lead.get.json?ID=$id";

        $ch0 = curl_init();
        curl_setopt($ch0, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch0, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch0, CURLOPT_URL, $url0);
        $result0 = curl_exec($ch0);
        curl_close($ch0);
        $arr0 = json_decode($result0, true);

        return $arr0;
    }

    function contactList($hook){
        $url0 = "$hook/crm.contact.list.json";

        $ch0 = curl_init();
        curl_setopt($ch0, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch0, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch0, CURLOPT_URL, $url0);
        $result0 = curl_exec($ch0);
        curl_close($ch0);
        $arr0 = json_decode($result0, true);

        return $arr0;
    }
}