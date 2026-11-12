<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Full Name:</label><br>
        <input type="text" name="full_name" value="{{ $contact->full_name }}" required><br><br>

        <label>Phone Number:</label><br>
        <input type="text" name="phone_number" value="{{ $contact->phone_number }}" required><br><br>

        <label>Email (optional):</label><br>
        <input type="email" name="email" value="{{ $contact->email }}"><br><br>

        <label>Birthday (optional):</label><br>
        <input type="date" name="birthday" value="{{ $contact->birthday }}"><br><br>

        <label>Gender (optional):</label><br>
        <select name="gender">
            <option value="">-- Select --</option>
            <option value="Male" {{ $contact->gender == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $contact->gender == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ $contact->gender == 'Other' ? 'selected' : '' }}>Other</option>
        </select><br><br>

        <label>Street (optional):</label><br>
        <input type="text" name="street" value="{{ $contact->street }}"><br><br>

        <label>Barangay (optional):</label><br>
        <input type="text" name="barangay" value="{{ $contact->barangay }}"><br><br>

        <label>City/Municipality (optional):</label><br>
        <input type="text" name="city_municipality" value="{{ $contact->city_municipality }}"><br><br>

        <label>Province (optional):</label><br>
        <input type="text" name="province" value="{{ $contact->province }}"><br><br>

        <label>ZIP Code (optional):</label><br>
        <input type="text" name="zip_code" value="{{ $contact->zip_code }}"><br><br>

        <button type="submit">Update Contact</button>
        <a href="{{ route('contacts.index') }}">Cancel</a>
    </form>
</body>
</html>