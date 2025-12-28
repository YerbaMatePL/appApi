@foreach($products as $product)
    <p>{{ $product->getName() }}</p>
@endforeach