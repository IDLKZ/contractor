<?php


namespace App\Traitor;


trait UploadModel
{

    static function add($request){
       $model = new static();
       $model->fill($request);
       return $model->save();

    }

}
