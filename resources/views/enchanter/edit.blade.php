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
@if (auth()->check() && auth()->user()->role === 1)
    <h2>Edit {{$enchanter->name}}:</h2>
    <form action="{{route('enchanters.update' ,'$enchanter')}}" method="PUT">
        @csrf
        <div class="formFields">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" required>
            </div>
        </div>
        <div>
            <button type="submit">Edit</button>
        </div>
    </form>
@endif
</x-layout>
