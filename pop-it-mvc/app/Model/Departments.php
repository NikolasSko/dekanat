<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Departments extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [

        'name',

    ];

    public function teachers(): BelongsTo
    {
        return $this->belongsTo(Teachers::class, 'id_teacher');

    }
}
