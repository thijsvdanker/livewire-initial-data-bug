<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        @livewireStyles
    </head>
    <body>
       <p>welcome.blade.php</p>
        <div id="app">
            <h1>With errors</h1>
           <livewire:livewire-component-with-error />
           <h1>No errors</h1>
           <livewire:livewire-component-no-error />
       </div>
        <script>
            var vm = new Vue({
                el: '#app'
            })
         </script>
       @livewireScripts
    </body>
</html>
