const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "PHP Dischi JSON",
      discs: [],

      urlApi: "localhost/php-dischi-json/PHP Dischi JSON/server.php",
    };
  },
  methods: {
    getApi() {
      axios.get(this.urlApi).then((response) => {
        this.discs = response.data;
        console.log(response);
      });
    },
  },
  created() {
    this.getApi();
  },
}).mount("#app");
