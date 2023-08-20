// public/drag.js

document.addEventListener('DOMContentLoaded', () => {
    const tasks = document.querySelectorAll('.task');
    const lanes = document.querySelectorAll('.swim-lane');

    let draggedTask = null;

    tasks.forEach(task => {
        task.addEventListener('dragstart', () => {
            draggedTask = task;
            task.classList.add('is-dragging');
        });

        task.addEventListener('dragend', () => {
            draggedTask.classList.remove('is-dragging');
            draggedTask = null;
        });
    });

    lanes.forEach(lane => {
        lane.addEventListener('dragover', e => {
            e.preventDefault();
        });

        lane.addEventListener('drop', e => {
            if (draggedTask) {
                lane.appendChild(draggedTask);
            }
        });
    });
});
