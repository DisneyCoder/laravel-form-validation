@extends('layout.app')
@section('title', 'Create New Product ')
@section('content')


<section class="max-w-xl mx-auto p-4">
    <h1 class="text-4xl text-white font-bold mb-5">Create New Product</h1>
    {{-- form --}}

    <form class="rounded-lg bg-slate-800 p-3 " action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Name | input text --}}
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product name" required />
          </div>
        {{-- Product band name | input text --}}
        <div class="mb-5">
            <label for="brandName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand Name <span class="text-red-500">*</span></label>
            <input type="text" id="brandName" name="brandName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter brand name" required />
          </div>
        {{-- Product category | input select --}}
        <div class="mb-5">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category <span class="text-red-500">*</span></label>
            <select id="category" name="category" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a category</option>
                <option value="mp">Mobile Phone</option>
                <option value="gd">Gadget</option>
                <option value="clo">Cloth</option>
                <option value="sho">Shoes</option>
              </select>
        </div>
        {{-- Product price | input number --}}
        <div class="mb-5">
            <label for="productPrice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price <span class="text-red-500">*</span></label>
            <input type="number" id="productPrice" name="productPrice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="0" placeholder="Enter product price" required />
          </div>
        {{-- Product Image | input file --}}
        <div class="mb-5">
            <label for="productImage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Image <span class="text-red-500">*</span></label>
            <label for="productImage" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
              <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                  </svg>
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG (MAX. 5MB)</p>
              </div>
              <input id="productImage" name="productImage" type="file" class="hidden" accept=".jpg, .png, .jpeg" />
          </label>
          </div>
        {{-- Product description | input textarea --}}
        <div class="mb-5">

            <label for="productDescription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
            <textarea id="productDescription" name="productDescription" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Say something about product..."></textarea>

          </div>
        {{--  Product Stock| input checkbox --}}
        <div class="mb-5">
          <label for="productStock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Stock <span class="text-red-500">*</span></label>
          <input type="number" id="productStock" name="productStock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="0" placeholder="Enter product stock" required />
        </div>
        {{-- Product Submit --}}

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>







    </form>
</section>
@endsection
