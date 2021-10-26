{{-- ------navbar------ --}}
@include('layouts.includes.nav')

{{---------Add btn----------}}
    <x-add_btn>
        <a href="student/create"> Add Student </a>
    </x-add_btn>
{{----X-----Add btn----X------}}

{{----------------- Students Info Table ---------------------}}
<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Student ID</th>
              <th class="px-4 py-3">Student Name</th>
              <th class="px-4 py-3">Date of Birth</th>
              <th class="px-4 py-3">Gender</th>
              <th class="px-4 py-3">Class</th>
              <th class="px-4 py-3">Phone No.</th>
              <th class="px-4 py-3">Email</th>
              <th class="px-4 py-3">Actions</th>
            </tr>
          </thead>
            @foreach ($student as $students)
          <tbody class="bg-white">
            <tr class="text-gray-700">
                <td class="px-4 py-3 text-ms font-semibold border">{{ $students->student_id }}</td>
                <td class="px-4 py-3 border">
                <div class="flex items-center text-sm">
                  <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="/img/profile icon.png" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold text-black">{{ $students->last_name }},</p>
                    <p class="text-xs text-gray-600">{{ $students->first_name }}</p>
                  </div>
                </div>
              </td>
{{--
              <td class="px-4 py-3 text-xs border">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span>
              </td>
--}}
              <td class="px-4 py-3 text-sm border">{{ $students->DOB }}</td>
              <td class="px-4 py-3 text-sm border">{{ $students->gender }}</td>
              <td class="px-4 py-3 text-ms font-semibold border">{{ $students->class }}</td>
              <td class="px-4 py-3 text-sm border">{{ $students->phone_number }}</td>
              <td class="px-4 py-3 text-sm border">{{ $students->email }}</td>
              <td class="px-4 py-3 text-sm border">
                  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                      <a href="#">Edit</a>
                  </button>
                  <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                      <a href="#">Delete</a>
                  </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
{{--------X---------- Students Info Table ----------X-----------}}

{{--------------Students Info Table Pagination-------------}}

<div class="flex justify-center">
    <button
        class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-l">
        <span >{!! $student->links() !!}</span>
    </button>
</div>

{{-------X-------Students Info Table Pagination-------X------}}
