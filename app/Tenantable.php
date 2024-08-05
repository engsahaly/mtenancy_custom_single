<?php

namespace App;

use App\Models\Tenant;
use App\Models\Scopes\TenantScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

trait Tenantable
{
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    protected static function bootTenantable(): void
    {
        static::addGlobalScope(new TenantScope());

        static::creating(function (Model $model) {
            $model['tenant_id'] = Auth::user()->tenant_id;
        });
    }
}
