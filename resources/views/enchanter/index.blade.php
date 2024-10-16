<style>
    main{
        padding-left: 5vw;
    }
    h1 {
        font-size: 5rem;
    }
    h2{
        font-size: 2.5rem;
    }
    p, a{
        font-size: 1.7rem;
    }
</style>
<x-layout title="Enchanterlist">
    <main>
        <h1>Here is a list of enchanters:</h1>
        <ul>
            @foreach($enchanters as $enchanter)
            <li><a href="{{route('enchanters.show', $enchanter)}}">{{$enchanter->name}}</a></li>
          @endforeach
        </ul>
    </main>
</x-layout>
