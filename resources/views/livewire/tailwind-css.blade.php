<div>
    <b>Margin</b>
    <div style="border:2px dashed red;" class ='m-4'>Hai</div> <br>
    <div style="border:2px dashed red;" class ='m-10'>Hai</div> <br>

    <div style="border:2px dashed green;" class ="pt-10 pl-10 pr-10 pb-10">Hai</div> <br>

    <div style="border:2px dashed green;" class ="mx-auto">Hai</div> <br>

    <b>Background & Border Examples:</b>
    <div class="bg-blue-500">aloooo</div> <br>
    <div class="bg-purple-400 bg-purple-600">aloooo</div> <br>
    <div class="border-2 border-sky-500 border dashed rounded-lg">aloooo</div> <br>
    <div class="border border-blue-600 rounded-lg">aloooo</div> <br>

    <b>Animation</b>
    <div class="flex space-x-6 mt-10 justify-center">
    <!-- Bounce Animation -->
        <div class="w-24 h-24 bg-blue-500 text-white flex items-center justify-center rounded animate-bounce">
        Bounce
        </div>
    <!-- Spin Animation -->
        <div class="w-24 h-24 bg-green-500 text-white flex items-center justify-center rounded animate-spin">
        Spin
        </div>
    <!-- Pulse Animation with transition -->
        <div class="w-24 h-24 bg-red-500 text-white flex items-center justify-center rounded animate-pulse
        transition ease-in-out duration-300 hover:scale-110">
        Pulse
        </div>
    </div>

    <b>Card</b>
    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white p-4" >
        <img class="w-full" src="image/cat.jpg" alt="Sample">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Card Title</div>
            <p class="text-gray-700 text-base">This is a simple card example. </p>
        </div>
    </div>

    <b>Form & Button</b>
    <form class="space-y-4">
        <input type="text" placeholder="Name" class="border p-2 w-full rounded">
        <input type="email" placeholder="Email" class="border p-2 w-full
        rounded">
        <button class="bg-blue-500 text-white px-4 py-2 rounded
        hover:bg-blue-600">
            Submit
        </button>
    </form>

    {{-- <b>Modal</b>
    <div class="fixed inset-0 flex items-center justify-center bg-black
    bg-opacity-50">
        <div dialog id="dialog" class="bg-white p-6 rounded shadow-lg" >
            <h2 class="text-xl font-bold mb-4">Modal Title</h2>
            <p class="mb-4">This is a modal example.</p>
            <button class="bg-red-500 text-white px-4 py-2 rounded" type="button"  command="close" commandfor="dialog">Close</button>
        </div>
    </div> --}}

    <b>DaisyUi</b>
    <button
    class="inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-3 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900">
    Button
    </button>
    <button class="btn btn-primary">Button</button>

    <ul class="menu bg-base-200 rounded-box w-56">
        <li><a>Item 1</a></li>
        <li><a>Item 2</a></li>
        <li><a>Item 3</a></li>
    </ul>
</div>
