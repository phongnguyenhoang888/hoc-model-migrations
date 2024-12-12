<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cauthu extends Model
{
   

    use Notifiable;
    protected $table ="Cauthu";
    public $timestamp = true;

    // nhuwngx cot dc insert update edit
    protected $fillble = [
        'ten_cau_thu', 'tuoi', 'email' , 'vi_tri', 'quoc_tich', 'luong'
    ];
}
