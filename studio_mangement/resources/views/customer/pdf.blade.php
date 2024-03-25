<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        .circle-image {
            border-radius: 50%;
            /* Set the border radius to 50% for a circle */
            width: 100px;
            /* Adjust the width as desired */
            height: 100px;
            /* Adjust the height as desired */
            object-fit: cover;
            /* Ensure the image fills the circular space */
        }
    </style>
</head>

<body>

    <center>
        <h2>Contact details</h2>
    </center>
    
    <table id="customers">

        <thead>
            <tr>
                <th>Id</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $key)
            <tr>
                <td>{{$key->id}}</td>
                <td>{{$key->name}}</td>
                <td>{{$key->email}}</td>
                <td>{{$key->number}}</td>
                <td>{{$key->subject}}</td>
                <td>{{$key->message}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>