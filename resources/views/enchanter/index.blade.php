<x-layout title="Enchanterlist">
    <h1>Under here goes database stuffs</h1>
    <ul>
        @foreach($enchanters as $enchanter)
        <li><a href="{{route('enchanters.show', $enchanter)}}">{{$enchanter->name}}</a></li>
        @endforeach
    </ul>
</x-layout>
