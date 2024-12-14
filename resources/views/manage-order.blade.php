<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-3 py-3">
            
            <h1>Order List</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>2024-09-22</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>$132</td>
                        <td>
                            <button class="btn btn-primary">View</button>
                            <button class="btn btn-danger">Cancel</button>
                        </td>
                    </tr>
                
                </tbody>
            </table>

            </div>
        </div>
    </div>
</x-app-layout>
