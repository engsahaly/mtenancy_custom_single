<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use App\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, Tenantable;

    protected $guarded = [];
}
