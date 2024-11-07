<x-layout>
    <x-slot name="header">
        <h1>Editar Post</h1>
    </x-slot>

    <x-slot name="content">
        <form action="/posts/{{$post->id}}/edit" method="POST">
            @csrf
            <label>
                Titulo:
                <input type="text" name="title" value="{{$post->title}}">
            <label>
            <br/>
            <label>
                Contenido:
                <textarea name="category">{{$post->content}}"</textarea>
            <label>
            
            <br/>
            <label>

                Categoria:
                <input type="text" name="content" value="{{$post->category}}">
            <label>
            <br/>
            <button type="submit">Guardar</button>

        </form> 
    </x-slot>
    

    <x-slot name="footer">
        <h1>Aqui se muestra el footer</h1>
    </x-slot>
</x-layout>