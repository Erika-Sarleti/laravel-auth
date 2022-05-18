<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{
    protected $fillable =['name','content','slug'];
    static public function genSlug($originalStr){
        $slugBase=Str::of($originalStr)->slug('-');
        $slug=$slugBase;
        $i=1;
        while(self::where('slug', $slug)->first()){
            $slug=$slugBase-$i;
            $i++;
        }
        return $slug;
    }
}
