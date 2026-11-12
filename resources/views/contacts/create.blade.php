<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
</head>
<body>
    <h1>Add New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        <label>Full Name:</label><br>
        <input type="text" name="full_name" required><br><br>

        <label>Phone Number:</label><br>
        <input type="text" name="phone_number" required><br><br>

        <label>Email (optional):</label><br>
        <input type="email" name="email"><br><br>

        <label>Birthday (optional):</label><br>
        <input type="date" name="birthday"><br><br>

        <label>Gender (optional):</label><br>
        <select name="gender">
            <option value="">-- Select --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label>Street (optional):</label><br>
        <input type="text" name="street"><br><br>

        <label>Barangay (optional):</label><br>
        <input type="text" name="barangay"><br><br>

        <label>City/Municipality (optional):</label><br>
        <input type="text" name="city_municipality"><br><br>

        <label>Province (optional):</label><br>
        <input type="text" name="province"><br><br>

        <label>ZIP Code (optional):</label><br>
        <input type="text" name="zip_code"><br><br>

        <button type="submit">Save Contact</button>
        <a href="{{ route('contacts.index') }}">Cancel</a>
    </form>
</body>
</html>