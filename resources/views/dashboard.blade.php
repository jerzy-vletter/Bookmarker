<x-app-layout>
    <!-- import -->
    <head>
        <script src="https://kit.fontawesome.com/ac9217cc6c.js" crossorigin="anonymous"></script>
    </head>

     <!-- this style section needs to be moved -->
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
        }
        
        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        </style>
    
    <!-- list bar -->
    <div style='float: left; border: solid; width: 12%; min-height: 870px; black 1px'>
        
        <!--  team list bar -->
        <div style='border: solid grey 4px; padding: 10px; margin: 2px;'>
            <h1> Team list <i class="fa fa-arrow-down"></i> </h1>
            <p> List 1 </p>
            <p> List 2 </p>
            <p> List 3 </p>
        </div>

        <!-- my list bar -->
        <div style='border: solid grey 4px; padding: 10px; margin: 2px;'>
            <h1> My lists <i class="fa fa-arrow-down"></i> </h1>
            <p> List 1 </p>
            <p> List 2 </p>
            <p> List 3 </p>

            <!-- make a listr -->
            <x-jet-button style='max-width: 100%;'> maak een list aan </x-jet-button>
        </div>

    </div>

    <!-- bookmarker list -->
    <div style="border: solid; black 1px; margin-left: 25%; margin-right: 25%; min-height: 700px">

        <input class="text-center text-2x1" style='border: solid black 1px; width: 100%' placeholder="zoekbalk" type="text" >

        <!-- bookmarker item -->
        <div style='border: solid grey 4px; padding: 10px; margin: 2px; '>
            <p class='text-lg'> Bookmarker voorbeeld 1 <i class="fa fa-arrow-down"></i> </p>
        </div>

        <div style='border: solid grey 4px; padding: 10px; margin: 2px; '>
            <p class='text-lg'> Bookmarker voorbeeld 2 <i class="fa fa-arrow-down"></i> </p>
        </div>

        <div style='border: solid grey 4px; padding: 10px; margin: 2px; '>
            <p class='text-lg'> Bookmarker voorbeeld 3 <i class="fa fa-arrow-down"></i> </p>
        </div>

        <!-- make bookmarker -->
        <div class="h-56 grid grid-cols-3 gap-4 content-center">
            <x-jet-button id="myBtn" style='max-width: 20%;'> maak een Bookmarker aan </x-jet-button>
        </div>

        
            </head>
            <body>    
            
            <!-- The Modal -->
            <div id="myModal" class="modal">
            
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <h1>Make a bookmarker</h1>
                <form method="POST" action="/dashboard" class="grid place-items-center ">
                    @csrf
                      <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-Bookmarker-name">
                            Bookmarker name
                          </label>
                        </div>
                        <div class="md:w-2/3">
                          <input name='name' class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                        </div>
                      </div>
                      <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                            Bookmarker description
                          </label>
                        </div>
                        <div class="md:w-2/3">
                          <input name='description' class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                        </div>
                      </div>
              
                      <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <x-jet-button style='max-width: 20%;'> add </x-jet-button>
                        </div>
                      </div>
                    </form>
              </div>
            
            </div>
            
            <script>
            // Get the modal
            var modal = document.getElementById("myModal");
            
            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
              modal.style.display = "block";
            }
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>
        

        
        
    </div>

</x-app-layout>
