@extends('layouts.main')

@section('content')

<div class="col-lg-8">
    <h1 class="display-4"><?=$product->name?></h1>

    <p class="mt-4"><?=$product->desc?></p>

    <a class="btn btn-outline-primary mt-3" href="/products/">Go Back</a>
</div>

@endsection