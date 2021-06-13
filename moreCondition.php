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
       <template>
           <span v-if="loaded"> {{ message}} </span>
           <span v-else> Please wait...</span>                        
       </template>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    let app= new Vue({
        el: '#app',
        data:{
            message: "Hallo Vue!",
            loaded: false,
        },
        mounted(){
            setTimeout(() =>{
               this.loaded = true
            },3000)
        }
    })
</script>
</body>
</html>