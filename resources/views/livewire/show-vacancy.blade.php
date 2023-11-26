<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacancy->title }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10">
            <p class="font-bold text-sm text-gray-800 my-3">Compañia: <span class="font-normal">{{$vacancy->company}}</span></p>
            <p class="font-bold text-sm text-gray-800 my-3">Ultimo dia para postularse: <span class="font-normal">{{$vacancy->apply_before->toFormattedDateString()}}</span></p>
            <p class="font-bold text-sm text-gray-800 my-3">Categoria: <span class="font-normal">{{$vacancy->category->category}}</span></p>
            <p class="font-bold text-sm text-gray-800 my-3">Salario: <span class="font-normal">{{$vacancy->salary->salary}}</span></p>
        </div>

    </div>

    <div>
        <h2 class="text-2xl font-bold mb-5">Descripcion del Puesto</h2>
        <p>{{ $vacancy->description }}</p>
    </div>

    @guest
    <div class="mt-5 bg-gray-50 border border-dashed p-5 text-center">
        <p>
            ¿Te interesa esta vacante? <a class="font-bold text-indigo-600" href="{{ route('register')}}">Registrate y aplica</a>
        </p>

    </div>
    @endguest
    

</div>
