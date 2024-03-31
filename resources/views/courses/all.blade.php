@extends('layouts.plantilla')

@section('title', 'Courses.all')

@section('content')

<div class="relative py-16 bg-gradient-to-br from-sky-800 to-gray-200 pb-20">
    <div class="flex items-center justify-end h-10 p-6">
        <div class="relative">
            <form action="" class="relative mx-auto w-max">
                <input type="search" id="course-search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="      Search...">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-6 w-6 fill-current text-gray-400" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.703 14.297a7.5 7.5 0 1 1 1.414-1.414l5.304 5.303-1.414 1.414-5.304-5.303zm-6.203 0a5 5 0 1 0 10 0 5 5 0 0 0-10 0z" />
                    </svg>
                    {{-- <svg class="h-6 w-6 fill-current text-gray-400" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="5" fill="transparent" stroke="black" stroke-width="1" />
                        <line x1="12" y1="8" x2="12" y2="4" stroke="black" stroke-width="1" />
                        <line x1="12" y1="16" x2="12" y2="20" stroke="black" stroke-width="1" />
                        <line x1="8" y1="12" x2="4" y2="12" stroke="black" stroke-width="1" />
                        <line x1="16" y1="12" x2="20" y2="12" stroke="black" stroke-width="1" />
                    </svg> --}}
                </div>
            </form>
        </div>
    </div>

    <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
        <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
            <div class="rounded-xl bg-white shadow-xl">
                <div class="p-6 sm:p-16">
                    <div class="space-y-4">
                        <h2 class="mb-8 text-2xl text-cyan-900 font-bold">All Courses: </h2>
                    </div>
                    <div class="course-names-container">
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($courses as $course)
                            <a href="{{ route('courses.show', $course) }}" class="block hover:bg-gray-100">
                                <div class="mt-1 grid space-y-4">
                                    <button class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                        <div class="relative flex items-center space-x-4 justify-start">
                                            <span class="text-gray-500 font-medium">#{{ $counter }}</span>
                                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">{{ $course->name }}</span>
                                        </div>
                                    </button>
                                </div>
                            </a>
                            @php
                                $counter++;
                            @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const searchInput = document.getElementById('course-search');
    const courseButtons = document.querySelectorAll('.block');
    const markInstance = new Mark(document.querySelector('.course-names-container'));

    searchInput.addEventListener('input', function () {
        const searchQuery = this.value.trim().toLowerCase();

        courseButtons.forEach(function (button) {
            const courseName = button.querySelector('.text-gray-700').textContent.toLowerCase();

            if (searchQuery === '') {
                markInstance.unmark();
                button.style.display = 'block';
            } else {
                if (courseName.includes(searchQuery)) {
                    button.style.display = 'block';
                    markInstance.mark(searchQuery);
                } else {
                    button.style.display = 'none';
                }
            }
        });
    });
</script>

@endsection
