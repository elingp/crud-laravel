<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function get_all()
    {
        return DB::table('jawabans')->get();
    }

    public static function save($data)
    {
        unset($data['_token']);
        DB::table('jawabans')->insert($data);
    }

    public static function find_by_id($pertanyaan_id)
    {
        return DB::table('jawabans')->where('pertanyaan_id', $pertanyaan_id)->get();
    }
}
