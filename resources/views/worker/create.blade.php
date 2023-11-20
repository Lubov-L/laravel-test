@extends('layout.main')

@section('content')

    <div>
    <div style="display: flex; justify-content: center;">
        <form action="{{ route('worker.store') }}" method="Post">
            @csrf
            <div>
                <input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;"
                       type="text" name="name" placeholder="Имя" value="{{ old('name') }}">

                @error('name')
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;"
                       type="text" name="surname" placeholder="Фамилия" value="{{ old('surname') }}">

                @error('surname')
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;"
                       type="email" name="email" placeholder="Электронная почта" value="{{ old('email') }}">
                @error('email')
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;"
                       type="number" name="age" placeholder="Возраст" value="{{ old('age') }}">

                @error('age')
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <textarea style="margin-top: 30px; width: 200px; border: 1px solid black;"
                          name="description" placeholder="Описание">{{ old('description') }}</textarea>

                @error('description')
                <div>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <input style="margin-top: 30px;" type="checkbox" name="is_married" id="is_married"
                    {{ old('is_married') == 'on' ? ' checked' : '' }}
                >
                <label for="is_married">Is married</label>
            </div>
            <div>
                <input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;" type="submit" value="Добавить">
            </div>
        </form>
    </div>
</div>

@endsection
