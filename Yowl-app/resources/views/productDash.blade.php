<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yowl Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />

</head>
<body class="flex h-screen bg-gray-50">
    <!-- bar vertical -->
  <div class="py-4 gap-8 items-center w-64 bg-blue-600 text-white flex flex-col">
     <div><img class="w-20 h-16" src="../Logo/Logo-removebg-preview - Modifié.png" alt=""></div>
     <div class="  p-4 w-full  bg-white"></div>
     <div class="text-[clamp(1rem,2vw,2rem)]"><a href="{{ route('dash') }}"><i class='bx bxs-dashboard text-xl text-[clamp(1rem,2vw,2rem)]' ></i><span class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Dashboard</span><i class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]' ></i></a></div>
     <div>
        <i class='bx bxs-dollar-circle text-2xl text-[clamp(1rem,2vw,2rem)]'>
        <a href="{{ route('users') }}"></i>
        <span class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Customers</span><i class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]' ></i></a>
      </div>

     <div><a href="{{ route('products') }}"><i class='bx bxs-circle-three-quarter text-2xl text-[clamp(1rem,2vw,2rem)]'></i><span class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Products</span><i class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]' ></i></a></div>
  </div>
  <!-- Main  -->
  <div class="flex-1 flex flex-col">

    <!-- Header -->
    <header class="flex justify-between items-center bg-white shadow px-6 py-4">
      <div class="flex items-center gap-6">
        <div class="border rounded-lg p-1"><i class='bx bx-search'></i> <input type="text" placeholder="Search..." class="outline-none px-3 py-1 text-sm"></div>
        <nav class="flex gap-4 text-gray-700 font-medium">
          <a href="{{ route('landing') }}" class="hover:text-blue-600">Home</a>
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

    <h2 class="text-lg font-bold mb-4 text-blue-600">PRODUCTS</h2>

      
   </body>
</html>