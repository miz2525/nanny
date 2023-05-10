<?php
namespace App\Services;

use App\Models\NanniesComment;
use App\Providers\AppServiceProvider;
use stdClass;

class NanniesCommentService {

    public static function store($nanny_id, $row){
        $result = new stdClass();
        $result->id = 0;
        $result->type = 'error';
        $result->message = AppServiceProvider::ERROR_MESSAGE;
        try {
            $row = $row->all();
            $row['nanny_id'] = $nanny_id;
            unset($row['_token']);
            NanniesComment::create($row);

            $result->id = 0;
            $result->type = 'success';
            $result->message = 'Comment '.AppServiceProvider::SUCCESS_MESSAGE;

            return $result;

        } catch (\Exception $exception) {
            dd($exception);
            logErrorMessage("{$exception->getMessage()} in {$exception->getFile()}");
            return $result;
        }
    }
}
