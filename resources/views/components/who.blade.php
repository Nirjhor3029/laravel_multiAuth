<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 12/24/2018
 * Time: 6:50 PM
 */
use Illuminate\Support\Facades\Auth;


?>

@if(Auth::guard('web')->check())
    <p class="text-success">
        You are Logged in as a <strong>User</strong>
    </p>
@else
    <p class="text-danger">
        You are Logged Out as a <strong>User</strong>
    </p>

@endif




@if(Auth::guard('admin')->check())
    <p class="text-success">
        You are Logged in as a <strong>Admin</strong>
    </p>
@else
    <p class="text-danger">
        You are Logged Out as a <strong>Admin</strong>
    </p>

@endif


@if(Auth::guard('vendor')->check())
    <p class="text-success">
        You are Logged in as a <strong>Vendor</strong>
    </p>
@else
    <p class="text-danger">
        You are Logged Out as a <strong>Vendor</strong>
    </p>

@endif