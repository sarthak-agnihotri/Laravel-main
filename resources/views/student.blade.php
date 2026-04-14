<!-- <h1>Welcome, {{$name}}--{{$siteName}}</h1> -->
 @foreach($students as $student)
    <p>{{$student['id']}}</p>
    <p>{{$student['name']}}</p>
    @endforeach