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
        <div>
          <p class="text-sm font-semibold">{{ auth()->user()->name }}</p>
          <p class="text-xs text-gray-500">Admin</p>
        </div>
      </div>
    </header>

    <h2 class="text-lg font-bold mb-4 text-blue-600">USERS</h2>

      <div class="overflow-x-auto bg-white rounded-xl shadow">

        <!-- <table class="w-full text-left border-collapse">
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
        </table> -->


        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-gray-100 text-gray-600">
              <th class="px-6 py-3">Username</th>
              <th class="px-6 py-3">Email</th>
              <th class="px-6 py-3">Online</th>
              <!-- <th class="px-6 py-3">Is-admin</th> -->
              <!-- <th class="px-6 py-3 bg-blue-400 text-white">SEE MORE</th> -->

              <!-- <th class="px-6 py-3 bg-green-400 text-white">EDIT</th>  -->
              <th class="px-6 py-3 bg-red-400 text-white ">DELETE</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allUser as $user)
            <tr class="border-t">
              <td class="px-6 py-3">{{$user->name}}</td>
              <td class="px-6 py-3">{{$user->email}}</td>
              <!-- <td class="px-6 py-3">yes</td> -->
              <td class="px-6 py-3">
                <span class=" p-2 rounded-full bg-{{ $user->last_active_at >= now()->subMinutes(2) ? 'green' : 'red' }}-500">
                    {{ $user->last_active_at >= now()->subMinutes(2) ? 'Online' : 'Offline'  }}
                </span>
              </td>
              <!-- <td class="px-6 py-3 text-center"><button class="text-3xl text-blue-500 w-10 h-10 rounded-xl " ><i class='bx bx-show'></i></button></td> -->
              <!-- <td class="px-6 py-3 text-center"><a href="update/{{$user->id}}"><button command="show-modal" commandfor="dialog" class="text-3xl text-green-500 w-10 h-10 rounded-xl " ><i class='bx bxs-edit-alt'></i></button></a></td>  -->
              <td class="px-6 py-3 text-center"><a href="delete/{{$user->id}}"><button class="text-3xl text-red-500 w-10 h-10 rounded-xl " ><i class='bx bx-trash'></i></button></a></td>
            </tr>
            @endforeach
            <!-- here -->
          </tbody>
        </table>
      </div>
    </main>

    </body>
</html>
