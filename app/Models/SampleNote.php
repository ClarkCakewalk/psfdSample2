<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleNote extends Model
{
    protected $fillable = ['sampleId', 'year', 'content', 'category'];

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
