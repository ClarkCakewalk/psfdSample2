<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleAdd extends Model
{
    protected $fillable = ['sampleId', 'category', 'add', 'addNote', 'addId', 'latitude', 'longitude', 'avaliable'];

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
