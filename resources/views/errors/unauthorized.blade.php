@extends('layouts.master')

@section('title')
Unauthorized Access - Alchemortem
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1>Unauthorized Access</h1>
        <p>Uh uh uh...you didn't say the magic word! This page is only available to Admins of Alchemortem.com. Please <a href="{{ route('signin') }}">login</a> to your account or <a href="{{ route('shop.products') }}">continue shopping</a>.</p>
    </div>
</div>
@endsection