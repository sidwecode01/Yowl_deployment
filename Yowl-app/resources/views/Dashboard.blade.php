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

   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
          <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
        </nav>
      </div>
      <div class="flex items-center gap-2">
        <div>
          <p class="text-sm font-semibold">{{ auth()->user()->name }}</p>
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
          <!-- <div class="mt-2 h-2 bg-blue-100 rounded"></div> -->
           <canvas id="line-chart" role="img"></canvas>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
          <p class="text-gray-600">Products</p>
          <p class="text-2xl font-bold">+34%</p>
          <!-- <div class="mt-2 h-2 bg-blue-100 rounded"></div> -->
            <canvas id="line-chart2"  role="img"></canvas>
           <!-- here -->
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
          <p class="text-gray-600">Customers</p>
          <p class="text-2xl font-bold">86%</p>
          <!-- <div class="mt-2 h-2 bg-blue-100 rounded"></div> -->
           <canvas id="line-chart3"></canvas>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
          <p class="text-gray-600">Comments</p>
          <p class="text-2xl font-bold">86%</p>
          <!-- <div class="mt-2 h-2 bg-blue-100 rounded"></div> -->
           <canvas id="line-chart4"></canvas>
        </div>
      </div>

        @if (session("status"))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        {{ session("status") }}
                    </div>
            @endif
      <!-- all Users -->
      <h2 class="text-lg font-bold mb-4 text-blue-600">USERS</h2>

      <div class="overflow-x-auto bg-white rounded-xl shadow">

        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-gray-100 text-gray-600">
              <th class="px-6 py-3">Username</th>
              <th class="px-6 py-3">Email</th>
              <th class="px-6 py-3">Online</th>

            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr class="border-t">
              <td class="px-6 py-3">{{ $user->name }}</td>
              <td class="px-6 py-3">{{$user->email}}</td>
              <td class="px-6 py-3">
                <span class=" p-2 rounded-full bg-{{ $user->last_active_at >= now()->subMinutes(2) ? 'green' : 'red' }}-500">
                    {{ $user->last_active_at >= now()->subMinutes(10) ? 'Online' : 'Offline'  }}
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>

  </div>

   <script>
    Chart.defaults.global.elements.point.radius = 10
   </script>

    <script>

       const courbe1 = document.getElementById('line-chart').getContext("2d");
       const courbe2 = document.getElementById('line-chart2').getContext("2d");
       const courbe3 = document.getElementById('line-chart3').getContext("2d");
       const courbe4 = document.getElementById('line-chart4').getContext("2d");

       const data1 = {

             labels: [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"],

             datasets: [{
               label: "Users",
                backgroundColor: "#4c51bf",
                backgroundColor: 'rgba(63, 172, 245, 0.6)',
              borderColor: 'rgba(63, 172, 245, 1)',
              // data: [65, 78, 66, 44, 56, 67, 75],
              data: @json($usersPerDay),
              fill: true,
             }]
         };



        const data2 = {
          labels: [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"],

            datasets: [{
              label: "Test",
              backgroundColor: "rgba(245, 63, 135, 0.1)",
              borderColor: "rgba(245, 63, 135, 1)",
             data: [1, 26, 15, 74, 56, 67, 75],
              fill: true,

            }]
        };

        const data3 = {
          labels: [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],
          datasets: [{
            label: "Customers",
            backgroundColor: 'rgba(47, 214, 135, 0.4)',
            borderColor: 'rgba(47, 214, 135, 1)',
            data: [1,2,7,8,3,0,9],
            fill: true,

          }]
        };

        const data4 = {
          labels: [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],

          datasets: [{
            label: 'Sidyellow',
            backgroundColor: 'rgba(249, 102, 14, 0.4)',
            borderColor: 'rgba(249, 102, 14, 0.67)',
            data: [1,3,5,8,1,0,9],
            fill: true,


          }]
        }


      // courb1


       const chart = new Chart(courbe1, {
         type: 'line',
         data: data1,
         options: {
           elements: {
                 point:{
                   radius: 5,
                   backgroundColor: 'rgba(0,0,255, 0.5)',

             }
           }
         }
       });


        // courbe2

         const  chart2 = new Chart(courbe2 , {
           type: 'line',
           data: data2,
           options: {
            elements: {
                  point:{
                    radius: 5,
                    backgroundColor: 'rgba(0,0,255, 0.5)',

              }
            }
         }
         });

        //  courbe3
         const chart3 = new Chart(courbe3, {
          type: 'line',
          data: data3,
            options: {
            elements: {
                  point:{
                    radius: 5,
                    backgroundColor: 'rgba(0,0,255, 0.5)',

              }
            }
         }
         });


        //  courbe4

        const chart4 = new Chart(courbe4, {
          type: 'line',
          data: data4,
          options: {
            elements: {
                  point:{
                    radius: 5,


              }
            }
         }

        })

    </script>





        <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

<el-dialog>
  <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
    <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

    <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
      <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700"> -->
            <!-- Modal header -->
            <!-- <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div> -->
            <!-- Modal body -->
            <!-- <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new product
                </button>
            </form>
        </div> -->
      </el-dialog-panel>
    <!-- </div>
  </dialog>
</el-dialog>  -->




</body>
</html>
