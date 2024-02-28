@extends('layouts.dasbhoard')

@section('content')

<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
                    {!! Form::model($mahasiswa,[
                        'method' => 'PATCH',
                        'route'=>['mahasiswa.update', $mahasiswa->id]]
                        ) !!}
                    @include('mahasiswa.form')
                    @if (session('status'))
         <div class="alert alert-success" role="alert">
                            {{ session('status') }}
             </div>
                    @endif
    </div>
 </div>

@endsection
