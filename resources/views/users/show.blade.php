@extends('layouts.global')

@section('title') Detail User @endsection

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <b>Name : </b><br>
            {{$user->name}}
            <br><br>

            @if($user->avatar)
                <img src="{{asset('storage/'.$user->avatar)}}" width="128px"/>
            @else
                No avatar
            @endif

            <br><br>
            <b>Username : </b><br>
            {{$user->username}}

            <br><br>
            <b>Phone Number : </b><br>
            @if($user->phone)
                {{$user->phone}}
            @endif

            <br><br>
            <b>Address : </b><br>
            @if($user->address)
                {{$user->address}}
            @endif

            <br><br>
            <b>Province : </b><br>
            @if($user->province_id)
                {{$user->province->province}}
            @endif

            <br><br>
            <b>City : </b><br>
            @if($user->city_id)
                {{$user->city->city_name}}
            @endif

            <br><br>
            <b>Roles : </b><br>
            @foreach(json_decode($user->roles) as $role)
                &middot; {{$role}} <br>
            @endforeach

            <br>
            <b>Email : </b><br>
            {{$user->email}}
        </div>
    </div>
  </div>

@endsection
