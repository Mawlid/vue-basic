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
               <input type="checkbox" id="autoplay" v-model="autoplay" @change="setAutoplay">
               Autoplay is {{ autoplay === true ? 'enabled' : 'disabled' }}
               
            </div>            
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    let app= new Vue({
        el: '#app', 
        data:{    
            autoplay: false,
        
        },
        methods:{   
            setAutoplay()
            {
                console.log(this.autoplay)
            }
        }
    })
</script>
</body>
</html>