<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-5 max-w-screen-md border-b border-gray-400">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-2 text-2xl tracking-tighter font-semibold text-gray-700">{{ $post['title'] }}</h2>
            </a>
            <div>
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-base text-gray-400">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline text-base text-gray-400">{{ $post->category->name }}</a>
                | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-3 font-light">{{ Str::limit($post['body'], 80) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-700 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
