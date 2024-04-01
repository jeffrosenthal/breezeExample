

<x-layouts.app>
<div class="max-w-4xl mx-auto">
<h1>Posts</h1>


    <ul role="list" class="divide-y divide-gray-800">
        @foreach ($posts as $post)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">

                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $post->id }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $post->title }}</p>

                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">{{ $post->content }}</p>

                    </div>
                </div>

            </li>
        @endforeach
    </ul>
    <ul role="list" class="divide-y divide-gray-800">
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-800" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-white">Leslie Alexander</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-400">leslie.alexander@example.com</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-white">Co-Founder / CEO</p>
                <p class="mt-1 text-xs leading-5 text-gray-400">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
            </div>
        </li>
    </ul>
</div>
</x-layouts.app>
