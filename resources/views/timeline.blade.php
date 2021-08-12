<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-7">
                <div class="border rounded-xl p-5">
                    <form action="{{ route('statuses.store') }}" method="post">
                        @csrf
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}"
                                    alt="{{ Auth::user()->name }}">
                            </div>
                            <div class="w-full">
                                <div class="font-semibold">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="my-2">
                                    <textarea name="body" id="body" placeholder="What's on your mind ?..."
                                        class="form-textarea w-full border-gray-300 rounded-xl resize-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200"></textarea>
                                </div>
                                <div class="text-right">
                                    <x-button>Post</x-button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="space-y-6 mt-5">
                    <div class=" space-y-5">
                        {{ ddd() }}
                        <x-statuses :statuses="$statuses"></x-statuses>
                    </div>
                </div>
            </div>
            <div class="col-span-5">
                <div class="border p-5 rounded-xl">
                    <h1 class="font-semibold mb-5">Recently Follows</h1>
                    <div class="space-y-5">
                        @foreach (Auth::user()->follows()->limit(5)->get()as $user)
                            <div class="flex items-center">
                                <div class="flex-shrink-0 mr-3">
                                    <img class="w-10 h-10 rounded-full" src="{{ $user->gravatar() }}"
                                        alt="{{ $status->body }}">
                                </div>
                                <div>
                                    <div class="font-semibold">
                                        {{ $user->name }}
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        {{ $user->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</x-app-layout>
