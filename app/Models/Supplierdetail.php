<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplierdetail extends Model
{
    use HasFactory;
    protected $table ='supplierdetails';
    protected $fillable=[
        
        'name',
        'company','phone','email','address',
       ];
}
