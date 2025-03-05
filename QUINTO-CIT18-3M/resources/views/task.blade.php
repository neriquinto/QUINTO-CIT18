<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-bold mb-4">Task List</h1>

        @if(session('success'))
            <p class="text-green-500">{{ session('success') }}</p>
        @endif

        <form action="{{ route('task.store') }}" method="POST" class="mb-4">
            @csrf
            <input type="text" name="title" placeholder="Task title" class="w-full p-2 border rounded mb-2">
            <textarea name="description" placeholder="Task description (optional)" class="w-full p-2 border rounded mb-2"></textarea>
            <select name="status" class="w-full p-2 border rounded mb-2">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full">Add Task</button>
        </form>

        <h2 class="text-lg font-semibold">Current Tasks:</h2>
        <ul>
            @foreach($tasks as $task)
                <li class="p-2 border-b">{{ $task->title }} - <span class="text-gray-600">{{ $task->status }}</span></li>
            @endforeach
        </ul>
    </div>
</body>
</html>
