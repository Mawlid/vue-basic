<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div id="app">             
               <div class="group">             
               <input type="radio" value="cat" v-model="choice"> Cat  
                <input type="radio" value="dog" v-model="choice"> Dog                
            </div> 
            <div v-if="choice==='cat'">Meow</div>
            <div v-else-if="choice==='dog'">Woof</div>
            <div v-else>Please choice</div>
        </form>
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    let app= new Vue({
        el: '#app', 
        data:{    
           choice: null
        },
        methods:{   
           submit()
           {
            console.log(this.choice)
           }
        }
    })
</script>
</body>
</html>