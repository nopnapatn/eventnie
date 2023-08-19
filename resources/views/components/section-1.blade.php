<div class="flex item-center justify-between">
    <!-- search -->
    <div class="border border-black rounded-lg h-10 w-2/5"></div>

    <!-- user -->
    <div class="flex items-center">
        <div class="bg-black rounded-lg h-10 w-10 mx-4"></div>
        <span class="font-semibold">Nopnapat Norasri</span>
    </div>
</div>
<div class="flex items-center py-4">
    <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
        <li>
            <a href="{{ url('/') }}" class="text-gray-900 hover:underline" aria-current="page">Home</a>
        </li>
        <li>
            <a href="{{ route('events.index') }}" class="text-gray-900 hover:underline">All Events</a>
        </li>
    </ul>
</div>