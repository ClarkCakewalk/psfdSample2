<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleTel extends Model
{
    protected $fillable = ['sampleId', 'category', 'number', 'telNote'];

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
