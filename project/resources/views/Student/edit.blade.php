<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Resignation Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form id="resignationForm" action="{{url('updated_data',$student2->id)}}" method="post">
        @csrf
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="{{$student2->name}}">
        </div>
         <div>  
         <label for="age">age:</label>
            <input type="number" id="age" name="age" value="{{$student2->age}}">
         </div>
         <div>  
         <label for="phone">phone:</label>
            <input type="number" id="phone" name="phone" value="{{$student2->phone}}">
         </div>
        <button type="submit">Submit Registration</button>
    </form>
    </body>
    </html>