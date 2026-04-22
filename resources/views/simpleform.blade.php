<h2>Simple Form</h2>
<form method="POST" action="/submit-form">
    @csrf
<input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
<br>
<input type="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
<br>
<button type="submit">Submit</button>
</form>