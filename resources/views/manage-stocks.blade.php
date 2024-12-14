<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Stocks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-3 py-3">
                <h1>Stock List</h1>

                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif


                @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif  

                <form action="{{ route('shoes.store') }}" method="POST" class="mb-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                            <input type="text" name="brand" id="brand"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                            <input type="text" name="size" id="size"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                            <input type="text" name="color" id="color"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" name="price" id="price"  step="0.01" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="stock_quantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                            <input type="number" name="stock_quantity" id="stock_quantity"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Add Stock</button>
                </form>

                <!-- Stock Table -->
                <table class="table mt-4 w-full">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Size</th>
                            <th scope="col">Color</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock Quantity</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shoes as $shoe)
                        <tr>
                            <th scope="row">{{ $shoe->id }}</th>
                            <td>{{ $shoe->name }}</td>
                            <td>{{ $shoe->brand }}</td>
                            <td>{{ $shoe->size }}</td>
                            <td>{{ $shoe->color }}</td>
                            <td>${{ $shoe->price }}</td>
                            <td>{{ $shoe->stock_quantity }}</td>
                            <td>{{ $shoe->description }}</td>
                            <td>
                        <a href="{{route('shoes.edit', $shoe->id)}}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> 
                        </a>
                        <form action="{{ route('shoes.destroy', $shoe->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i> <!-- Delete icon -->
                        </button>
                        </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div> 
                {{ $shoes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
