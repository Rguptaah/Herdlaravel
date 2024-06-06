<x-layouts>
    <x-slot:heading>
      Blog Listings
    </x-slot:heading>

    <ul>
        @foreach ($blogs as $blog)
            <li>
                <a href="/blogs/{{$blog['id']}}">
                    <div>
                        <h1 class="text-blue-600"><strong>{{$blog['title']}} <span class="animate-ping text-red-800 text-bold">NEW!!</span></strong></h1>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>


</x-layouts>
