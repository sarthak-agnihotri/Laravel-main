<h1>Product List</h1>
<ul>
    @foreach($products as $product)
    <li>{{$product['name']}} - {{$product['price']}}
        <a href="{{route('shop.pages.show',['id'=>$product['id']])}}?access=yes">View Details</a>
    </li>
    @endforeach
</ul>