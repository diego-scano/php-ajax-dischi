new Vue ({
  el: '#root',
  data: {
    albums: []
  },
  mounted() {
    const self = this;
    axios
      .get('http://localhost/php-ajax-dischi/app/server.php')
      .then(function(resp) {
        self.albums = resp.data;
      })
  }
})
