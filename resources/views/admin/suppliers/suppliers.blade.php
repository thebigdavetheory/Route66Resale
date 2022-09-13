<x-layouts.admin-layout>
    <div class="h-full p-4 bg-white">
        <div class="flex justify-between mb-3">
            <h2><u>Stock Orders</u></h2>
            <a href="/admin/stock-orders/create"><span class="btn btn-outline-primary">Create</span></a>
        </div>
        <table class="table">
            <tr class="">
                <th class="">Id</th>
                <th class="">Description</th>
                <th class="">Item Count</th>
                <th class="">Date Ordered</th>
                <th class="">Total Cost</th>
                <th class="">Total MSRP</th>
                <th class="">Supplier</th>
            </tr>
            @foreach($stockOrders as $stockOrder)
                <tr class="">
                    <td class="">{{ $stockOrder->id }}</td>
                    <td class="">{{ $stockOrder->description }}</td>
                    <td class="">{{ $stockOrder->manufacturer }}</td>
                    <td class="">{{ $stockOrder->upc }}</td>
                    <td class="">{{ $stockOrder->msrp }}</td>
                    <td class=""><a href="/admin/stock_order/edit/{{$stockOrder->id}}" class="btn btn-sm btn-outline-success">Edit</a></td>
                    <td class=""><a href="/admin/stock_order/delete/{{$stockOrder->id}}" class="btn btn-sm btn-outline-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</x-layouts.admin-layout>
