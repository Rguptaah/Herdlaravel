<x-layouts>
    <x-slot:heading>
      Job Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a class="text-blue-600 text-base" href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}:</strong>
                    <span>Pays {{$job['salary']}} per year</span>
                </a>
            </li>
        @endforeach
    </ul>


</x-layouts>
