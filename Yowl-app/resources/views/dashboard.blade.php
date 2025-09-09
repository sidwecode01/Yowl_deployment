<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
        </h2>
    </x-slot>

    <!-- <div class="overflow-x-auto bg-white rounded-xl shadow">

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
            @foreach($users as $user)
            <tr class="border-t">
              <td class="px-6 py-3">{{ $user->name }}</td>
              <td class="px-6 py-3">{{$user->email}}</td>
              <td class="px-6 py-3">{{ Carbon\Carbon::parse($user->last_active_at)->diffForHumans() }}</td>
              <td class="px-6 py-3 ">
                <span class="p-2 rounded-full bg-{{ $user->last_active_at <= now()->subMinutes(2) ? 'green' : 'red' }}-500">
                    {{ $user->last_active_at <= now()->subMinutes(2) ? 'Online' : 'Offline'  }}
                </span>
                
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div> -->
</x-app-layout>
