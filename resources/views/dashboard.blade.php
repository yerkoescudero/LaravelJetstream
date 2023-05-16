<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div> --}}

            {{--             
                    @php
                    $type = 'danger';
                     @endphp


                <x-alert :type="$type"> --}}


            <x-alert type="info" id="alerta" class="mb-4" role="prueba">

                <x-slot name="title">
                    Titulo con slot.
                </x-slot>

                <p>Texto prueba.</p>
            </x-alert>

            <p>Texto de prueba 2.</p>

        </div>
    </div>
</x-app-layout>
