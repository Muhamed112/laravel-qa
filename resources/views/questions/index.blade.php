

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Questions
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0 mb-1"><a href=" {{ $question->url }} "> {{ $question->title }} </a> </h3>
                                <p class="lead">
                                    Asked by
                                    <a href="{{ $question->user->url }}"> {{ $question->user->name }} </a>
                                    <small class="text-muted"> {{ $question->created_date }} </small>
                                </p>
                                {{ Str::limit($question->body, 250) }}
                            </div>

                        </div>
                        <hr>
                    @endforeach

                    <div class="mx-auto">
                        {{ $questions->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
