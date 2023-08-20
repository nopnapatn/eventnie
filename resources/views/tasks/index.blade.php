 @extends('layouts.main')

 @section('content')
 <script src="{{ asset('build/assets/drag.js') }}" defer></script>
 <script src="{{ asset('build/assets/todo.js') }}" defer></script>
@foreach ($tasks as $task)
    <p>{{ $task->title }}</p>
    @can('editTask', $task)
        <a href="{{ route('tasks.edit', $task) }}">Edit</a>
    @endcan
@endforeach

<section >
  
    <div class="board">
      <form id="todo-form">
        <input type="text" placeholder="New TODO..." id="todo-input" />
        <button type="submit">Add +</button>
      </form>

      <div class="lanes">
        <div class="swim-lane" id="todo-lane">
          <h3 class="heading">TODO</h3>
 
          <p class="task" draggable="true">Get groceries</p>
          <p class="task" draggable="true">Feed the dogs</p>
          <p class="task" draggable="true">Mow the lawn</p>
        </div>

        <div class="swim-lane">
          <h3 class="heading">Doing</h3>

          <p class="task" draggable="true">Binge 80 hours of Game of Thrones</p>
        </div>

        <div class="swim-lane">
          <h3 class="heading">Done</h3>

          <p class="task" draggable="true">
            Watch video of a man raising a grocery store lobster as a pet
          </p>
        </div>
      </div>
    </div>
  </section>

  @endsection

  <style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: sans-serif;

  -ms-overflow-style: none; /* IE and Edge */
  scrollbar-width: none; /* Firefox */
}

*::-webkit-scrollbar {
  display: none;
}

.board {
  width: 100%;
  height: 100vh;
  overflow: scroll;

  background-image: url(https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);
  background-position: center;
  background-size: cover;
}

/* ---- FORM ---- */
#todo-form {
  padding: 32px 32px 0;
}

#todo-form input {
  padding: 12px;
  margin-right: 12px;
  width: 225px;

  border-radius: 4px;
  border: none;

  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
  background: white;

  font-size: 14px;
  outline: none;
}

#todo-form button {
  padding: 12px 32px;

  border-radius: 4px;
  border: none;

  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
  background: #ffffff;
  color: black;

  font-weight: bold;
  font-size: 14px;
  cursor: pointer;
}

/* ---- BOARD ---- */
.lanes {
  display: flex;
  align-items: flex-start;
  justify-content: start;
  gap: 16px;

  padding: 24px 32px;

  overflow: scroll;
  height: 100%;
}

.heading {
  font-size: 22px;
  font-weight: bold;
  margin-bottom: 8px;
}

.swim-lane {
  display: flex;
  flex-direction: column;
  gap: 12px;

  background: #f4f4f4;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);

  padding: 12px;
  border-radius: 4px;
  width: 225px;
  min-height: 120px;

  flex-shrink: 0;
}

.task {
  background: white;
  color: black;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);

  padding: 12px;
  border-radius: 4px;

  font-size: 16px;
  cursor: move;
}

.is-dragging {
  scale: 1.05;
  box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
  background: rgb(50, 50, 50);
  color: white;
}
  </style>

 