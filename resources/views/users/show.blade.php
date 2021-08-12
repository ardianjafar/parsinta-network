<x-app-layout>
    <div class="border-b -mt-8 py-24">
        <x-container>
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="rounded-full w-16 h-16 border-2 border-blue-500 p-1" src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
                </div>
                <div class="">
                    <h1 class="font-semibold mb-3">{{ $user->name }}</h1>
                    <div class="text-sm text-gray-500">
                        Joined {{ $user->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </x-container>
    </div>
    <div class="border-b mb-5">
        <x-container>
            <div class="flex">
                <div class="px-10 py-5 font-semibold text-center border-r border-l">
                    <div class="uppercase text-xs">Status</div>
                    <div class="text-2xl">{{ $user->statuses->count() }}</div>
                </div>
                <div class="px-10 py-5 font-semibold text-center border-r border-l">
                    <div class="uppercase text-xs">Following</div>
                    <div class="text-2xl">{{ $user->follows->count() }}</div>
                </div>
                <div class="px-10 py-5 font-semibold text-center border-r border-l">
                    <div class="uppercase text-xs">Follower</div>
                    <div class="text-2xl">{{ $user->followers->count() }}</div>
                </div>
            </div>
        </x-container>
    </div>

    <x-container>
        <div class="grid grid-cols-2">
            <div class="space-y-5">
                <x-statuses :statuses="$statuses"/>
            </div>
        </div>
    </x-container>
</x-app-layout>