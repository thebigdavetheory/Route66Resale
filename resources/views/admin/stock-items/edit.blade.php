<x-layouts.admin-layout>
    <div class="h-full p-4 bg-white">
        <div class="flex justify-center mb-3">
            <h2><u>Edit Product</u></h2>
        </div>
        <div>
            <form method="post" action="{{url($intent == 'create' ? '/admin/products/create' : '/admin/products/edit')}}">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="input-group pb-2">
                    <span class="input-group-text">Description</span>
                    <input type="text" name="description" class="form-control" placeholder="" value="{{$product->description}}">
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">Manufacturer</span>
                    <input type="text"  name="manufacturer" class="form-control" placeholder="" value="{{$product->manufacturer}}">
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">Category</span>
                    <input type="text" name="category" class="form-control" placeholder="" value="{{$product->category}}">
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">Model</span>
                    <input type="text" name="model" class="form-control" placeholder="" value="{{$product->model}}">
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">UPC</span>
                    <input type="text" name="upc" class="form-control" placeholder="" value="{{$product->upc}}">
                </div>
                <div class="input-group pb-2">
                    <span class="input-group-text">MSRP</span>
                    <input type="number" name="msrp" min="1" step="any" class="form-control" placeholder=""  value="{{$product->msrp}}">
                </div>
                <div class="pt-3 text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/admin/products" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin-layout>
