<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use App\Tenantable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Tenantable;

    protected $guarded = [];
}
