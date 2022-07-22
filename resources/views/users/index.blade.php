@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <livewire:user-all />
            <livewire:user-add />
            <livewire:user-edit />
        </div>
    </div>
</div>
@endsection
