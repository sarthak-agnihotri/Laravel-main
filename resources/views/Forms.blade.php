<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Form</title>
</head>
<body>
    <form action='/upload-form' method='post' enctype='multipart/form-data'>
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
        <label for="student_name">Student Name:</label>
        <input type="text" id="student_name" name="student_name"value="{{ old('student_name') }}">
        <br><br>
        <label for="student_email">Student Email:</label>
        <input type="email" id="student_email" name="student_email"value="{{ old('student_email') }}">
        <br><br>
        <label for="student_mobile">Student Mobile:</label>
        <input type="text" id="student_mobile" name="student_mobile"value="{{ old('student_mobile') }}">
        <br><br>
        <label for="alternate_mobile">Alternate Mobile:</label>
        <input type="text" id="alternate_mobile" name="alternate_mobile"value="{{ old('alternate_mobile') }}">
        <br><br>
        <label for="student_gender">Student Gender:</label>
        <input type="text" id="student_gender" name="student_gender"value="{{ old('student_gender') }}">
        <br><br>
        <label for="student_dob">Student Date of Birth:</label>
        <input type="date" id="student_dob" name="student_dob"value="{{ old('student_dob') }}">
        <br><br>
        <label for="student_age">Student Age:</label>
        <input type="text" id="student_age" name="student_age"value="{{ old('student_age') }}">
        <br><br>
        <label for="student_address">Student Address:</label>
        <input type="text" id="student_address" name="student_address"value="{{ old('student_address') }}">
        <br><br>
        <label for="student_pincode">Student Pincode:</label>
        <input type="text" id="student_pincode" name="student_pincode"value="{{ old('student_pincode') }}">
        <br><br>
        <label for="student_course">Student Course:</label>
        <input type="text" id="student_course" name="student_course"value="{{ old('student_course') }}">
        <br><br>
        <label for="student_marks">Student Marks:</label>
        <input type="text" id="student_marks" name="student_marks"value="{{ old('student_marks') }}">
        <br><br>
        <label for="student_signature">Student Signature:</label>
        <input type="file" id="student_signature" name="student_signature">
        <br><br>
        <label for="student_password">Student Password:</label>
        <input type="password" id="student_password" name="student_password"value="{{ old('student_password') }}">
        <br><br>
        <label for="student_confirm_password">Student Confirm Password:</label>
        <input type="password" id="student_confirm_password" name="student_confirm_password"value="{{ old('student_confirm_password') }}">
        <br><br>
        <label for="student_terms">Accept Terms and Conditions:</label>
        <input type="checkbox" id="student_terms" name="student_terms">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>