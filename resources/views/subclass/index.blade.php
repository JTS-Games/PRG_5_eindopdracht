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
        <h1>Here is a list of subclasses:</h1>
        <ul>
            @foreach($subclasses as $subclass)
            <li><a href="{{route('subclasses.show', $subclass)}}">{{$subclass->name}}</a></li>
          @endforeach
        </ul>
    </main>
</x-layout>
