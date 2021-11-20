<?php

namespace App\Models;


class Profile 
{
    private static $data_profile = [[
        "nama" => "Umar Setyawan",
        "alamat" => "Ngasem, Kecamatan Batealit, Kabupaten Jepara",
        "tanggal lahir" => "29-01-2005",
        "link" => "post-umar"
    ],
    [
        "nama" => "",
        "alamat" => "",
        "tanggal lahir" => "",
        "link" => ""
    ],
    [
        "nama" => "",
        "alamat" => "",
        "tanggal lahir" => "",
        "link" => ""
    ]
];

public static function all()
    {
        return collect(self::$data_profile);
    }

    public static function find($link){
        $post =  static::all();
    return $post->firstWhere('link', $link);
    }
}
