
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css" type="text/css">
</head>
<body>
    
    <div class="form-container">
        <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
        <h1>Form In laravel</h1>
        <form action="/updateData/{{$data->id}}" method="post" >
            @csrf
            <input type="hidden" name="_method" value="put">
            <div>
            <label for="Fname">Enter your First Name</label>
            <input type="text" value="{{$data->Fname}}" name="Fname" >
        </div>
        <div>
            <label for="Lname">Enter your Last Name</label>
            <input type="text" value="{{$data->Lname}}" name="Lname" >
        </div>
        <div>
            <label for="address">Enter your Address</label>
            <input type="text" name="address" value="{{$data->address}}" id="address" >
        </div>
        <div>
            <label for="email">Enter your Email</label>
            <input type="email" name="email" value="{{$data->email}}" id="email">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
     </form>
</div>

            
        </body>
        </html>