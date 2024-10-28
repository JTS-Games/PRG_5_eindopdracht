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
        <h1>{{$subclass->name}}</h1>
        <h2>{{$subclass->description}}</h2>
        <p>{{$subclass->tips}}</p>
        <a href="{{route('enchanters.index')}}">Go back</a>
    </main>
</x-layout>
