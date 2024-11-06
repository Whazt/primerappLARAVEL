<x-layout>
    <x-slot name="header">
        <h1>Aqui se muestra el header</h1>
    </x-slot>

    <x-slot name="content">
        <div class="container mx-auto">
            <h1>Aqui se muestra el contenido</h1>
            <x-alert tipo="success">
                <x-slot name="title">Esto es un alerta</x-slot>
                <x-slot name="body">Esto es el cuerpo del alerta</x-slot>
            </x-alert>
            <x-alert tipo="danger" class="mt-4">
                <x-slot name="title">Esto es un alerta</x-slot>
                <x-slot name="body">Esto es el cuerpo del alerta</x-slot>
            </x-alert>
        </div>
    </x-slot>

    <x-slot name="footer">
        <h1>Aqui se muestra el footer</h1>
    </x-slot>
</x-layout>
