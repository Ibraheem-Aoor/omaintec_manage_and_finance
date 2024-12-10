<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicationInstallment extends Model
{
    use HasFactory;

    protected $guarded  = ['id' , '_token'];

    public function student() : BelongsTo
    {
        return $this->belongsTo(Student::class , 'student_id');
    }
}
