<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
</head>
<body>
    <h1>Contact List</h1>

    <a href="{{ route('contacts.create') }}">+ Add New Contact</a>
    <br><br>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Street</th>
                <th>Barangay</th>
                <th>City/Municipality</th>
                <th>Province</th>
                <th>ZIP Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->full_name }}</td>
                <td>{{ $contact->phone_number }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->birthday }}</td>
                <td>{{ $contact->gender }}</td>
                <td>{{ $contact->street }}</td>
                <td>{{ $contact->barangay }}</td>
                <td>{{ $contact->city_municipality }}</td>
                <td>{{ $contact->province }}</td>
                <td>{{ $contact->zip_code }}</td>
                <td>
                    <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this contact?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>