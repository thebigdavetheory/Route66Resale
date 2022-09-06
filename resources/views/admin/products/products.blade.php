<x-layouts.admin-layout>
    <div class="h-full p-4 bg-white">
        <div class="flex justify-between mb-3">
            <h2><u>Products</u></h2>
            <a href="/admin/products/create"><span class="btn btn-outline-primary">Create</span></a>
        </div>
        <table class="table">
            <tr class="">
                <th class="">Id</th>
                <th class="">Description</th>
                <th class="">Manufacturer</th>
                <th class="">UPC</th>
                <th class="">MSRP</th>
                <th class="">Edit</th>
                <th class="">Delete</th>
            </tr>
            <tr class="">
                @foreach($products as $product)
                    <td class="">{{ $product->id }}</td>
                    <td class="">{{ $product->description }}</td>
                    <td class="">{{ $product->manufacturer }}</td>
                    <td class="">{{ $product->upc }}</td>
                    <td class="">{{ $product->msrp }}</td>
                    <td class=""><a href="/admin/products/edit/{{$product->id}}" class="btn btn-sm btn-outline-success">Edit</a></td>
                    <td class=""><a href="/admin/products/delete/{{$product->id}}" class="btn btn-sm btn-outline-danger">Delete</a></td>
                @endforeach
            </tr>
        </table>
    </div>
</x-layouts.admin-layout>
