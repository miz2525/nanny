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
                $language = new stdClass();
                $language->id = $languagesArray['language_id'][$key];
                $language->level = $languagesArray['language_level'][$key];

                $lang[] = $language;
            }

            $nanny['languages'] = json_encode($lang);
            $nanny['age_group_experience'] = implode(',', $nanny['age_group_experience']);
            $nanny['skills'] = implode(',', $nanny['skills']);
            $nanny['needs_support_with'] = implode(',', $nanny['needs_support_with']);
            
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
