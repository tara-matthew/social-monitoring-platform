<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\User;
use App\Models\Feedback;

class TenantController extends Controller
{
    public function index()
    {
        // Get the data
        $tenant = Tenant::findOrFail(tenant('id'));
        return User::all();
    }
}
