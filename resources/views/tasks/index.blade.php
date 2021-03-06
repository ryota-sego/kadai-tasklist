@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    
    @if(Auth::check())
        <h1>Task List</h1>
        @if (count($tasks) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>タスク</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        
        {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-primary']) !!}
        
    @else
    
        <div class="container">
            
            <h1>LOGIN FIRST</h1>
            
        </div>
    @endif
@endsection