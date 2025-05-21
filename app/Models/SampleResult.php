<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleResult extends Model
{
    protected $fillable = ['sampleId', 'year', 'result', 'mode'];

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
