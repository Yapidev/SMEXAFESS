<?php

namespace App\Models;

use App\Traits\UUIDAsPrimaryKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestPost extends Model
{
    use HasFactory, UUIDAsPrimaryKey;
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
