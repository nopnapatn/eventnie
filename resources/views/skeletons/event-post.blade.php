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
        <div class="bg-black rounded-lg opacity-90 h-96 px-48">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8 h-full">
                <div class="bg-cover bg-center" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/04dd3466-1f19-4b5e-8069-84a3ba2cf72d/ddp1xkg-ad372f63-d3db-42f5-a373-36d4da0ff0c2.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzA0ZGQzNDY2LTFmMTktNGI1ZS04MDY5LTg0YTNiYTJjZjcyZFwvZGRwMXhrZy1hZDM3MmY2My1kM2RiLTQyZjUtYTM3My0zNmQ0ZGEwZmYwYzIuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.IITRjHaetc65_PmhVke8bWihd0pnQ7_jMQlVx4SqfNU');"></div>
                <div class="w-full px-8 py-16">
                    <span class="font-semibold text-4xl text-white">Event 1</span><br><br>
                    <span class="text-white">Mon, 27 Jan 2023</span><br>
                    <span class="text-red-400 text-xs">1 day left!</span><br><br>
                    <button class="bg-white rounded-lg h-10 w-24 mt-4">Join</button>
                </div>
            </div>
        </div>

        <!-- section 4 -->
        <div>
            <div class="py-2 border-b border-black">
            </div>
            <div class="flex pt-4 justify-end">
                <!-- phone -->
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" fill="currentColor" class="bi bi-telephone-fill px-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>

                <!-- line -->
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" fill="currentColor" class="bi bi-line px-2" viewBox="0 0 16 16">
                    <path d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z" />
                </svg>

                <!-- facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" fill="currentColor" class="bi bi-facebook px-2" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
            </div>
        </div>

        <!-- section 5 -->
        <div class="px-10 mx-32">
            <div class="">
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
                    <div class="h-32 rounded-lg bg-gray-300">

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection