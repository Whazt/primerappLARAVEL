<x-layout>
    <x-slot name="header">
        <h1>Nuevo Post</h1>
    </x-slot>

    <x-slot name="content">
        <form action="/posts/create" method="POST">
            @csrf
            <label>
                Titulo:
                <input type="text" name="title">
            <label>
            <br/>
            <label>
                Contenido:
                <textarea name="category"></textarea>
            <label>
            
            <br/>
            <label>

                Categoria:
                <input type="text" name="content">
            <label>
            <br/>
            <button type="submit">Guardar</button>

        </form> 
    </x-slot>
    

    <x-slot name="footer">
        <h1>Aqui se muestra el footer</h1>
    </x-slot>
</x-layout>