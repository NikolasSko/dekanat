<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teachers extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [

            'lastname',
            'firstname',
            'patronymic',
            'gender',
            'age',
            'place',
            'job',
            'id_department',
            'img',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Departments::class, 'id_department');
    }

}
