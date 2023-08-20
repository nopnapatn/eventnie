// public/todo.js

document.addEventListener('DOMContentLoaded', () => {
    const todoForm = document.getElementById('todo-form');
    const todoInput = document.getElementById('todo-input');
    const todoLane = document.getElementById('todo-lane');

    todoForm.addEventListener('submit', e => {
        e.preventDefault();

        const taskText = todoInput.value.trim();
        if (taskText) {
            const taskElement = createTaskElement(taskText);
            todoLane.appendChild(taskElement);
            todoInput.value = '';
        }
    });

    function createTaskElement(text) {
        const taskElement = document.createElement('p');
        taskElement.textContent = text;
        taskElement.classList.add('task');
        taskElement.draggable = true;

        taskElement.addEventListener('dragstart', () => {
            taskElement.classList.add('is-dragging');
        });

        taskElement.addEventListener('dragend', () => {
            taskElement.classList.remove('is-dragging');
        });

        return taskElement;
    }
});
