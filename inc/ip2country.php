<?php
//Criado por @hackergaucho
//v0.1.0 14jun2021

return function ($ip) {
    require_once __DIR__.'/src/whois.main.php';
    $whois = new Whois();
    $r = $whois->Lookup($ip);
    $country=@$r['regrinfo']['owner']['address']['country'];
    if (!$country) {
        $country=@$r['regrinfo']["network"]['country'];
    }
    if ($country) {
        //ISO 3166-2
        return $country;
    } else {
        return false;
    }
};
