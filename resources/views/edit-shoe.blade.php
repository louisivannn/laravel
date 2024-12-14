<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Shoe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-3 py-3">
                <form action="{{ route('shoes.update', $shoe->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" value="{{ $shoe->name }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <!-- Repeat similar fields for 'brand', 'size', 'color', 'price', 'stock_quantity', 'description' -->
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Shoe</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>