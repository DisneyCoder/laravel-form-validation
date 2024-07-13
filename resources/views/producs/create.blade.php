@extends('layout.app')

@section('content')
<section class="max-w-2xl mx-auto">
    <h1 class="text-5xl text-white font-bold mb-5 p-3">Create New Product</h1>
    {{-- form --}}

    <form >
        {{-- Name | input text --}}
        {{-- Product band name | input text --}}
        {{-- Product category | input select --}}
        {{-- Product price | input number --}}
        {{-- Product Image | input file --}}
        {{-- Product description | input textarea --}}
        {{-- Feature Product | input checkbox --}}



    <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
      <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product name" required />
    </div>


    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

    </form>
</section>
@endsection
