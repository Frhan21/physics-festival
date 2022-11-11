<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    use HasFactory;

    protected $guarded=['id',];

    protected $fillable= [
        'name',
        'asal_sekolah',
        'image',
        'sekolah_id',
        'user_id',
        'events',
        'no_hp',
        'status '
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function events()
    {
        return $this->belongsTo(Event::class);
    }


}
