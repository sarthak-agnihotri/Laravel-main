<h1>Products Details</h1>
@foreach($products as $product)
<p>ID: {{$product['id']}}</p>
<p>Name: {{$product['name']}}</p>
<p>Price: {{$product['price']}}</p>
<hr>
@endforeach