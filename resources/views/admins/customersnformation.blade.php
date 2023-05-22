<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>Vehicle Type</th>
            <th>Client Full Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Vehicle Name</th>
            <th>Vehicle Lot Number</th>
            <th>Services</th>
            <th>Request Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->vehicle_type }}</td>
            <td>{{ $user->client_full_name }}</td>
            <td>{{ $user->contact_number }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->vehicle_name }}</td>
            <td>{{ $user->vehicle_lot_number }}</td>
            <td>{{ $user->services }}</td>
            <td>{{ $user->request_type }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
