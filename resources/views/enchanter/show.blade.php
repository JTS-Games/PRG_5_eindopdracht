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
        <h1>{{$enchanter->name}}</h1>
        <p>{{$enchanter->description}}.</p>
        <h2>Subclass: {{$enchanter->subclass->name}}</h2>
        <p>{{$enchanter->subclass->description}}.</p>
        <p>Subclass tip: {{$enchanter->subclass->tips}}.</p>
        <a href="{{route('enchanters.index')}}">Go back</a>

        @if ($enchanter->user && $enchanter->user->is(auth()->user()))
            <form action="{{route('enchanters.destroy', $enchanter)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        @endif
    </main>
</x-layout>
