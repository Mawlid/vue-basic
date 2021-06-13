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
           {{ count }} is
           <span v-if="count < 5">
               too low
           </span>
           <span v-else-if="count >= 5 && count < 10">
               just right
           </span>
           <span v-else-if="count >= 10">
               too heigh
           </span>
       </template>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    let app= new Vue({
        el: '#app',
        data:{
            count: 1,
        },
        mounted(){
            setInterval(() =>{
                this.count = Math.floor(Math.random() * (20-1)+1)
            },1000)
        }
    })
</script>
</body>
</html>