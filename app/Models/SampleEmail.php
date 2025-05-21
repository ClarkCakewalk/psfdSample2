<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleEmail extends Model
{
    protected $fillable = ['sampleId', 'email', 'emailNote'];

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
