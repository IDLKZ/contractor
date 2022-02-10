<?php


namespace App\Traitor;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadModel
{

    static function add($request){
       $model = new static();
       $model->fill($request);
       return $model->save();
    }

    public function edit($fields, $path = null)
    {
        if($path !== null){
            $fields[$path] = $this->$path;
        }
        $this->fill($fields);
        $this->save();
    }

    public function remove($path)
    {
        $this->removeFile($path);
        $this->delete();
    }

    public function removeFile($path)
    {
        if($this->$path != null)
        {
            if (Storage::exists('uploads/' . $this->$path)){
                Storage::delete('uploads/' . $this->$path);
            }
        }
    }

    public function uploadFile($file, $path)
    {
        if($file == null) { return; }
        $this->removeFile($path);
        $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $filename);
        $this->$path = $filename;
        $this->save();
    }

    public function getFile($path)
    {
        if($this->$path == null)
        {
            return '/images/no-image.png';
        }
        else{
            return '/uploads/' . $this->$path;
        }

    }


}
