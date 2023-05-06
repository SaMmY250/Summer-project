<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('submit-form') }}">
        @csrf
        <label for="vehicle-type">Vehicle Type:</label>
        <input type="text" name="vehicle-type" id="vehicle-type" required><br>

        <label for="full-name">Owner's Full Name:</label>
        <input type="text" name="full-name" id="full-name" required>

        <label for="contact">Contact Number:</label>
        <input type="tel" name="contact" id="contact" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="vehicle-name">Vehicle Name:</label>
        <input type="text" name="vehicle-name" id="vehicle-name" required>

        <label for="vehicle-contact">Vehicle Contact Number:</label>
        <input type="tel" name="vehicle-contact" id="vehicle-contact" required>

        <label for="services">Services:</label>
        <textarea name="services" id="services" required></textarea>

        <label for="request-type">Request Type:</label>
        <select name="request-type" id="request-type" required>
            <option value="emergency">Emergency</option>
            <option value="scheduled">Scheduled</option>
            <option value="maintenance">Maintenance</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
