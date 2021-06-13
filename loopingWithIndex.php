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
       <template class="post" v-for="post, index in posts">
        <div v-if="index==0">         
            <h1>{{ post.title}}(#{{index}})</h1>
            <p> {{ post.body }}</p>
        </div>
       </template>
      
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    let app= new Vue({
        el: '#app',
        data:{
            posts: [
              {id:1, title: 'Lorem ipsum dolor sit amet, consectetur adipisicing..', body: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, optio?'},
              {id:2, title: 'Lorem ipsum.', body: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, optio?'},
              {id:3, title: 'Lorem ipsum dolor..', body: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, optio?'},
              {id:4, title: 'Lorem ipsum dolor sit..', body: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, optio?'},
              {id:5, title: 'Lorem ipsum dolor sit amet..', body: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, optio?'},
              ] 
        },
        mounted(){
           
        }
    })
</script>
</body>
</html>