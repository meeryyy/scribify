{{-- @extends('layouts.app')





@section('content')
{{-- <div class="flex justify-around  mx-40 mt-4 ">

    <div class=" h-[270px] w-[190px] flex flex-col justify-end mt-10   ">
        <img id="imageContainer" class="h-full rounded-lg" />  
        
<button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-white bg-fuchsia-900 hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5  py-2.5 text-center inline-flex items-center dark:bg-fuchsia-950 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">add image <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-dark ">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
      <li>

        <input type="file" name="image" id="image"
        class="block w-full p-2 text-fuchsia-950 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
       </li>
 
   
    </ul>
</div>
    </div>
</div>


{{-- <div>
    <textarea id="tt" rows="4" aria-multiline="true" contenteditable="true" class=" border-0 text-wrap overflow-hidden resize-none  block p-2.5 w-full  text-gray-900 bg-gray-50 rounded-lg    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
</div>

<div>
    <textarea id="gg" rows="4" contenteditable="true" ></textarea>
</div> --}}

{{-- 
<div class="">
 <div class=" min-h-28 mt-16 grid place-items-center">     
    <textarea  id="tt" contenteditable="true"  rows="2" >IYHUIHUI</textarea>
 </div>
  </div> --}}
{{-- 
  <div class="mx-32 flex justify-center items-center h-screen">
    <textarea id="tt" rows="2" class="  border-0 text-wrap overflow-hidden resize-none block p-2.5 w-1/2 text-center text-gray-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
  </div>



<form class=" mx-auto pb-20 " enctype="multipart/form-data" action="{{ route('chapitre.store') }}"
    method="post">
    @csrf
    <div class="mb-6 w-1/2 content-center">
        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Large input</label>
        
    </div>
 --}}

    
 








    


   


                {{-- <div class="mb-5">

                    @if (isset($chapitre) && $chapitre->image_path)
                        <!-- Afficher l'image existante lors de la mise à jour -->
                        <img src="{{ asset('storage/' . $chapitre->image_path) }}" alt="Image existante"
                            class="w-300 h-400 object-cover mb-2">
                    @endif
                     </div>
 --}}








                     {{-- <script>
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
                        
                        } --}}



{{-- 
                          // Your existing JavaScript code for dynamic textarea height
//   var textarea = document.getElementById('tt');
//   textarea.addEventListener('input', function () {
//     this.style.height = 'auto';
//     this.style.height = (this.scrollHeight) + 'px';
//   });


//                         var textarea = document.getElementById('tt');

// // Add an input event listener to dynamically adjust the height
// textarea.addEventListener('input', function () {
//   this.style.height = 'auto';
//   this.style.height = (this.scrollHeight) + 'px';
// });


                    </script>
                     
        </div>
    </div>
</form>

@endsection --}}



@extends('layouts.app')  <!-- Assurez-vous d'ajuster cela en fonction de votre structure de fichiers Laravel -->

@section('content')
<form class=" mx-auto pb-20 " enctype="multipart/form-data" action="{{ route('chapitre.store') }}"
method="post">
@csrf

{{-- @php echo $_GET['id'] @endphp --}}

<div class=" flex justify-end rounded-md shadow-sm mb-2  mt-2" role="group">
    <a href="{{ route('chapitre.create') }}">
        <button type="button" class="focus:outline-none mx-3 text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
            Cancel
        </button>
    </a>

    <input type="submit" value="Save" class="focus:outline-none mx-6 text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">

  </div>
  
  <div class="w-full  p-8 bg-white divide-y divide-gray-100 rounded-lg shadow  dark:bg-zinc-900 ">
    <!-- Votre formulaire de chapitre ici -->

    <!-- Ajoutez le champ pour choisir l'image du chapitre -->
    <div class="mb-4">
        <input type="file" name="image" id="choisirImage" class="hidden">

        <label for="choisirImage" class="cursor-pointer block p-4 text-black dark:text-white text-center font-bold text-4xl"><i class="fas fa-camera"></i> </label>
        <div id="imageContainer" class="overflow-hidden max-w-full flex justify-center">
          <!-- Laissez la hauteur de l'image ajuster automatiquement -->
          <img id="selectedImage" class="w-56 object-contain " src="" alt="">
        </div>
      </div>
  </div>
  <div class="">
    <div class=" min-h-28 mt-16 grid place-items-center">     
       <textarea name="title" class="overflow-hidden text-center bg-gray-100 text-black dark:text-white dark:bg-zinc-900 border-none		" id="tt" contenteditable="true"   rows="1" >Untitled Part</textarea>
       <hr class="h-px  w-[95%] bg-gray-200 border-0 dark:bg-gray-700">
    </div>
     </div> 
     <div class="">
        <div class=" grid place-items-center">     
           <textarea name="description" class=" w-[95%] overflow-hidden  bg-gray-100 text-black dark:text-white dark:bg-zinc-900 border-0" id="gg" contenteditable="true" placeholder="Enter your text"  rows="20" ></textarea>
        </div>
         </div> 

    

   
   <input type="hidden" name="histoires_id" value="<?=$_GET['id']?>">   
  
  <div class="mb-5">

    @if (isset($chapitre) && $chapitre->image_path)
        <!-- Afficher l'image existante lors de la mise à jour -->
        <img src="{{ asset('storage/' . $chapitre->image_path) }}" alt="Image existante"
            class="w-300 h-400 object-cover mb-2">
    @endif
     </div>
</form>


  <script>
    document.getElementById('choisirImage').addEventListener('change', function (e) {
      const selectedImage = document.getElementById('selectedImage');
      const file = e.target.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function (readerEvent) {
          selectedImage.src = readerEvent.target.result;
        };

        reader.readAsDataURL(file);
      }
    });
   


                     var textarea = document.getElementById('tt');
                    textarea.addEventListener('input', function () {
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px';
                     });
                     var textarea = document.getElementById('gg');
                    textarea.addEventListener('input', function () {
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px';
                     });

  </script>
  

 








    


   











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





















