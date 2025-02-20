<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Automated Payroll System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center p-8 bg-white shadow-xl rounded-lg max-w-lg">
        <h1 class="text-4xl font-bold text-blue-600">Welcome to Payroll System</h1>
        <p class="mt-4 text-gray-600">An automated solution to manage payroll efficiently and effortlessly.</p>
        <a href="{{ url('/dashboard') }}" class="mt-6 inline-block px-6 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-blue-600">Get Started</a>
    </div>
</body>
</html>