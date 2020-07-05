<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModel {
    public static function getAll()
    {
        $artikel = DB::table('artikels')->get();
        return $artikel;
    }

    public static function save($data)
    {
        $artikel = DB::table('artikels')->insert($data);
        return $artikel;
    }

    public static function show($id)
    {
        $artikel = DB::table('artikels')->where('id', $id)->first();
        return $artikel;
    }

    public static function update($request, $id)
    {
        $artikel = DB::table('artikels')
                    ->where('id', $id)
                    ->update(
                        ['judul' => $request["judul"],
                        'isi' => $request["isi"],
                        'slug' => Str::slug($request["judul"], "-"),
                        'tag' => $request["tag"]]);
        return $artikel;
    }

    public static function destroy($id)
    {
        $artikel = DB::table('artikels')->where('id', $id)->delete();
        return $artikel;
    }
}

?>