const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "PHP Dischi JSON",
      urlApi: "http://localhost/php-dischi-json/PHP-Dischi-JSON/server.php",
      album: [],
      // nascondo il modale di default
      showModal: false,
      selectedAlbum: null,
    };
  },
  methods: {
    // chiamata API a server.php
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
    showDetails(disc) {
      // se modale true allora mostralo
      this.showModal = true;
      this.selectedAlbum = disc;
    },
    closeModal() {
      // se modale false allora nascondilo
      this.showModal = false;
      this.selectedAlbum = null;
    },
  },
  created() {
    this.getApi();
  },
}).mount("#app");
