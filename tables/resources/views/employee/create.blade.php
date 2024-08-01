<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extended Form with CSS</title>
    <style>
        

        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="date"], input[type="email"], input[type="tel"], textarea, select, input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .gender-group {
            display: flex;
            align-items: center;
        }

        .gender-group label {
            margin-right: 10px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js6--"></script>
</head>
<body>
    <div class="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group gender-group">
                <label>Gender:</label>
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="other">Other</label>
                <input type="radio" id="other" name="gender" value="other" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="tel" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <select  name="department" id="department" class="form-control" >
                    <option value="">Choose Department</option>
                    @foreach($departments as $department)
                        <option  value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                    <label for="designation">Designation:</label>
                    <select id="designation" name="designation" required>
                       
                       
                    </select>
            </div>  
       
            <div class="form-group">
                <label for="doj">Date of Joining:</label>
                <input type="date" id="doj" name="doj" required>
            </div>
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
      
            document.getElementById("department").addEventListener("change",(e)=>{
              fetch(`http://localhost:8000/designation/${e.target.value}`)
              .then(res=>res.json())
              .then((data)=>{
                console.log(data)
                document.getElementById("designation").innerHTML=" <option>Choose designation</option>"
                let options=``;
                    for(let i =0;i<data.length;i++){
                        options+=`<option value="${data[i]["id"]}">${data[i]["name"]}</option>`
                    }
                    document.getElementById("designation").innerHTML+=options;
              })

            })
              
           
        
    </script>
</body>
</html>
