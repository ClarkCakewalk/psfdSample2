<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Li extends Model
{
    protected $primaryKey = 'liCode';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['liCode', 'liName'];

    public function samples()
    {
        return $this->hasMny(Sample::class, 'liCode', 'liCode');
    }
}
