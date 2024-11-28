<head>
    <link rel="stylesheet" href="css/formData.css">
</head>
<div class="Data-container">
    <h1>Users Data</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userData as $data )
            <tr>
                <td>
                    {{$data->Fname}} 
                </td>
                <td>
                    {{$data->Lname}} 

                </td>
                <td>

                    {{$data->email}}
                </td>
                <td>

                    {{$data->address}}
                </td>
            </tr>
        </tbody>
        
        @endforeach

    </table>
</div>
