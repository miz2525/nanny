<?php
namespace App\Services;

use App\Models\Nanny;
use App\Providers\AppServiceProvider;
use stdClass;

class NannyService {

    public static function storeUpdate($nanny, $nanny_id=0){
        $result = new stdClass();
        $result->id = 0;
        $result->type = 'error';
        $result->message = AppServiceProvider::ERROR_MESSAGE;
        try {
            $lang = array();

            $languagesArray = $nanny['languages'];
            foreach ($languagesArray['language_id'] as $key => $value) {
                if($languagesArray['language_id'][$key]!=null){
                    $language = new stdClass();
                    $language->id = $languagesArray['language_id'][$key];
                    $language->level = $languagesArray['language_level'][$key];
    
                    $lang[] = $language;
                }
            }

            $nanny['languages'] = json_encode($lang);
            if(isset($nanny['age_group_experience'])){
                $nanny['age_group_experience'] = implode(',', $nanny['age_group_experience']);
            }
            
            if(isset($nanny['child_cares'])){
                $nanny['child_cares'] = implode(',', $nanny['child_cares']);
            }else{
                $nanny['child_cares'] = '';
            }
            
            if(isset($nanny['housekeeping'])){
                $nanny['housekeeping'] = implode(',', $nanny['housekeeping']);
            }else{
                $nanny['housekeeping'] = '';
            }
            
            if(isset($nanny['cooking_meal_prep'])){
                $nanny['cooking_meal_prep'] = implode(',', $nanny['cooking_meal_prep']);
            }else{
                $nanny['cooking_meal_prep'] = '';
            }
            
            $findNanny = Nanny::find($nanny_id);
            if($findNanny){
                $findNanny->update($nanny);
                $result->id = $findNanny->id;
                $result->message = 'Nanny '.AppServiceProvider::UPDATED_SUCCESS_MESSAGE;
            }else{
                $nanny = Nanny::create($nanny);
                $result->id = $nanny->id;
                $result->message = 'Nanny '.AppServiceProvider::SUCCESS_MESSAGE;
            }

            
            $result->type = 'success';

            return $result;

        } catch (\Exception $exception) {
            logErrorMessage("{$exception->getMessage()} in {$exception->getFile()}");
            return $result;
        }
    }
}
