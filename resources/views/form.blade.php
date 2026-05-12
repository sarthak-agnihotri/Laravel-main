<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/submit-form" method="post">
        @csrf
        @if($errors->any())
            <div style="color:red;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <button type="submit">Submit</button>
    </form>
   <!-- @error('name')
        <div style="color:red;">{{ $message }}</div>
    @enderror
    @error('email')
        <div style="color:red;">{{ $message }}</div>
    @enderror -->
    
</body>
</html>