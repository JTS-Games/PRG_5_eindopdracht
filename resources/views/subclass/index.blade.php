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
        <h1>These are the possible subclasses.</h1>
        <h2>Click on a subclass to view more information:</h2>
        <ul>
            @foreach($subclasses as $subclass)
            <li><a href="{{route('subclasses.show', $subclass)}}">{{$subclass->id}}: {{$subclass->name}}</a></li>
          @endforeach
        </ul>
        <a href="{{route('subclasses.create')}}">Create new</a>
    </main>
</x-layout>
