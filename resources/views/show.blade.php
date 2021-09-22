@extends('layouts.app')

@section('content')
    <a href="./" class='btn btn-secondary mt-2'>Go back</a>
    <h1>{{ $todo->title }}</h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content}}</p>
    <form method="post" action="{{ url('todo', ['id'=>$todo->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-2 float-right ">DELETE</button>
    </form>
    <a href="{{ route('todo.edit', ['todo' => $todo->id]) }}" class='btn btn-primary mt-2'>EDIT</a>
    <!-- <a href="{{ route('todo.edit', ['todo' => $todo->id]) }}" class='btn btn-danger mt-2 float-right'>DELETE</a> -->

@endsection