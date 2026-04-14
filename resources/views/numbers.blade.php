<h1>Numbers from 1 to 10</h1>
<!-- <ul>
    @for ($i = 1; $i <= 10; $i++)
        <li>{{ $i }}</li>
    @endfor
</ul> -->
@for($i=1;$i<=10;$i++){
    <p>Number: {{ $i }}</p>
}
@endfor