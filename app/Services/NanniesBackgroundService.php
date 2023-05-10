<?php
namespace App\Services;

use App\Models\NanniesBackground;
use App\Providers\AppServiceProvider;
use stdClass;

class NanniesBackgroundService {

    public static function storeUpdate($nanny_id, $backgrounds){
        $result = new stdClass();
        $result->id = 0;
        $result->type = 'error';
        $result->message = AppServiceProvider::ERROR_MESSAGE;
        try {
            foreach ($backgrounds as $key => $row) {
                $row['background_type'] = $key;
                $row['nanny_id'] = $nanny_id;

                $nannyBackground = NanniesBackground::where(['nanny_id'=>$row['nanny_id'], 'background_type'=>$row['background_type']])->first();
                
                if($nannyBackground){
                    $nannyBackground->update($row);
                    $result->message = 'Nanny Backgrounds '.AppServiceProvider::UPDATED_SUCCESS_MESSAGE;
                }else{
                    NanniesBackground::create($row);
                    $result->message = 'Nanny Backgrounds '.AppServiceProvider::SUCCESS_MESSAGE;
                }
            }

            $result->id = 0;
            $result->type = 'success';

            return $result;

        } catch (\Exception $exception) {
            dd($exception);
            logErrorMessage("{$exception->getMessage()} in {$exception->getFile()}");
            return $result;
        }
    }
}
