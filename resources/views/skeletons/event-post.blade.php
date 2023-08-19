@extends('layouts.main')

@section('content')
<section class="flex">
    <!-- menu bar -->
    <x-aside-bar></x-aside-bar>

    <!-- content -->
    <div class="pl-16 w-full">
        <!-- section 1 -->
        <x-section-1></x-section-1>

        <!-- section 2 -->
        <div>
            <div class="py-2 border-t border-black"></div>
        </div>

        <!-- section 3 -->
        <div class="bg-black rounded-lg opacity-90 max-h-96 px-48">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                <div class="bg-white bg-cover bg-center" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/04dd3466-1f19-4b5e-8069-84a3ba2cf72d/ddp1xkg-ad372f63-d3db-42f5-a373-36d4da0ff0c2.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzA0ZGQzNDY2LTFmMTktNGI1ZS04MDY5LTg0YTNiYTJjZjcyZFwvZGRwMXhrZy1hZDM3MmY2My1kM2RiLTQyZjUtYTM3My0zNmQ0ZGEwZmYwYzIuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.IITRjHaetc65_PmhVke8bWihd0pnQ7_jMQlVx4SqfNU');"></div>
                <div class="w-full px-8 py-16">
                    <span class="font-semibold text-4xl text-white">Event 1</span><br><br>
                    <span class="text-white">Mon, 27 Jan 2023</span><br>
                    <span class="text-red-400 text-xs">1 day left!</span><br><br>
                    <a href="{{ route('events.index') }}">
                        <button class="bg-white rounded-lg h-10 w-24 mt-4">Join</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- section 4 -->
        <div>
            <div class="py-2 border-b border-black">
            </div>
            <div class="flex pt-4 justify-end">
                <div class="bg-black rounded-lg h-10 w-10 ml-4"></div>
                <div class="bg-black rounded-lg h-10 w-10 ml-4"></div>
                <div class="bg-black rounded-lg h-10 w-10 ml-4"></div>
            </div>
        </div>

        <!-- section 5 -->
        <div class="px-10 mx-32">
            <div class="" style="margin: -20px;">
                <div class="py-8">
                    <span class="font-semibold text-lg">Information</span>
                </div>

                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                    <!-- section 1 -->
                    <div class="lg:col-span-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa perferendis, aspernatur ex natus sint alias, suscipit qui labore beatae enim temporibus assumenda est mollitia, consequuntur reprehenderit? Neque dicta sapiente quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad temporibus atque illo voluptate est tempore unde eligendi. Blanditiis iste suscipit fugit consequatur maiores, magni, molestiae perspiciatis beatae optio, vero doloribus?</p><br>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsa qui quisquam modi, obcaecati hic possimus quia. Impedit sed quisquam nobis. Aperiam dolorum expedita reprehenderit repellendus quae aspernatur cum explicabo?</p>
                        <div class="py-8">
                            <img src="https://pbs.twimg.com/media/Ee1puxsWoAET6P-?format=png&name=small" alt="">
                        </div>
                    </div>

                    <!-- section 2 -->
                    <div class="h-32 rounded-lg bg-gray-200">

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection