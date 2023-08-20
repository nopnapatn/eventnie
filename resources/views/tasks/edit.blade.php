<form method="POST" action="{{ route('tasks.update', $task) }}">
    @csrf
    @method('PATCH')
    
    <input type="text" name="title" value="{{ $task->title }}" />
    <textarea name="description">{{ $task->description }}</textarea>
    
    <button type="submit">Update</button>
</form>
