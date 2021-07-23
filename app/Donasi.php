<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Donasi extends Model
{
    protected $fillable  = ['kode_unik','nama_donatur','jenis','nominal','kategori'];
    protected $table = 'donasis';

    public static function kode()
    {
    	$kode = DB::table('donasis')->max('id');
    	$addNol = '';
    	$kode = str_replace("OT", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "OT"."-".$addNol.$incrementKode;
    	return $kodeBaru;
    }
}
