<style>
    main{
        padding-left: 20vw;
        padding-right: 20vw
    }

    h1{
        font-size: 5rem;
    }

    p, a{
        font-size: 1.7rem;
    }
    .formFields{
        display: flex;
        flex-direction: column;
        gap: 2vh;
        margin-bottom: 2vh;
    }
</style>
<x-layout title="EnchanterCreate">
    <main>
        <h1>Create new enchanter:</h1>
        <form action="{{ route('enchanters.store')}}" method="post">
            @csrf
        <div class="formFields">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="subclass_id">Subclass</label>
                <select name="subclass_id" id="subclass_id" required>
                    @foreach($subclasses as $subclass)
                        <option value={{$subclass->id}}>{{$subclass->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" required>
            </div>
        </div>
            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </main>
</x-layout>
