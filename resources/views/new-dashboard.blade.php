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
<x-layout title="Subclasslist">
    <main>
        <h1>Welcome to your dashboard</h1>
        <h2>Edit your uploaded enchanters here:</h2>
        @foreach($enchanters as $enchanter)
            <li><a href="{{route('enchanters.show', $enchanter)}}">{{$enchanter->name}}</a></li>
        @endforeach
    </main>
</x-layout>
