<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jawaban extends Model
{
    public static function get_all()
    {
        return DB::table('jawabans')->get();
    }

    public static function save($data)
    {
        unset($data['_tokens']);
        DB::table('jawabans')->insert($data);
    }

    public static function find_by_id($id)
    {
        return DB::table('jawabans')->where('id', $id)->get();
    }
}
