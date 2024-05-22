<x-layouts>
    <x-slot:heading>
      Job
    </x-slot:heading>

    <h2 class="text-dark"><strong>{{$job['title']}}</strong></h2>

    <p>
        This job pays you {{$job['salary']}} per year.
    </p>
</x-layouts>