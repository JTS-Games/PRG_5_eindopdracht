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
        <h1>These are the Enchanters of League.</h1>
        <h2>Click on an enchanter to view more information:</h2>
        <a href="{{route('enchanters.index')}}">Reset filters</a>
        <form method="GET" action="{{ route('enchanters.index') }}">

            <label for="subclass_id">Select subclass: </label>
            <select name="subclass_id" id="subclass_id" required onchange="this.form.submit()">
                <option value="Select subclass"></option>
                @foreach($subclasses as $subclass)
                    <option value={{$subclass->id}}>{{$subclass->name}}</option>
                @endforeach
            </select>
        </form>

        <ul>
            @foreach($enchanters as $enchanter)
                <li>
                    <a href="{{ route('enchanters.show', $enchanter) }}">{{ $enchanter->name }}</a>
                </li>
            @endforeach
        </ul>
        @if (auth()->check() && auth()->user())
            <a href="{{route('enchanters.create')}}">Create new</a>
        @endif

    </main>
</x-layout>
