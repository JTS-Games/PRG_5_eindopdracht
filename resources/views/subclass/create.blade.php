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
        <h1>Create new subclass:</h1>
        <form action="{{ route('subclasses.store')}}" method="post">
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
                <div>
                    <label for="tips">Tips</label>
                    <input type="text" name="tips" id="tips" required>
                </div>
            </div>
            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </main>
</x-layout>
