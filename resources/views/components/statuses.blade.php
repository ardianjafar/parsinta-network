@foreach ($statuses as $status)
    <div class="border rounded-xl p-5">
        <div class="flex">
            <div class="flex-shrink-0 mr-3">
                <img class="w-10 h-10 rounded-full" src="{{ $status->user->gravatar() }}"
                    alt="{{ $status->body }}">
            </div>
            <div>
                <div class="font-semibold">
                    {{ $status->user->name }}
                </div>
                <div class="leading-relaxed">
                    {{ $status->body }}
                </div>
                <div class="text-sm text-gray-600">
                    {{ $status->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
    </div>
@endforeach