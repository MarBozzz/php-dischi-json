<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJs -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <title>PHP Dischi JSON</title>
</head>
<body>
  <div class="" id="app">

    <div class="container">
      <h1 class="red p-5 text-center">Al-boom</h1>
      <ul class="row">
        <li class="col-4" v-for="(album, index) in albumsArray" :key="index">
          <div class="card mb-5 text-center">
            <img class="pb-4" :src="album.poster" :alt="album.title">
            <h4 class="pb-2">{{album.title}}</h4>
            <h5>{{album.author}}</h5>
            <!-- <span>{{album.genre}}</span>
            <span>{{album.year}}</span><br> -->
          </div>
        </li>
      </ul>
    </div>
 
  </div>
</body>
<script src="./js/script.js"></script>
</html>