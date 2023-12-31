<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriterias';
    protected $fillable = [
    	'nama', 'weight', 'eigen'
    ];

    // public function Bobot(){
    //     return $this->hasMany(m_bobot::class);
    // }

    // public function allData()
    // {
    //     return DB::table('m_kriterias')->get();
    // }

    // public function detailData($id)
    // {
    //     return  DB::table('m_kriterias')->where('id', $id)->first();
    // }

    // public function addData($data)
    // {
    //     DB::table('m_kriterias')->insert($data);
    // }

    // public function editData($id, $data)
    // {
    //     DB::table('m_kriterias')->where('id', $id)->update($data);
    // }

    // public function deleteData($id)
    // {
    //     DB::table('m_kriterias')->where('id', $id)->delete();
    // }

    // public function jumlahData()
    // {
    //    return DB::table('m_kriterias')->count();
    // }
}
