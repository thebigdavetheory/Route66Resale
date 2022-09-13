<x-layouts.admin-layout>
    <div class="h-full p-4 bg-white">
        <div class="flex justify-center mb-3">
            <h2><u>Edit Stock Order</u></h2>
        </div>
        <div>
            <form method="post"
                  action="{{url($intent == 'create' ? '/admin/stock-orders/create' : '/admin/stock-orders/edit')}}">
                @csrf
                <input type="hidden" name="id" value="{{ $stockOrder->id }}">
                <div class="input-group pb-2 disabled">
                    <span class="input-group-text">Supplier</span>
                    <select name="supplier" class="form-select">
                        @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">Description</span>
                    <textarea type="text" name="description" class="form-control" placeholder=""
                              value="{{$stockOrder->description}}">
                    </textarea>
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">Item Count</span>
                    <input type="text" name="item-count" class="form-control" placeholder=""
                           value="{{$stockOrder->item_count}}">
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">Shipping Cost</span>
                    <input type="text" name="shipping_cost" class="form-control" placeholder="" value="{{$stockOrder->shipping_cost}}">
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">Inventory Cost</span>
                    <input type="text" name="total_cost" class="form-control" placeholder=""
                           value="{{$stockOrder->total_cost}}">
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">Total MSRP</span>
                    <input type="text" name="total_msrp" class="form-control" placeholder="" value="{{$stockOrder->total_msrp}}">
                </div>

                <div class="input-group pb-2">
                    <span class="input-group-text">Date Ordered</span>
                    <input type="number" name="msrp" min="1" step="any" class="form-control" placeholder=""
                           value="{{$stockOrder->msrp}}">
                </div>
                <div class="pt-3 text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/admin/stock-orders" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin-layout>
