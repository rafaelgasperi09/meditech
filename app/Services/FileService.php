<?php

namespace App\Services;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileService
{
    function guardarArchivosAjax($archivos,$model,$folder,$docType=null,$docSubType=null){

        if(count($archivos) > 0){
            foreach($archivos as $a)
            {
                $ext =  $a->getClientOriginalExtension();
                $filename = $folder.'_'.$model->id.'_'.str_random(6).".".$ext;
                $upload = Storage::disk('public')->putFileAs($folder,$a,$filename);
                if($upload)
                {
                    $id =$model->id;
                    if(empty($model->id) && isset($model->code)) $id=$model->code;
                    $f = File::create([
                        'user_id'=>current_user()->id,
                        'table_name'=>$folder,
                        'record_id'=>$id,
                        'name'=>$filename,
                        'path'=>$upload,
                        'type'=>$ext,
                        'doc_type'=>$docType,
                        'doc_subtype'=>$docSubType,
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')

                    ]);
                    //Log::debug('File upload:');
                    // Log::debug($f);
                }else{
                    echo "No subio el archivo"."<br/>";
                }
            }
        }
    }

    function guardarArchivos($archivos,$data,$private=false){

        $files_saved=array();
        $record_id = null;

        if(isset($data['type'])) $type = $data['type'];
        if(isset($data['record_id'])) $record_id = $data['record_id'];

        if(count($archivos) > 0){
            foreach($archivos as $a)
            {

                $ext =  $a->getClientOriginalExtension();
                if(isset($data['name'])){
                    $filename = $data['name'].".".$ext;
                }else{
                    $filename = Str::random(10).".".$ext;
                }

                if(empty($filename))
                    $filename = $data['folder'].'_'.$data['record_id'].'_'.str_random(6).".".$ext;
                if($private){
                    $upload = Storage::disk('local')->putFileAs($data['folder'],$a,$filename);
                }else{
                    $upload = Storage::disk('public')->putFileAs($data['folder'],$a,$filename);
                }

                if($upload)
                {
                    $f = File::create([
                        'user_id'=>auth()->user()->id,
                        'table_name'=>$data['folder'],
                        'record_id'=>$record_id,
                        'name'=>$filename,
                        'path'=>$upload,
                        'extention'=>$ext,
                        'type'=>$type,
                    ]);
                    $files_saved[]=$f->id;
                    //Log::debug('File upload:');
                    // Log::debug($f);
                }else{
                    echo "No subio el archivo"."<br/>";
                }
            }
        }

        return $files_saved;
    }

    public function uploadSingleFile($file,$folder,$filename='',$private=false){

        $ext =  $file->getClientOriginalExtension();

        if(!empty($filename)){
            $filename = $filename.".".$ext;
        }else{
            $filename = Str::random(10).".".$ext;
        }


        if($private){
            $upload = Storage::disk('local')->putFileAs($folder,$file,$filename);
        }else{
            $upload = Storage::disk('public')->putFileAs($folder,$file,$filename);
        }

        if ($upload){
            return $folder.'/'.$filename;
        }

        return '';
    }
}
