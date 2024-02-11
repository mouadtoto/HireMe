@extends('layouts.mynav')
@section('home')
    @if (auth()->user()->confirm == 1)
        <div class="px-8 py-6 bg-green-400 text-white flex justify-between rounded">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                </svg>
                <p>Your Profile was registerd Succesfully</p>
            </div>
        </div>
        <div class="container mx-auto px-4">
            <div class=" flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg ">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                            <div class="relative">
                                <img alt="..."
                                    src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg"
                                    class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                            {{ $data->name }}
                        </h3>
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                            {{ $data->address }}
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-10">
                            <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>{{ $data->current_position }}
                        </div>
                        <div class="mb-2 text-blueGray-600">
                            <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>{{ $data->industry }}
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                    {{ $data->about }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@if (Ca)
    
@endif
        <div class="p-8 rounded border border-gray-200">
            <h1 class="font-medium text-3xl">Add User</h1>
            <p class="text-gray-600 mt-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos dolorem vel
                cupiditate laudantium dicta.</p>
            <form>
                <div class="mt-8 grid lg:grid-cols-2 gap-4">
                    <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Name</label> <input
                            type="text" name="name" id="name"
                            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                            placeholder="Enter your name" /> </div>
                    <div> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Email Adress</label>
                        <input type="text" name="email" id="email"
                            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                            placeholder="yourmail@provider.com" /> </div>
                    <div> <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">Job title</label>
                        <input type="text" name="job" id="job"
                            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                            placeholder="(ex. developer)" /> </div>
                    <div> <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Birthday</label> <input
                            type="text" name="brithday" id="brithday"
                            class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                            placeholder="(01/01/1993)" /> </div>
                </div>
                <div class="space-x-4 mt-8"> <button type="submit"
                        class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                    <!-- Secondary --> <button
                        class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</button>
                </div>
            </form>
        </div>
    @else
        <div class="px-8 py-6 bg-yellow-400 text-white flex justify-between rounded">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                </svg>
                <p>Please Register your profile</p>
            </div>
        </div>
        <h1 class="text-xl font-bold">Register Your Profile: </h1>

        <form action="{{ route('candidate.confirm') }}" method="POST" class="w-[50%] m-auto flex flex-col gap-2"
            enctype="multipart/form-data">
            @csrf
            <div class="flex gap-1 ">
                <div class="flex flex-col w-1/2">
                    <input type="file" id="photo" name="photo" value="{{ old('photo') }}"
                        class="border-none py-2 px-8 rounded-xl">
                    <input type="text" name="id" value="{{ auth()->user()->id }}"
                        class="border-none py-1 px-8 rounded-xl hidden">
                    <input type="text" name="name" value="{{ auth()->user()->name }}"
                        class="border-none py-1 px-8 rounded-xl hidden">
                    <input type="text" name="email" value="{{ auth()->user()->email }}"
                        class="border-none py-1 px-8 rounded-xl hidden">
                    @error('photo')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-1/2">
                    <input type="text" id="titre" name="titre" value="{{ old('titre') }}"
                        placeholder="entre your title" class="border-none py-2 px-8 rounded-xl">
                    @error('titre')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex gap-1 ">
                <div class="flex flex-col w-1/2">
                    <input type="text" id="current_position" name="current_position"
                        value="{{ old('current_position') }}" placeholder="entre your current position"
                        class="border-none py-2 px-8 rounded-xl">
                    @error('current_position')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-1/2">
                    <input type="text" id="industry" name="industry" value="{{ old('industry') }}"
                        placeholder="entre your industry" class="border-none py-2 px-8 rounded-xl">
                    @error('industry')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <input type="text" id="address" name="address" value="{{ old('address') }}"
                placeholder="entre your current address" class="border-none py-2 px-8 rounded-xl">
            @error('address')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <div class="flex flex-col">
                <input type="text-area" id="about" name="about" value="{{ old('about') }}"
                    placeholder="about ..." class="border-none py-5 px-8 rounded-xl">
                @error('about')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" class="p-2 bg-[#3465f8] font-medium rounded-lg" value="Register your Profile">
        </form>
    @endif
@endsection