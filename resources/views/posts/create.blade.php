<x-layout>
    <x-slot name="header">
        <h1>Nuevo Post</h1>
    </x-slot>

    <x-slot name="content">
        {{-- @if ($errors->any())
            <h3>Errores</h3>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="/posts/create" method="POST">
            @csrf
            <label>
                Titulo:
                <input type="text" name="title" value="{{ old('title') }}">
            <label>
                @error('title')
                    <div class="bg-red-500 text-white p-2 rounded-md">
                        <ul>
                            <li>{{ $message }}</li>
                        </ul>
                    </div>
                @enderror
            <br/>
            <label>
                Contenido:
                <textarea name="category"> {{ old('category') }} </textarea>
            <label>
                @error('category')
                    <div class="bg-red-500 text-white p-2 rounded-md">
                        <ul>
                            <li>{{ $message }}</li>
                        </ul>
                    </div>
                @enderror
            <br/>
            <label>

                Categoria:
                <input type="text" name="content" value="{{ old('content') }}">
            <label>
                @error('content')
                    <div class="bg-red-500 text-white p-2 rounded-md">
                        <ul>
                            <li>{{ $message }}</li>
                        </ul>
                    </div>
                @enderror
            <br/>
            <button type="submit">Guardar</button>

        </form> 
    </x-slot>
    

    <x-slot name="footer">
        <h1>Aqui se muestra el footer</h1>
    </x-slot>
</x-layout>