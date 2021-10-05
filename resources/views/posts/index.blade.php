<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    @foreach($posts as $post)
    <div class="card my-4">
        <h1>
            {{ $post->title}}
        </h1>
        <div class="card-body">
            {{ $post->content }}<br>
            <small>
            {{ $post->user->name }}
            </small>
        </div>
    </div>
    @endforeach
    {{ $posts->links() }}
</x-app-layout>