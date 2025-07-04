<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-blue-900 mb-6">Login</h2>
        <form id="loginForm" class="space-y-4">
            <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <input type="password" name="password" placeholder="Password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <button type="submit" class="w-full bg-blue-700 text-white py-2 rounded hover:bg-blue-800 transition">Login</button>
        </form>
        <div class="text-center mt-4">
            <a href="{{ route('customer.register.form') }}" class="text-blue-700 hover:underline">Don't have an account? Register</a>
        </div>
    </div>
    <script>
    document.getElementById('loginForm').onsubmit = async function(e) {
        e.preventDefault();
        const form = e.target;
        const data = {
            email: form.email.value,
            password: form.password.value
        };
        try {
            const res = await fetch("{{ route('customer.login') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(data)
            });
            const result = await res.json();
            if (res.ok) {
    alert('Login successful! Welcome, ' + result.customer_name);
    window.location.href = result.redirect;
} else {
                alert(result.message || 'Login failed');
            }
        } catch (err) {
            alert('An error occurred');
        }
    }
    </script>
</body>
</html>