<?php
namespace App\Services;

use App\Models\City;
use App\Models\Country;
use App\Models\Language;
use Illuminate\Support\Facades\Cache;

class HelperService {

    public static function StoreCountriesCache(){
        if(!Cache::get('countries')){
            Cache::store('file')->put('countries', Country::all());
        }
    }

    public static function StoreCitiesCache(){
        if(!Cache::get('cities')){
            Cache::store('file')->put('cities', City::all());
        }
    }

    public static function StoreLanguagesCache(){
        if(!Cache::get('languages')){
            Cache::store('file')->put('languages', Language::all());
        }
    }

    public static function GetCountriesCache(){
        if(!Cache::get('countries')){
            Cache::store('file')->put('countries', Country::all());
        }
        return Cache::get('countries');
    }

    public static function GetCitiesCache(){
        if(!Cache::get('cities')){
            Cache::store('file')->put('cities', City::all());
        }
        return Cache::get('cities');
    }

    public static function GetLanguagesCache(){
        if(!Cache::get('languages')){
            Cache::store('file')->put('languages', Language::all());
        }
        return Cache::get('languages');
    }

    public static function logErrorMessage($logMessage)
    {
        app('log')->error($logMessage);
    }

    public static function GetNannyStatusSpan($type){
        $span = '<span class="badge badge-outline-success">Active</span>';
        switch ($type) {
            case 'active':
                $span = '<span class="badge badge-outline-success">Active</span>';
                break;
            
            case 'not_active':
                $span = '<span class="badge badge-outline-secondary">Not active</span>';
                break;

            case 'under_review':
                $span = '<span class="badge badge-outline-warning">Under review</span>';
                break;
            
            default:
                $span = '<span class="badge badge-outline-success">Active</span>';
                break;
        }

        return $span;
    }

    public static function GetNannyBackgroundByKey($key, $backgrounds){
        $backgrounds = $backgrounds->toArray();
        $findBackgroundKey = array_search($key, array_column($backgrounds, 'background_type'));
        if($findBackgroundKey){
            return $backgrounds[$findBackgroundKey];
        }
        return false;
    }
}
