@extends('layouts.dasbhoard')

@section('content')

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {!! Form::model($user,[
                        'method' => 'PATCH',
                        'route'=>['user.update', $user->id]]
                        ) !!}
                    @include('user.form')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>

@endsection
