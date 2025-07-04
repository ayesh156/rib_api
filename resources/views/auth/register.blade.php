<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Register</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-blue-900 mb-6">Register</h2>
        <form id="registerForm" class="space-y-4">
            <input type="text" name="customer_name" placeholder="Name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <input type="text" name="contact_number" placeholder="Contact Number" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <input type="password" name="password" placeholder="Password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <button type="submit" class="w-full bg-blue-700 text-white py-2 rounded hover:bg-blue-800 transition">Register</button>
        </form>
        <div class="text-center mt-4">
            <a href="{{ route('customer.login.form') }}" class="text-blue-700 hover:underline">Already have an account? Login</a>
        </div>
    </div>
    <script>
    document.getElementById('registerForm').onsubmit = async function(e) {
        e.preventDefault();
        const form = e.target;
        const data = {
            customer_name: form.customer_name.value,
            contact_number: form.contact_number.value,
            email: form.email.value,
            password: form.password.value
        };
        try {
            const res = await fetch("{{ route('customer.register') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(data)
            });
            const result = await res.json();
            if (res.ok) {
                alert('Registration successful! Please login.');
                window.location.href = "{{ route('customer.login.form') }}";
            } else {
                alert(result.message || 'Registration failed');
            }
        } catch (err) {
            alert('An error occurred');
        }
    }
    </script>
</body>
</html>