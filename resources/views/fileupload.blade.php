<form method="POST" action="/upload-file" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <br>
    <button type="submit">Upload</button>
</form>