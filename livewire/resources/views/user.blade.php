@extends('layouts.app')
@section('content')
	<div>
    @foreach ($users as $user)
        <livewire:users :user="$user->name" :wire:key="$user->id">
    @endforeach
	</div>
@endsection