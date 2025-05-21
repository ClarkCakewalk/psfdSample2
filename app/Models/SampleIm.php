<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleIm extends Model
{
    protected $fillable = ['sampleId', 'app', 'account', 'imNote'];

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
