<x-app-layout>
    <div class="mt-10 space-y-5 max-w-none">
        <h1 class="text-2xl font-bold">Post: {{ $post->title }}</h1>
        <x-post-meta :post="$post"/>
        <div>{{ $post->contents }}</div>
    </div>
</x-app-layout>