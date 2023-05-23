<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
   protected $nama= "Muhammad Hafiz";
   protected $nim="2110817310018";
   protected $prodi="Teknologi Informasi";
   Protected $hobi="Bermain";
   protected $skill="Rajin ibadah";
   protected $nick="Hafiz";


   public function getNama(){
       return $this->nama;
   }

   public function getNim(){
       return $this->nim;
   }

   public function getProdi(){
       return $this->prodi;
   }

   public function getHobi(){
       return $this->hobi;
   }

   public function getSkill(){
       return $this->skill;
   }

   public function getNick()
   {
       return $this->nick;
   }

}