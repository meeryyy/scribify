@extends('layouts.app')  <!-- Assurez-vous d'ajuster cela en fonction de votre structure de fichiers Laravel -->

@section('content')
<form class=" mx-auto pb-20 " enctype="multipart/form-data" action="{{ route('chapitre.update',$chapitre->id) }}" method="post">

    @method('PUT')


@csrf


<div class=" flex justify-end rounded-md shadow-sm mb-2  mt-2" role="group">
    <a href="{{ route('histoire.create') }}">
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
        <input type="file" name="image" value="{{$chapitre->image}}"  id="choisirImage" class="hidden">

        <label for="choisirImage" class="cursor-pointer block p-4 text-black dark:text-white text-center font-bold text-4xl"><i class="fas fa-camera"></i> </label>
        <div id="imageContainer" class="overflow-hidden max-w-full flex justify-center">
          <!-- Laissez la hauteur de l'image ajuster automatiquement -->
          <img id="selectedImage" class="w-56 object-contain " src="" alt="">
        </div>
      </div>
  </div>
  <div class="">
    <div class=" min-h-28 mt-16 grid place-items-center">     
       <textarea name="title"   class="overflow-hidden text-center bg-gray-100 text-black dark:text-white dark:bg-zinc-900 border-none		" id="tt" contenteditable="true"   rows="1" >{{$chapitre->title}}</textarea>
       <hr class="h-px  w-[95%] bg-gray-200 border-0 dark:bg-gray-700">
    </div>
     </div> 
     <div class="">
        <div class=" grid place-items-center">     
           <textarea name="description"  class=" w-[95%] overflow-hidden  bg-gray-100 text-black dark:text-white dark:bg-zinc-900 border-0" id="gg" contenteditable="true" placeholder="Enter your text"  rows="20" >{{$chapitre->description}}"</textarea>
        </div>
         </div> 

    

   
  
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








