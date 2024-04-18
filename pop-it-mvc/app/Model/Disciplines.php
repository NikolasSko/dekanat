<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Disciplines extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [

        'name',
        'id_department',

    ];

    public function departments(): BelongsTo
    {
        return $this->belongsTo(Departments::class, 'id_department');
    }
}
