@if(session('error'))
    <div class="alert alert-danger">
    {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
@endif
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Nueva Publicación
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form method="POST" action="{{ route('pets.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-medium">Nombre</label>
                        <input type="text" name="name" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Tipo</label>
                        <select name="type" class="w-full border rounded p-2" required>
                            <option value="perdido">Perdido</option>
                            <option value="encontrado">Encontrado</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Especie (opcional)</label>
                        <input type="text" name="species" class="w-full border rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Descripción</label>
                        <textarea name="description" class="w-full border rounded p-2"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Foto (opcional)</label>
                        <input type="file" name="photo" class="w-full">
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        Publicar
                    </button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
