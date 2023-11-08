<x-app-layout>
    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <h2 class="font-bold text-2xl">{{ __("User List") }}</h2>
            </div>
            <div class="bg-white overflow-hidden shadow-sm rounded-lg overflow-x-auto">
                <table class="table-auto md:table-fixed w-full">
                    <thead>
                        <tr class="bg-slate-800 text-white text-left uppercase text-sm">
                            <th class="p-4 w-1/12">No</th>
                            <th class="p-4">Name</th>
                            <th class="p-4">Email</th>
                            <th class="p-4">Role</th>
                            <th class="p-4">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @foreach ($users as $user)
                        <tr class="hover:bg-gray-100 text-sm">
                            <td class="p-4 w-1/12">{{ $loop->iteration }}</td>
                            <td class="p-4">{{ $user->name }}</td>
                            <td class="p-4">{{ $user->email }}</td>
                            @foreach($user->getRoleNames() as $role)
                            <td class="p-4">
                                @if($role == 'admin')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-800">
                                    {{ $role }}
                                </span>
                                @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-yellow-100 text-yellow-800">
                                    {{ $role }}
                                </span>
                                @endif
                            </td>
                            @endforeach
                            <td class="flex p-4">
                                <a href="{{ route('admin.users.show', $user) }}" class="inline px-2 capitalize">{{ __("View") }}</a>
                                <a href="" class="inline px-2 text-blue-500 capitalize">{{ __("Edit") }}</a>
                                <a href="" class="inline px-2 text-red-500 capitalize">{{ __("Delete") }}</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>