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
        <h1>Welcome to the admin page</h1>
        <h2>Edit all uploaded enchanters here:</h2>
        @foreach($enchanters as $enchanter)
            <li>
                <a href="{{route('enchanters.show', $enchanter)}}">{{$enchanter->name}}</a>
                <form id="toggle-form-{{ $enchanter->id }}" action="{{ route('enchanters.toggleStatus', $enchanter) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit">
                        {{ $enchanter->status ? 'Turn Off' : 'Turn On' }}
                    </button>
                </form>
                <form action="{{route('enchanters.destroy', $enchanter)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </li>
        @endforeach
    </main>
</x-layout>
