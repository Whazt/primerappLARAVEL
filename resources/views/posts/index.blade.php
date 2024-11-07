<x-layout>
    <x-slot name="header">
        <h1>POSTS</h1>
    </x-slot>


    <x-slot name="content">
        <div class="container">
            <a href="/posts/create"> Nuevo Post</a>

            <ul>
                @foreach ($posts as $post)
                    <li>
                        <a href="/posts/{{$post->id}}">
                     {{-- href="{{route('posts.show', $post)}} --}}
                            {{$post->title}}
                        </a>
                    </li>
                @endforeach
            </ul>

            {{ $posts->links() }}
        </div> 
    </x-slot>
    

    <x-slot name="footer">
        <h1>Aqui se muestra el footer</h1>
    </x-slot>
</x-layout>
