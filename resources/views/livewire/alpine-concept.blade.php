<div>
   Hello from Alpine Concept
    <b>Counter</b>
    <div x-data="{ count: 0 }">
        <button @click="count++">+</button>
        <button @click="count--">-</button>
        <span x-text="count"></span>
    </div>
    <br><br>

    <div x-data="{ count: 0 }">
        <button @click="() => {
            console.log('Clicked');
            console.log(count);
            count++;
        }">+</button>
        <button @click="() =>{
            console.log('Clicked');
            console.log(count);
            count--;
        }">-</button>
        <span x-text="count"></span>
    </div>
    <br><br>

    <b>x-bind</b>
    <div x-data="{ color: 'red' }">
        <p x-bind:style="'color:' + color">This text is red</p>
        <button @click="color = 'blue'">Change to Blue</button>
    </div>
    <br><br>

    <b>x-on:click = @click</b>
    <div x-data="{ msg: 'Hello' }">
        <button x-on:click="msg = 'Button clicked!'" class="bg-blue-500 rounded">Click</button>
        <p x-text="msg"></p>
    </div>
    <br><br>

    <b>x-data</b>
    <div x-data="{ name: 'AlpineJS' }" >
        <p x-text="name" ></p>
    </div>

    <b> x-model</b>
    <div x-data="{ inputValue: '' }">
        <input type="text" x-model="inputValue" placeholder="Type here...">
        <p>You typed: <span x-text="inputValue"></span></p>
    </div>
    <br><br>

    <b>x-show</b>
    <div x-data="{ open: false }">
        <button @click="open = !open">Toggle</button>
        <p x-show="open">Now you see me!</p>
    </div>
    <br><br>

    <b>x-transition fade</b>
    <div x-data="{ open: false }">
        <button @click="open = !open">Toggle</button>
        <p x-show="open" x-transition>Hello with fade!</p>
    </div>
    <br><br>

    <b>x-for</b>
    <div x-data="{ items: ['Apple', 'Banana', 'Cherry'] }">
        <template x-for="item in items" :key="item">
        <p x-text="item"></p>
        </template>
    </div>
    <br><br>

    <b>x-if</b>
    <div x-data="{ loggedIn: false }">
        <button @click="loggedIn = !loggedIn">Toggle Login</button>
        <template x-if="loggedIn">
        <p>Welcome back!</p>
        </template>
    </div>
    <br><br>

    <b>x-init</b>
    <div x-data="{ msg: '' }" x-init="msg = 'Hello, initialized!'">
        <p x-text="msg"></p>
    </div>
    <br><br>

    <style>
    [x-cloak] {
    display: none !important;
    }
    </style>
    <b>x-cloak</b>
    <div x-data="{ show: true }">
        <p x-cloak x-data="{showForm:false}" x-init="setTimeout(()=> showForm = true ,1000)" x-show="showForm">This won’t flash on load</p>
    </div>


</div>
