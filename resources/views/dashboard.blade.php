<x-app-layout>
    <!-- import -->
    <head>
        <script src="https://kit.fontawesome.com/ac9217cc6c.js" crossorigin="anonymous"></script>
    </head>
    
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
            <x-jet-button style='max-width: 20%;'> maak een Bookmarker aan </x-jet-button>
        </div>
        
    </div>

</x-app-layout>
