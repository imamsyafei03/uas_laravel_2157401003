@extends('layouts.dasbhoard')

@section('content')
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {!! Form::model($user,['route'=>['user.store']]) !!}
                    @include('user.form')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>

@endsection
