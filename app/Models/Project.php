<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'bname', 'btagline', 'bdesc','bcolors', 'details', 'pkg','status'
    ];
    protected $attributes = [
        'status' => 'Pending Approval',
    ];
}
