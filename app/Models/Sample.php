<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = [
        'sampleId', 'quesId', 'sampleName', 'gender', 'birthYear', 'birthMonth', 'status', 'mail', 'mode', 'liCode', 'mainAdd', 'mailAdd', 'emailFirst', 'imFirst'
    ];

    public function adds()
    {
        return $this->hasMany(SampleAdd::class);
    }

    public function tels()
    {
        return $this->hasMany(SampleTel::class);
    }

    public function emails()
    {
        return $this->hasMany(SampleEmail::class);
    }

    public function ims()
    {
        return $this->hasMany(sampleIm::class);
    }

    public function results()
    {
        return $this->hasMany(SampleResult::class);
    }

    public function notes()
    {
        return $this->hasMany(SampleNote::class);
    }

    public function li()
    {
        return $this->belongsTo(Li::class, 'liCode', 'liCode');
    }

    public function mainAddress()
    {
        return $this->belongsTo(SampleAdd::class, 'mainAdd');
    }

    public function mailAddress()
    {
        return $this->belongsTo(SampleAdd::class, 'mailAdd');
    }

    public function preferredEmail()
    {
        return $this->belongsTo(SampleEmail::class, 'emailFirst');
    }

    public function preferredIm()
    {
        return $this->belongsTo(SampleIm::class, 'imFirst');
    }

}
