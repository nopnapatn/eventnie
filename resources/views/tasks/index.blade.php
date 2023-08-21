 @extends('layouts.main')

 @section('content')
 <script src="{{ asset('build/assets/drag.js') }}" defer></script>
 <script src="{{ asset('build/assets/todo.js') }}" defer></script>
 <section>
   @if (!empty($tasks) && is_array($tasks))
   @foreach ($tasks as $task)
   <!-- แสดงรายละเอียดของแต่ละ task -->
   @endforeach
   @else
   <!-- <p>No tasks available.</p> -->
   @endif
   <div class="board bg-gray-100 p-8 h-2/3 rounded-xl">
     <form id="todo-form" class="">
       <input class="rounded-lg border-2 border-black mr-3" type="text" placeholder="New TODO..." id="todo-input" />
       <button class="bg-white rounded-lg border-2 border-black text-black p-2 hover:bg-black hover:text-white" type="submit">Add +</button>
     </form>

     <div class="lanes">
       <div class="swim-lane" id="todo-lane">
         <h3 class="heading">TODO</h3>

         <p class="task" draggable="true">ส่งเอกสารให้ทางภาควิชา</p>
         <p class="task" draggable="true">ดำเนินการติดต่อขอสปอนเซอร์</p>
         <p class="task" draggable="true">นัดเรียกทีมงานประชุม</p>
       </div>

       <div class="swim-lane">
         <h3 class="heading">Doing</h3>

         <p class="task" draggable="true">รอฝ่ายประชาสัมพันธ์แจ้งข่าวให้ทางมหาวิทยาลัย</p>
         <p class="task" draggable="true">ฝ่ายโสตติดต่อยืมกล้องถ่ายรูป</p>
         <p class="task" draggable="true">เตรียมสคริปต์ให้พิธีกร</p>
       </div>

       <div class="swim-lane">
         <h3 class="heading">Done</h3>

         <p class="task" draggable="true">
           คณะกรรมการประชุมเตรียมตัว
         </p>
         <p class="task" draggable="true">
           ติดต่อเรื่องสถานที่
         </p>
         <p class="task" draggable="true">
           เตรียมเอกสารประชุม
         </p>
         <p class="task" draggable="true">
           ออกแบบโปสเตอร์
         </p>
       </div>
     </div>
   </div>
   <div class="bg-gray-200 rounded-xl h-1/3 border-t-4 border-black ">
     <div class="p-8">
       <span>Member in Event</span>
     </div>
   </div>
 </section>


 @endsection

 <style>
   /* * {
     padding: 0;
     margin: 0;
     box-sizing: border-box;
     font-family: sans-serif;

     -ms-overflow-style: none;
     
     scrollbar-width: none;
     
   } */

   *::-webkit-scrollbar {
     display: none;
   }

   .board {
     overflow: scroll;
   }

   /* ---- FORM ---- */
   #todo-form {
     padding: 32px 32px 0;
   }

   /* #todo-form input {
     padding: 12px;
     margin-right: 12px;
     width: 225px;

     border-radius: 4px;
     border: none;

     box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
     background: white;

     font-size: 14px;
     outline: none;
   } */

   /* #todo-form button {
     padding: 12px 32px;

     border-radius: 4px;
     border: none;

     box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
     background: #ffffff;
     color: black;

     font-weight: bold;
     font-size: 14px;
     cursor: pointer;
   } */

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

     background: #ffffff;
     /* box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25); */
     padding: 12px;
     border: 2px solid black;
     border-radius: 8px;
     width: 225px;
     min-height: 120px;

     flex-shrink: 0;
   }

   .task {
     background: white;
     color: black;
     box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
     border: 2px solid black;
     padding: 12px;
     border-radius: 8px;

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