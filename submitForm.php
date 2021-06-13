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
            <div class="input-group mb-3 w-25">
              <div class="input-group-prepend">
                <span class="input-group-text">Your name</span>
              </div>
              <input type="text" class="form-control"  v-model="form.name" id="name" placeholder="name" aria-label="name" aria-describedby="basic-addon1">
            </div>
            
            <div class="input-group mb-3 w-25">
              <div class="input-group-prepend">
                <span class="input-group-text">@Your email</span>
              </div>
              <input type="text" class="form-control" v-model="form.email"  id="email" placeholder="email" aria-label="email" aria-describedby="basic-addon1">
            </div>
            
            <div class="input-group mb-3 w-25">
              <div class="input-group-prepend">
                <span class="input-group-text">Your password</span>
              </div>
              <input type="password" class="form-control"v-model="form.password" id="password" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   
    </div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    let app= new Vue({
        el: '#app', 
        data:{        
          form:{ 
            name: null,
            email: null,
            password: null
           },
        },
        methods:{
            submit()
            {
               // axios.post('/test.php',this.form)
              console.log(this.form)
            }
        }
    })
</script>
</body>
</html>