<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class TableHeaderInformation extends Model
{
    use HasFactory;
    protected $table="table_header_informations";
    protected $guarded = ['id'];
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->updated_by = Auth::user()->email;
        });
    }
}
