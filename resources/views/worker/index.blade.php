@extends('layout.main')

@section('content')

<div>
    <hr>
    <div>
        <a href="{{ route('worker.create')  }}">Добавить</a>
    </div>
    <hr>
    <div>
        <form action="{{ route('worker.index') }}">
            <input type="text" name="name" placeholder="name" value="{{ request()->get('name') }}">
            <input type="text" name="surname" placeholder="surname" value="{{ request()->get('surname') }}">
            <input type="text" name="email" placeholder="email" value="{{ request()->get('email') }}">
            <input type="number" name="from" placeholder="from" value="{{ request()->get('from') }}">
            <input type="number" name="to" placeholder="to" value="{{ request()->get('to') }}">
            <input type="text" name="description" placeholder="description" value="{{ request()->get('description') }}" >
            <input id="isMarried" type="checkbox" name="is_married" placeholder="is_married"
            {{ request()->get('is_married') == 'on' ? 'checked' : '' }}>
            <label for="isMarried">Is married</label>

            <input type="submit">
            <a href="{{ route('worker.index') }}">Сбросить фильтр</a>
        </form>
    </div>
    <hr>
    @foreach($workers as $worker)
        <div>
            <div>Name: {{ $worker->name }}</div>
            <div>Surname: {{ $worker->surname }}</div>
            <div>Email:{{ $worker->email }}</div>
            <div>Age: {{ $worker->age }}</div>
            <div>Description: {{ $worker->description }}</div>
            <div>Is married: {{ $worker->is_married }}</div>
            <div>
                <a href="{{ route('worker.show', $worker->id) }}">Просмотреть</a>
            </div>
            <div>
                <a href="{{ route('worker.edit', $worker->id) }}">Редактировать</a>
            </div>
            <div>
                <form action="{{ route('worker.delete', $worker->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    <div class="pagination">
        {{ $workers->withQueryString()->links() }}
    </div>
</div>

@endsection
