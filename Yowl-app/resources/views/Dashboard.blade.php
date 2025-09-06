<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yowl Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body class="flex h-screen bg-gray-50">
    <!-- bar vertical -->
  <div class="py-4 gap-8 items-center w-64 bg-blue-600 text-white flex flex-col">
     <div><img class="w-20 h-16" src="../Logo/Logo-removebg-preview - Modifié.png" alt=""></div>
     <div class="  p-4 w-full  bg-white"></div>
     <div class="text-[clamp(1rem,2vw,2rem)]"><i class='bx bxs-dashboard text-xl text-[clamp(1rem,2vw,2rem)]' ></i><span class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Dashboard</span><i class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]' ></i></div>
     <div><i class='bx bxs-dollar-circle text-2xl text-[clamp(1rem,2vw,2rem)]'></i><span class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Customers</span><i class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]' ></i></div>
     <div><i class='bx bxs-circle-three-quarter text-2xl text-[clamp(1rem,2vw,2rem)]'></i><span class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Products</span><i class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]' ></i></div>
  </div>

  <!-- Main  -->
  <div class="flex-1 flex flex-col">

    <!-- Header -->
    <header class="flex justify-between items-center bg-white shadow px-6 py-4">
      <div class="flex items-center gap-6">
        <div class="border rounded-lg p-1"><i class='bx bx-search'></i> <input type="text" placeholder="Search..." class="outline-none px-3 py-1 text-sm"></div>
        <nav class="flex gap-4 text-gray-700 font-medium">
          <a href="#" class="hover:text-blue-600">Home</a>
          <a href="#" class="hover:text-blue-600">Landing</a>
        </nav>
      </div>
      <div class="flex items-center gap-2">
        <img src="../Logo/Logo-removebg-preview - Modifié.png" alt="admin" class="w-8 h-8 rounded-full">
        <div>
          <p class="text-sm font-semibold">Sidyellow</p>
          <p class="text-xs text-gray-500">Admin</p>
        </div>
      </div>
    </header>
        <!-- my dashboard container -->
    <main class="p-6 overflow-y-auto">

      <!-- information kpi -->
      <h2 class="text-lg font-bold mb-4 text-blue-600">Dashboard</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-4 rounded-xl shadow">
          <p class="text-gray-600">Customers connected today</p>
          <p class="text-2xl font-bold">+34%</p>
          <div class="mt-2 h-2 bg-blue-100 rounded"></div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
          <p class="text-gray-600">Products</p>
          <p class="text-2xl font-bold">+34%</p>
          <div class="mt-2 h-2 bg-blue-100 rounded"></div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
          <p class="text-gray-600">Customers</p>
          <p class="text-2xl font-bold">86%</p>
          <div class="mt-2 h-2 bg-blue-100 rounded"></div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
          <p class="text-gray-600">Comments</p>
          <p class="text-2xl font-bold">86%</p>
          <div class="mt-2 h-2 bg-blue-100 rounded"></div>
        </div>
      </div>

      <!-- all Users -->
      <h2 class="text-lg font-bold mb-4 text-blue-600">USERS</h2>

      <div class="overflow-x-auto bg-white rounded-xl shadow">

        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-gray-100 text-gray-600">
              <th class="px-6 py-3">Username</th>
              <th class="px-6 py-3">Email</th>
              <th class="px-6 py-3">Online</th>
              <th class="px-6 py-3">Is-admin</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="px-6 py-3">Sidyellow</td>
              <td class="px-6 py-3">Sidyellow01@gmail.com</td>
              <td class="px-6 py-3">yes</td>
              <td class="px-6 py-3">yes</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

  </div>
</body>
</html>
