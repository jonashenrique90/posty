@props(['post' => $post])

<div class=" m-2 border-r border-b border-l border-grey-light lg:border-l lg:border-t lg:border-grey-light bg-white rounded p-4 flex flex-col justify-between leading-normal">
    <div class="mb-2 flex justify-between">
        <div class="flex-col">
            <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a>
            <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
            <p class="mb-2">{{ $post->body }}</p>
            <div class="flex items-center">
                @auth
                    @if(!$post->likedBy(auth()->user()))
                        <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
                            @csrf
                            <button type="submit" class="text-blue-500">Like</button>
                        </form>
                    @else
                        <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Unlike</button>
                        </form>
                    @endif
                @endauth
                <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }} </span>
            </div>
        </div>
        <div>
            @can('delete', $post)
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" p-1 text-white bg-red-500 rounded">Delete</button>
                </form>
            @endcan
        </div>
    </div>
</div>
