<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<form method="POST" action="{{route('task.add')}}">
    @csrf
    @method('post')
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-72 h-56 bg-white flex flex-col items-center justify-center p-5 gap-3 relative overflow-hidden shadow-md @error('description')
        border-red
    @enderror">

        <input type="text" class="text-lg font-extrabold text-gray-800" placeholder="task's name" name="tasksname"></input>

@error('description')
    <div style="color: red">
        {{ $message }}
    </div>
@enderror
        <input type="text" class="text-lg font-extrabold text-gray-800" placeholder="task" name="description"></input>

        <div class="flex gap-5">
            <button class="w-20 h-8 bg-indigo-600 transition duration-200 border-none text-white cursor-pointer font-semibold rounded-full hover:bg-indigo-700">ADD</button>
        </div>
    </div>
</body>
</form>
</html>
