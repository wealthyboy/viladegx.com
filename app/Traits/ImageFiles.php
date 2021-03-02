<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use App\Models\SystemSetting;
use App\Http\Helper;

use App\Http\Image;



trait ImageFiles 
{

    protected $setting;


    public function getImageToShowAttribute()
    {   
        return $this->image;
    }


    public function getImageToShowMAttribute()
    {   
        return $this->m_path();
    }


    public function getImageToShowTnAttribute()
    {   
        return $this->tn_path();
    }


    public function getAddImagesAttribute()
    {
        return $this->images; 
    }


    public function tn_path(){
        $image = $this->checkIfProductIsVariable(optional($this->variant)->image,$this->image);
        return  asset('images/'. $this->folder .'/tn/'.$image);
    }


    public function m_path(){
        $image = $this->checkIfProductIsVariable(optional($this->variant)->image,$this->image);
        return  asset('images/'.$this->folder.'/m/'.$image);
    }


    public function checkIfProductIsVariable($var_image,$image){
        if ( $this->product_type == 'variable' ) {
            return basename($var_image);
        }
        return basename($image);
    }


    public function imageSize($size){
        if ( $this->image ) { 
            $image = basename($this->image);
            return asset('images/'.$this->folder.'/'. $size .'/'.$image);
        }
    }


    public function getImageMAttribute(){
        return $this->imageSize('m'); 
    }


    public function getImageTnAttribute(){
        return $this->imageSize('tn'); 
    }

}
