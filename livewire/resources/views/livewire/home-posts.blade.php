<div>
	@forelse ($posts as $post)
    <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-lg">
        <div class="flex justify-center items-center">
            <a class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded" href="#">Laravel</a>
        </div>
        <div class="mt-4">
            <a class="text-lg text-gray-700 font-medium" href="#">{{ $post['id'] }}. {{ $post['title'] }}</a>
        </div>
        <div class="flex justify-between items-center mt-4">
            <div class="flex items-center">
                <img src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                     class="w-8 h-8 object-cover rounded-full" alt="avatar">
                <a class="text-gray-700 text-sm mx-4" href="#">{{ $post['slug'] }}</a>
            </div>
            <span class="font-light text-sm text-gray-600">{{ $post['created_at'] }}</span>
        </div>
    </div>
	@empty
	
	@endforelse
	
	@if ($hasMorePages)
        <div class="flex items-center justify-center mt-4">
            <button
                class="px-4 py-3 text-lg font-semibold text-white rounded-xl bg-green-500 hover:bg-green-400"
                wire:click="loadPosts"
            >
                Load More
            </button>
        </div>
    @endif
</div>

