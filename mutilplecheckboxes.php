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
        <form action="#" @submit.prevent="submit"  method="post">            
            <div class="group">
               <input type="checkbox" value="Bananas" v-model="choices"> Bananas               
            </div> 
               <div class="group">             
               <input type="checkbox" value="soyamilk" v-model="choices"> soyamilk              
            </div> 
               <div class="group">              
               <input type="checkbox" value="something else" v-model="choices"> something else"             
            </div>  
            <div class="group py-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    let app= new Vue({
        el: '#app', 
        data:{    
           choices: []
        },
        methods:{   
           submit()
           {
            //console.log(this.choices)
           }
        }
    })
</script>
</body>
</html>