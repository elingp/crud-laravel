<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    public static function get_all()
    {
        return DB::table('pertanyaans')->get();
    }

    public static function save($data)
    {
        unset($data['_tokens']);
        DB::table('pertanyaans')->insert($data);
    }

    public static function find_by_id($id)
    {
        return DB::table('pertanyaans')->where('id', $id)->get();
    }
}
