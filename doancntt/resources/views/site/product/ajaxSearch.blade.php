<ul class="list-unstyled">
    @foreach ($products as $product)
        <li>
            <a class="product-name" href="{{ route('site.product.show', [$product->slug]) }}"
                title="{{ $product->name }}">
                <img style="width:50px" src="{{ asset("storage/uploads/$product->featured_image") }}"
                    alt="{{ $product->name }}">
                <span>{{ $product->name }}</span>
            </a>
        </li>
    @endforeach

</ul>
