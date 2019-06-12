<?php

class WeekAdvice
{
    public function getWeekData()
    {
        if (function_exists('curl_init') == false) {
            return false;
        }

        $context = Context::getContext();
        $iso_code = Language::getIsoById($context->language->id);
        $url = 'https://api-addons.prestashop.com/request/?method=week_advice&iso_lang='.$iso_code;

        $response = Tools::file_get_contents($url);

        return Tools::jsonDecode($response);
    }
}
