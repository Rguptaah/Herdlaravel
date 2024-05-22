<x-layouts>
    <x-slot:heading>
      Job Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}:</strong>
                    <span>Pays {{$job['salary']}} per year</span>
                </a>
            </li>
        @endforeach
    </ul>


</x-layouts>