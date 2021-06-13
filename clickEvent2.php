<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue</title>
</head>
<body>
    <div id="app">  
        <button @click="Increment">Add</button>             
             counter = {{ counter }}            
        <button @click="Decrement">Sub</button> 
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    let app= new Vue({
        el: '#app',   
      
     data:{
            counter: 1,
        },
    methods:{
        Increment(){
           // e.preventDefault() // prevent default behavior
            this.counter ++
        },
        Decrement(){
            this.counter--
        }
    }
    })
</script>
</body>
</html>