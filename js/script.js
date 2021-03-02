new Vue ({
  el: '#root',
  data: {

  },
  mounted() {
    axios
      .get('http://localhost/php-ajax-dischi/app/server.php')
      .then(function(resp) {
        console.log(resp);
      })
  }
})
