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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />

</head>

<body>
    <section class="flex flex-col md:flex-row h-auto min-h-screen bg-gray-50">
        <!-- bar vertical -->
        <div class="py-4 gap-8 items-center w-64 bg-blue-600 text-white flex flex-col">
            <div><img class="w-20 h-16" src="../Logo/Logo-removebg-preview - Modifié.png" alt=""></div>
            <div class="  p-4 w-full  bg-white"></div>
            <div class="text-[clamp(1rem,2vw,2rem)]"><a href="{{ route('dash') }}"><i
                        class='bx bxs-dashboard text-xl text-[clamp(1rem,2vw,2rem)]'></i><span
                        class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Dashboard</span><i
                        class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]'></i></a></div>
            <div>
                <i class='bx bxs-dollar-circle text-2xl text-[clamp(1rem,2vw,2rem)]'>
                    <a href="{{ route('users') }}"></i>
                <span class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Customers</span><i
                    class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]'></i></a>
            </div>

            <div><a href="{{ route('products') }}"><i
                        class='bx bxs-circle-three-quarter text-2xl text-[clamp(1rem,2vw,2rem)]'></i><span
                        class="mx-4 text-xl text-[clamp(1rem,2vw,2rem)]">Products</span><i
                        class='bx bx-chevron-right text-xl text-[clamp(1rem,2vw,2rem)]'></i></a></div>
        </div>

        <!-- Main  -->
        <div class="flex-1 flex flex-col">

            <!-- Header -->
            <header class="flex justify-between items-center bg-white shadow px-6 py-4">
                <div class="flex items-center gap-6">
                    {{-- <div class="border rounded-lg p-1"><i class='bx bx-search'></i> <input type="text" placeholder="Search..." class="outline-none px-3 py-1 text-sm"></div> --}}
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
                        <p class="text-gray-600">Customers per day</p>
                        <p class="text-2xl font-bold">Total : {{$totalUser}}</p>
                        <!-- <div class="mt-2 h-2 bg-blue-100 rounded"></div> -->
                        <canvas id="line-chart" role="img"></canvas>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow">
                        <p class="text-gray-600">Posts per day</p>
                        <p class="text-2xl font-bold">Total : {{$totalPost}}</p>
                        <!-- <div class="mt-2 h-2 bg-blue-100 rounded"></div> -->
                        <canvas id="line-chart2" role="img"></canvas>
                        <!-- here -->
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow">
                        <p class="text-gray-600">Likes per day</p>
                        <p class="text-2xl font-bold">Total : {{$totalLike}}</p>
                        <!-- <div class="mt-2 h-2 bg-blue-100 rounded"></div> -->
                        <canvas id="line-chart3"></canvas>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow">
                        <p class="text-gray-600">Comments per day</p>
                        <p class="text-2xl font-bold">Total : {{$totalComment}}</p>
                        <!-- <div class="mt-2 h-2 bg-blue-100 rounded"></div> -->
                        <canvas id="line-chart4"></canvas>
                    </div>
                </div>

                @if (session('status'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- all Users -->
                <div class=" mb-20">
                    <h2 class=" m-4 text-lg font-bold mb-4 text-blue-600">USERS</h2>

                    <div class="overflow-x-auto bg-white rounded-xl shadow">

                        <table class="w-full text-left border-collapse ">
                            <thead>
                                <tr class="bg-gray-100 text-gray-600">
                                    <th class="px-6 py-3">Username</th>
                                    <th class="px-6 py-3">Email</th>
                                    <th class="px-6 py-3">Online</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="border-t ">
                                        <td class="px-6 py-3">{{ $user->name }}</td>
                                        <td class="px-6 py-3">{{ $user->email }}</td>
                                        <td class="px-6 py-3">
                                            <span
                                                class=" p-2 rounded-full bg-{{ $user->last_active_at >= now()->subMinutes(2) ? 'green' : 'red' }}-500">
                                                {{ $user->last_active_at >= now()->subMinutes(10) ? 'Online' : 'Offline' }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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

                labels: @json($label),

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
                labels:@json($postLabel),

                datasets: [{
                    label: "Test",
                    backgroundColor: "rgba(245, 63, 135, 1)",
                    borderColor: "rgba(245, 63, 135, 1)",
                    data: @json($postData),
                    fill: true,

                }]
            };

            const data3 = {
                labels:  @json($likeLabel),
                datasets: [{
                    label: "Customers",
                    backgroundColor: 'rgba(47, 214, 135, 0.4)',
                    borderColor: 'rgba(47, 214, 135, 1)',
                    data: @json($likeData),
                    fill: true,

                }]
            };

            const data4 = {
                labels: @json($commentLabel),

                datasets: [{
                    label: 'Sidyellow',
                    backgroundColor: 'rgba(249, 102, 14, 0.4)',
                    borderColor: 'rgba(249, 102, 14, 0.67)',
                    data: @json($commentData),
                    fill: true,


                }]
            }


            // courb1


            const chart = new Chart(courbe1, {
                type: 'line',
                data: data1,
                options: {
                    elements: {
                        point: {
                            radius: 5,
                            backgroundColor: 'rgba(0,0,255, 0.5)',

                        }
                    }
                }
            });


            // courbe2

            const chart2 = new Chart(courbe2, {
                type: 'bar',
                data: data2,
                options: {
                    elements: {
                        point: {
                            radius: 5,
                            backgroundColor: 'rgba(0,0,255, 0.5)',

                        }
                    }
                }
            });

            //  courbe3
            const chart3 = new Chart(courbe3, {
                type: 'bar',
                data: data3,
                options: {
                    elements: {
                        point: {
                            radius: 1,
                            backgroundColor: 'rgba(0,0,255, 0.5)',

                        }
                    }
                }
            });


            //  courbe4

            const chart4 = new Chart(courbe4, {
                type: 'bar',
                data: data4,
                options: {
                    elements: {
                        point: {
                            radius: 5,


                        }
                    }
                }

            })
        </script>


{{-- <x-footer /> --}}

    </section>
</body>

</html>
