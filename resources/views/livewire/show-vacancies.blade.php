<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    @forelse ($vacantes as $vacante) 
    
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="#" class="text-xl font-bold">
                        {{$vacante->title}}
                    </a>
                    <p class="text-sm text-gray-600 font-bold">{{ $vacante->company }}</p>
                    <p class="text-sm text-gray-500">Ultimo dia: {{ $vacante->last_day->format('d/m/Y') }}</p>
                </div>

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a href="#" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                        Candidatos
                    </a>
                    <a href="#" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                        Editar
                    </a>
                    <a href="#" class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                        Eliminar
                    </a>
                </div>
            </div>
        </div>
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes para mostrar</p>

    @endforelse

</div>

<div class="mt-10"> 
    {{ $vacantes->links()}}
</div>