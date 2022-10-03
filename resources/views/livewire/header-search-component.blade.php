<div class="wrap-search center-section">
    <div class="wrap-search-form">
        <form action="{{route('product.search')}}" id="form-search-top" name="form-search-top">
            <input type="text" name="search" value="{{$search}}" placeholder="Search here...">
            <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            <div class="wrap-list-cate">
                    <input type="hidden" name="product-cat" value="{{$product_cat}}" id="product-cate">
                    <input type="hidden" name="product-cat_id" value="{{$product_cat_id}}" id="product-cate-id">
            </div>
        </form>
    </div>
</div>
