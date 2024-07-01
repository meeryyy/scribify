@extends('layouts.app')


@section('content')
<form class="mx-auto pb-20 grid grid-cols-1 sm:grid-cols-2 gap-6 mt-20" enctype="multipart/form-data" action="{{ route('histoire.update',$histoire->id) }}" method="post">
    @method('PUT')
    @csrf

    <!-- Image -->
    <div class="sm:col-span-1 h-[270px] w-[190px] mx-auto mb-20">
        <img id="imageContainer" class="h-full rounded-lg" />

        <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-white bg-fuchsia-900 hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-fuchsia-950 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Add a cover
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-dark">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                <li>
                    <input type="file" value="{{$histoire->image}}" name="image" id="image" class="block w-full p-2 text-fuchsia-950 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </li>
            </ul>
        </div>
    </div>

    <!-- Formulaire -->
    <div class="sm:col-span-1 w-full max-w-md mx-auto bg-white dark:bg-zinc-900 dark:text-white p-6 rounded-md shadow-md">
        <div class="mb-5">
            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" value="{{$histoire->title}}" name="title" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="message" value="{{$histoire->description}}" name="desc" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
        </div>

        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Copyright</label>
            <input type="text" value="{{$histoire->copyright}}" name="copyright" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-5">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Characters</label>
            <input type="text" value="{{$histoire->characters}}"   name="characters" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-5">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
            <input type="text" value="{{$histoire->tags}}" name="tags" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-5">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <select id="countries" name="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
            <select id="countries" name="langue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach ($langues as $langue)
                    <option value="{{ $langue->id }}">{{ $langue->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            @if (isset($histoire) && $histoire->image_path)
                <!-- Afficher l'image existante lors de la mise à jour -->
                <img src="{{ asset('storage/' . $histoire->image_path) }}" alt="Image existante" class="w-300 h-400 object-cover mb-2">
            @endif
        </div>

        <input type="submit" value="Passer" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-zinc-200 focus:outline-none bg-fuchsia-900 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-zinc-200 dark:text-black dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
    </div>
</form>
<script>
    document.getElementById('image').addEventListener('change', handleImageUpload);

    function handleImageUpload(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const imageData = e.target.result;
                displayImage(imageData);
            };

            reader.readAsDataURL(file);
        }
    }

    function displayImage(imageData) {
        const imageElement = document.getElementById('imageContainer');
        
        imageElement.src = imageData;
    
    }
</script>
@endsection

