<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class addcart extends Model
{
    public function productsum($table, $id)

{
    return DB::table($table)->select(DB::raw("SUM(price) as psum"))->where('uid',$id)->where('status',"addcart")->get();
   
}
}
