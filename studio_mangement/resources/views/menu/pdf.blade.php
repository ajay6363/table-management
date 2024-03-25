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
        <h2>Menu details</h2>
    </center>
    
    <table id="customers">

        <thead>
            <tr>
                <th>Id</th>
                <th>Menu Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->menu_name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->currency_symbol }} {{ $item->price }}</td>
                <td>{{ $item->description }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>