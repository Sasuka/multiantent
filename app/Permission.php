<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Spatie\Permission\Models\Permission as BasPermission;

class Permission extends BasPermission
{
    //
    use UsesTenantConnection;

}
