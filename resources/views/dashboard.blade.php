<x-app-layout>

    @push('scripts')
    @php
        $url = route('api.hello');
    @endphp
        <script>
            axios.get('{{ $url }}')
                .then(function (response) {
                    console.log(response);
                })
        </script>
    @endpush
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <livewire:search-user />
            </div>
        </div>
    </div>
</x-app-layout>
