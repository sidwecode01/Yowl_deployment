<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yowl Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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


      <div class="overflow-x-auto bg-white rounded-xl shadow">

        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-gray-100 text-gray-600">
              <th class="px-6 py-3">Title</th>
              <th class="px-6 py-3">Link</th>
              <th class="px-6 py-3"></th>
              <th class="px-6 py-3"></th>
              <th class="px-6 py-3"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
               <tr class="border-t">
                  <td class="px-6 py-3"><strong>{{ $post->title }}</strong></td>
                  <td class="px-6 py-3"><a class="text-blue-500" href="{{ $post->url }}">{{ $post->url }}</a></td>
                  <td class="px-6 py-3"></td>
                  <td class="px-6 py-3">
                    <button command="show-modal" commandfor="dialog" class="rounded-xl px-4 py-2 hover:text-green-700 text-blue-600 text-center">
                      <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
                      <i class="fa-solid fa-eye"></i>
                  </button>
                    <el-dialog>
                        <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto h-500 max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent ">
                            <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                            <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                            <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white w-80 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4 h-80">
                                    <img src="{{ $post->image }}" alt="">
                                </div>
                                <div class="px-4 pb-4 sm:p-6 sm:pb-4">
                                    <strong>{{ $post->title }}</strong>
                                </div>
                           
                                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <a class="text-blue-500" href="{{ $post->url }}">{{ $post->url }}</a>
                                </div>

                                <div class="bg-white px-4 w-80 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="button" command="close" commandfor="dialog" class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Cancel</button>
                                </div>
                            </el-dialog-panel>
                            </div>
                        </dialog>
                    </el-dialog>
                  </td>
               </tr>
            @endforeach
          </tbody>
        </table>
      </div>

   </body>
</html>