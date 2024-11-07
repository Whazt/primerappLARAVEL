<x-layout>
    <x-slot name="header">
        <h1>{{$post->title}}</h1>
    </x-slot>

    <x-slot name="content">
        <div class="container">
            <h3>Catergoria: {{$post->category}}</h3>
            <p>{{$post->content}}</p>
        </div> 

        <a href="/posts/{{$post->id}}/edit">
            Editar Post
        </a>
    </x-slot>
 
   

    <x-slot name="footer">
        <h1>Aqui se muestra el footer</h1>
    </x-slot>
</x-layout>