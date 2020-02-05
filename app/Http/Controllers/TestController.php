<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use App\Models\Organization;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $organizations = Organization::with('wallets')->has('wallets')->getRelations();

        // foreach ($organizations as $organization) {
        //     $organization->total = $organization->wallets->sum('amount');
        // }


        return response($organizations);
    }
}
