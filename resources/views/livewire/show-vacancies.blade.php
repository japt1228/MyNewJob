<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacancies as $vacancy)
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="{{ route('Vacancies.show', $vacancy->id  )}}" class="text-xl font-bold">
                        {{ $vacancy->title }}
                    </a>
                    <p class="text-sm text-gray-600 font-bold">{{ $vacancy->company }}</p>
                    <p class="text-sm text-gray-500">Ultimo dia: {{ $vacancy->apply_before->format('d/m/Y') }}</p>
                </div>

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a href="#" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                        Candidatos
                    </a>
                    <a href="{{ route('Vacancies.edit', $vacancy->id) }}"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                        Editar
                    </a>
                    <button wire:click="$emit('showAlert', {{ $vacancy->id }})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center">
                        Eliminar
                    </button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay vacantes para mostrar</p>
        @endforelse
    </div>

    <div class="mt-10">
        {{ $vacancies->links() }}
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('showAlert', vacanteId => {
            Swal.fire({
                title: "¿Deseas eliminar esta vacante?",
                text: "¡No podrás revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Confirmar"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteVacancy', vacanteId)
                    Swal.fire({
                        title: "Vacante Eliminada",
                        text: "La vacante ha sido eliminada satisfactoriamente",
                        icon: "success"
                    });
                }
            });
        })
    </script>
@endpush
