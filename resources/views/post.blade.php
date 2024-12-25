<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-5 max-w-screen-md">
        <h2 class="mb-2 text-2xl tracking-tighter font-semibold text-gray-700">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-400">
            <a href="/authors/{{ $post->author->username }}"
                class="hover:underline text-base text-gray-400">{{ $post->author->name }}</a>
            in
            <a href="/categories/{{ $post->category->slug }}"
                class="hover:underline text-base text-gray-400">{{ $post->category->name }}</a>
            | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-3 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-700 hover:underline">&laquo; Back to Blog</a>
    </article>

</x-layout>
