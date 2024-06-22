const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "PHP Dischi JSON",
      urlApi: "http://localhost/php-dischi-json/PHP-Dischi-JSON/server.php",
      album: [],
    };
  },
  methods: {
    getApi() {
      axios
        .get(this.urlApi)
        .then((response) => {
          this.album = response.data;
        })
        .catch((error) => {
          console.error("There was an error!", error);
        });
    },
  },
  created() {
    this.getApi();
  },
}).mount("#app");
