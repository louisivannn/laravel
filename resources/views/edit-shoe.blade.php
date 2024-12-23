<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Shoe Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-3 py-3">
                <form action="{{ route('shoes.update', $shoe->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" value="{{ $shoe->name }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                            <input type="text" name="brand" id="brand" value="{{ $shoe->brand }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                            <select name="size" id="size" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
                                <option value="">Select Size</option>
                                @for ($size = 5; $size <= 15; $size += 0.5)
                                    <option value="{{ $size }}" {{ $shoe->size == $size ? 'selected' : '' }}>{{ $size }}</option>
                                @endfor
                            </select>
                        </div>
                        <div>
                            <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                            <input type="text" name="color" id="color" value="{{ $shoe->color }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" name="price" id="price" value="{{ $shoe->price }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                            <input type="number" name="stock_quantity" id="stock_quantity" value="{{ $shoe->stock_quantity }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="description" id="description" value="{{ $shoe->description }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                            @if ($shoe->image)
                                <img src="{{ asset('storage/' . $shoe->image) }}" alt="{{ $shoe->name }}" class="mt-2 w-20 h-20 object-cover">
                                <div class="mt-2">
                                    <input type="checkbox" name="remove_image" id="remove_image" value="1">
                                    <label for="remove_image" class="text-sm font-medium text-gray-700">Remove current image</label>
                                </div>
                            @else
                                <p class="mt-2">No Image</p>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Shoe</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>