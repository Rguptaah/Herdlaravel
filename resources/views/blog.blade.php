<x-layouts>
    <x-slot:heading>
      Blog
    </x-slot:heading>

    <h2 class="text-dark"><strong>{{$blog['title']}}</strong></h2>

    <p>
        {{$blog['content']}}
    </p>

    <p><small>{{ $blog['author'] ." | ". date('F j, Y', strtotime($blog['date']))}}</small></p>
</x-layouts>
