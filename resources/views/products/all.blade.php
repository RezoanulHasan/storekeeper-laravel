<!-- resources/views/products/all.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h2 class="text-2xl font-semibold">All Products</h2>
        <a href="{{ route('create') }}" class="text-blue-500 mb-10">Create Product</a>
    </div>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-200 text-red-800 p-2 mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if(count($products) > 0)
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Price</th>
                    <th class="py-2 px-4 border-b">Quantity</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->price }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->quantity }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('products.editPrice', $product->id) }}" class="text-blue-500">Edit Price</a>
                       
                        </td>
                        <td class="py-2 px-4 border-b">
                            <button class="text-red-500" onclick="sellProduct({{ $product->id }}, '{{ $product->name }}', {{ $product->price }}, {{ $product->quantity }})">Sell</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No products available. <a href="{{ route('create') }}" class="text-blue-500">Create a product</a>.</p>
    @endif

       <!-- Modal -->
       <div id="sellModal" class="fixed hidden inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg">
            <h3 class="text-xl font-semibold mb-4" id="modalTitle">Sell Product</h3>
            <p id="modalContent"></p>
            <div class="mt-4 flex justify-end">
                <button class="text-red-500" onclick="confirmSell()">Confirm</button>
                <button class="ml-4" onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        function sellProduct(productId, productName, productPrice, productQuantity) {
            var modal = document.getElementById('sellModal');
            var modalTitle = document.getElementById('modalTitle');
            var modalContent = document.getElementById('modalContent');

            modalTitle.textContent = `Sell ${productName}`;
            modalContent.innerHTML = `<p>ID: ${productId}</p>
                                      <p>Name: ${productName}</p>
                                      <p>Price: ${productPrice}</p>
                                      <p>Quantity: ${productQuantity}</p>`;

            modal.classList.remove('hidden');
        }

        function confirmSell() {
            // Fetch CSRF token (adjust if your setup is different)
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Get product ID from the modal content
            var productId = parseInt(document.getElementById('modalContent').querySelector('p[ID]').textContent.split(": ")[1]);

            // Make an AJAX request to update the database
            fetch(`/sell-product/${productId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({}),
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response, e.g., show success message
                alert('Product sold successfully!');

                // Close the modal after handling the sell operation
                closeModal();

                // Reload the page to update the product list (you can use a more efficient approach if using frontend frameworks)
                location.reload();
            })
            .catch(error => {
                // Handle errors, e.g., show an error message
                alert('Error selling the product.');
                console.error('Error:', error);

                // Close the modal after handling the error
                closeModal();
            });
        }

        function closeModal() {
            var modal = document.getElementById('sellModal');
            modal.classList.add('hidden');
        }
    </script>
@endsection