<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 12/23/2018
 * Time: 3:52 PM
 */
?>


@extends('layouts.vendor_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Vendor Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @component('components.who')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

