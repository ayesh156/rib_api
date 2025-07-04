<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Profile</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-blue-900">Customer Management</h1>
            <button id="openRegisterModal" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 transition">Register Customer</button>
        </div>
        <!-- Customers Table -->
        <div class="bg-white rounded-lg shadow-lg p-6 overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-xs" id="customersTable">
                <thead>
                    <tr>
                        <th class="px-2 py-2">ID</th>
                        <th class="px-2 py-2">Name</th>
                        <th class="px-2 py-2">Contact 1</th>
                        <th class="px-2 py-2">Contact 2</th>
                        <th class="px-2 py-2">Gender</th>
                        <th class="px-2 py-2">DOB</th>
                        <th class="px-2 py-2">NIC</th>
                        <th class="px-2 py-2">City ID</th>
                        <th class="px-2 py-2">Status ID</th>
                        <th class="px-2 py-2">Email</th>
                        <th class="px-2 py-2">Address 1</th>
                        <th class="px-2 py-2">Address 2</th>
                        <th class="px-2 py-2">Due Amount</th>
                        <th class="px-2 py-2">User ID</th>
                        <th class="px-2 py-2">City Name</th>
                        <th class="px-2 py-2">Customer ID</th>
                        <th class="px-2 py-2">Branch ID</th>
                        <th class="px-2 py-2">Reason</th>
                        <th class="px-2 py-2">Latitude</th>
                        <th class="px-2 py-2">Longitude</th>
                        <th class="px-2 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody id="customersBody" class="divide-y divide-gray-100">
                    <!-- Data will be loaded here -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-2xl overflow-y-auto max-h-[90vh]">
            <h2 class="text-xl font-bold mb-4 text-blue-900">Register Customer</h2>
            <form id="registerForm" class="grid grid-cols-2 gap-4 text-xs">
                <input type="text" name="customer_name" placeholder="Name" required class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="contact_number" placeholder="Contact Number 1" required class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="contact_number_2" placeholder="Contact Number 2" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="gender" placeholder="Gender" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="date" name="dob" placeholder="DOB" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="nic" placeholder="NIC" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" name="cities_id" placeholder="Cities ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" name="status_id" placeholder="Status ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="email" name="email" placeholder="Email" required class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="password" name="password" placeholder="Password" required class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="address_line_1" placeholder="Address Line 1" class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="address_line_2" placeholder="Address Line 2" class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" step="0.01" name="due_amount" placeholder="Due Amount" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" name="user_id" placeholder="User ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="city_name" placeholder="City Name" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="customer_id" placeholder="Customer ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" name="branch_id" placeholder="Branch ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="reason" placeholder="Reason" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" step="0.0000001" name="latitude" placeholder="Latitude" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" step="0.0000001" name="longitude" placeholder="Longitude" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <div class="col-span-2 flex justify-end space-x-2 mt-2">
                    <button type="button" id="closeRegisterModal" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</button>
                    <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 transition">Register</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-2xl overflow-y-auto max-h-[90vh]">
            <h2 class="text-xl font-bold mb-4 text-blue-900">Edit Customer</h2>
            <form id="editForm" class="grid grid-cols-2 gap-4 text-xs">
                <input type="hidden" name="id" id="edit_id">
                <input type="text" name="customer_name" id="edit_customer_name" placeholder="Name" required class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="contact_number" id="edit_contact_number" placeholder="Contact Number 1" required class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="contact_number_2" id="edit_contact_number_2" placeholder="Contact Number 2" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="gender" id="edit_gender" placeholder="Gender" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="date" name="dob" id="edit_dob" placeholder="DOB" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="nic" id="edit_nic" placeholder="NIC" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" name="cities_id" id="edit_cities_id" placeholder="Cities ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" name="status_id" id="edit_status_id" placeholder="Status ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="email" name="email" id="edit_email" placeholder="Email" required class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="address_line_1" id="edit_address_line_1" placeholder="Address Line 1" class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="address_line_2" id="edit_address_line_2" placeholder="Address Line 2" class="col-span-2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" step="0.01" name="due_amount" id="edit_due_amount" placeholder="Due Amount" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" name="user_id" id="edit_user_id" placeholder="User ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="city_name" id="edit_city_name" placeholder="City Name" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="customer_id" id="edit_customer_id" placeholder="Customer ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" name="branch_id" id="edit_branch_id" placeholder="Branch ID" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="text" name="reason" id="edit_reason" placeholder="Reason" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" step="0.0000001" name="latitude" id="edit_latitude" placeholder="Latitude" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="number" step="0.0000001" name="longitude" id="edit_longitude" placeholder="Longitude" class="px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                <div class="col-span-2 flex justify-end space-x-2 mt-2">
                    <button type="button" id="closeEditModal" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</button>
                    <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 transition">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    // Modal controls
    document.getElementById('openRegisterModal').onclick = () => document.getElementById('registerModal').classList.remove('hidden');
    document.getElementById('closeRegisterModal').onclick = () => document.getElementById('registerModal').classList.add('hidden');
    document.getElementById('closeEditModal').onclick = () => document.getElementById('editModal').classList.add('hidden');

    // Load customers
    async function loadCustomers() {
        const res = await fetch('/api/customers');
        const customers = await res.json();
        const tbody = document.getElementById('customersBody');
        tbody.innerHTML = '';
        customers.forEach(c => {
            tbody.innerHTML += `
                <tr>
                    <td class="px-2 py-2">${c.id ?? ''}</td>
                    <td class="px-2 py-2">${c.customer_name ?? ''}</td>
                    <td class="px-2 py-2">${c.contact_number ?? ''}</td>
                    <td class="px-2 py-2">${c.contact_number_2 ?? ''}</td>
                    <td class="px-2 py-2">${c.gender ?? ''}</td>
                    <td class="px-2 py-2">${c.dob ?? ''}</td>
                    <td class="px-2 py-2">${c.nic ?? ''}</td>
                    <td class="px-2 py-2">${c.cities_id ?? ''}</td>
                    <td class="px-2 py-2">${c.status_id ?? ''}</td>
                    <td class="px-2 py-2">${c.email ?? ''}</td>
                    <td class="px-2 py-2">${c.address_line_1 ?? ''}</td>
                    <td class="px-2 py-2">${c.address_line_2 ?? ''}</td>
                    <td class="px-2 py-2">${c.due_amount ?? ''}</td>
                    <td class="px-2 py-2">${c.user_id ?? ''}</td>
                    <td class="px-2 py-2">${c.city_name ?? ''}</td>
                    <td class="px-2 py-2">${c.customer_id ?? ''}</td>
                    <td class="px-2 py-2">${c.branch_id ?? ''}</td>
                    <td class="px-2 py-2">${c.reason ?? ''}</td>
                    <td class="px-2 py-2">${c.latitude ?? ''}</td>
                    <td class="px-2 py-2">${c.longitude ?? ''}</td>
                    <td class="px-2 py-2 space-x-2">
                        <button class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 transition" onclick='openEditModal(${JSON.stringify(c)})'>Edit</button>
                        <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition" onclick="deleteCustomer(${c.id})">Delete</button>
                    </td>
                </tr>
            `;
        });
    }
    loadCustomers();

    // Register customer
    document.getElementById('registerForm').onsubmit = async function(e) {
        e.preventDefault();
        const form = e.target;
        const data = Object.fromEntries(new FormData(form).entries());
        try {
            const res = await fetch('/customer/register', {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(data)
            });
            const result = await res.json();
            if (res.ok) {
                alert('Registration successful!');
                document.getElementById('registerModal').classList.add('hidden');
                loadCustomers();
                form.reset();
            } else {
                alert(result.message || 'Registration failed');
            }
        } catch (err) {
            alert('An error occurred');
        }
    };

    // Edit customer modal
    window.openEditModal = function(customer) {
        customer = typeof customer === 'string' ? JSON.parse(customer) : customer;
        document.getElementById('edit_id').value = customer.id ?? '';
        document.getElementById('edit_customer_name').value = customer.customer_name ?? '';
        document.getElementById('edit_contact_number').value = customer.contact_number ?? '';
        document.getElementById('edit_contact_number_2').value = customer.contact_number_2 ?? '';
        document.getElementById('edit_gender').value = customer.gender ?? '';
        document.getElementById('edit_dob').value = customer.dob ?? '';
        document.getElementById('edit_nic').value = customer.nic ?? '';
        document.getElementById('edit_cities_id').value = customer.cities_id ?? '';
        document.getElementById('edit_status_id').value = customer.status_id ?? '';
        document.getElementById('edit_email').value = customer.email ?? '';
        document.getElementById('edit_address_line_1').value = customer.address_line_1 ?? '';
        document.getElementById('edit_address_line_2').value = customer.address_line_2 ?? '';
        document.getElementById('edit_due_amount').value = customer.due_amount ?? '';
        document.getElementById('edit_user_id').value = customer.user_id ?? '';
        document.getElementById('edit_city_name').value = customer.city_name ?? '';
        document.getElementById('edit_customer_id').value = customer.customer_id ?? '';
        document.getElementById('edit_branch_id').value = customer.branch_id ?? '';
        document.getElementById('edit_reason').value = customer.reason ?? '';
        document.getElementById('edit_latitude').value = customer.latitude ?? '';
        document.getElementById('edit_longitude').value = customer.longitude ?? '';
        document.getElementById('editModal').classList.remove('hidden');
    };

    // Edit customer
    document.getElementById('editForm').onsubmit = async function(e) {
        e.preventDefault();
        const form = e.target;
        const id = form.edit_id.value;
        const data = Object.fromEntries(new FormData(form).entries());
        delete data.id;
        try {
            const res = await fetch(`/api/customers/${id}`, {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(data)
            });
            const result = await res.json();
            if (res.ok) {
                alert('Customer updated!');
                document.getElementById('editModal').classList.add('hidden');
                loadCustomers();
            } else {
                alert(result.message || 'Update failed');
            }
        } catch (err) {
            alert('An error occurred');
        }
    };

    // Delete customer
    window.deleteCustomer = async function(id) {
        if (!confirm('Are you sure you want to delete this customer?')) return;
        try {
            const res = await fetch(`/api/customers/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                }
            });
            const result = await res.json();
            if (res.ok) {
                alert('Customer deleted!');
                loadCustomers();
            } else {
                alert(result.message || 'Delete failed');
            }
        } catch (err) {
            alert('An error occurred');
        }
    };
    </script>
</body>
</html>