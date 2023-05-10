<?php

use App\Services\HelperService;

/** Storing countries into cache */
if (!function_exists('StoreCountriesCache')) {
    function StoreCountriesCache()
    {
        return HelperService::StoreCountriesCache();
    }
}

/** Storing cities into cache */
if (!function_exists('StoreCitiesCache')) {
    function StoreCitiesCache()
    {
        return HelperService::StoreCitiesCache();
    }
}

/** Storing languages into cache */
if (!function_exists('StoreLanguagesCache')) {
    function StoreLanguagesCache()
    {
        return HelperService::StoreLanguagesCache();
    }
}

/** Getting countries from cache */
if (!function_exists('GetCountriesCache')) {
    function GetCountriesCache()
    {
        return HelperService::GetCountriesCache();
    }
}

/** Getting cities from cache */
if (!function_exists('GetCitiesCache')) {
    function GetCitiesCache()
    {
        return HelperService::GetCitiesCache();
    }
}

/** Getting language from cache */
if (!function_exists('GetLanguagesCache')) {
    function GetLanguagesCache()
    {
        return HelperService::GetLanguagesCache();
    }
}

/** Log Errors */
if (!function_exists('logErrorMessage')) {
    function logErrorMessage($errorLog)
    {
        return HelperService::logErrorMessage($errorLog);
    }
}

/** Get nanny status span */
if (!function_exists('GetNannyStatusSpan')) {
    function GetNannyStatusSpan($type)
    {
        return HelperService::GetNannyStatusSpan($type);
    }
}

/** Get nanny background if exists */
if (!function_exists('GetNannyBackgroundByKey')) {
    function GetNannyBackgroundByKey($key, $backgrounds)
    {
        return HelperService::GetNannyBackgroundByKey($key, $backgrounds);
    }
}
