    {{-- Nothing in the world is as soft and yielding as water. --}}

{{-- ------navbar------ --}}
@include('layouts.includes.nav')

{{-- -------Add btn-------- --}}
    <x-add_btn>
        <a href="{{ route('subject.create') }}"> Add Subject </a>
    </x-add_btn>

{{-- --X-----Add btn----X---- --}}

{{-- --------------- subjects Info Table ------------------- --}}
<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Subject ID</th>
              <th class="px-4 py-3">Subject Name</th>
              <th class="px-4 py-3">Cost Amount</th>
              <th class="px-4 py-3">Actions</th>
            </tr>
          </thead>
            @foreach ($subject as $subjects)
          <tbody class="bg-white">
            <tr class="text-gray-700">
                <td class="px-4 py-3 text-ms font-semibold border">{{ $subjects->subject_id }}</td>
{{--
              <td class="px-4 py-3 text-xs border">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span>
              </td>
--}}
              <td class="px-4 py-3 text-sm border">{{ $subjects->subject_name }}</td>
              <td class="px-4 py-3 text-sm border">$JMD{{ $subjects->cost_amount }}</td>
              <td class="px-4 py-3 text-sm border">
                <div class="flex justify-around">
                  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                      <a href="#">Edit</a>
                  </button>
                  <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                      <a wire:click="del({{ $subjects->id }})">Delete</a>
                  </button>
                  </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
{{-- ------X---------- subjects Info Table ----------X--------- --}}

