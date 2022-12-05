const { createApp } = Vue;

createApp({
  data(){
    return{
      apiUrl : 'server.php',
      albumsArray : []
    }
  },
  methods: {
    getAlbums(){
      axios.get(this.apiUrl)
      .then(result => {
        console.log(result.data);
        this.albumsArray = result.data;
      })    
    }
  },
  mounted(){
    this.getAlbums();
  }

}).mount('#app');