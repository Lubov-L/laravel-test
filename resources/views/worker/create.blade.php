<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<div>
    <div style="display: flex; justify-content: center;">
        <form action="{{ route('worker.store') }}" method="Post">
            @csrf
            <div><input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;"
                        type="text" name="name" placeholder="Имя"></div>
            <div><input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;"
                        type="text" name="surname" placeholder="Фамилия"></div>
            <div><input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;"
                        type="email" name="email" placeholder="Электронная почта"></div>
            <div><input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;"
                        type="number" name="age" placeholder="Возраст"></div>
            <div><textarea style="margin-top: 30px; width: 200px; border: 1px solid black;"
                           name="description" placeholder="Описание"></textarea></div>
            <div>
                <input style="margin-top: 30px;" type="checkbox" name="is_married" id="is_married">
                <label for="is_married">Is married</label>
            </div>
            <div><input style="margin-top: 30px; height: 20px; width: 200px; border: 1px solid black;" type="submit"
                        value="Добавить"></div>
        </form>
    </div>
</div>
</body>
</html>
