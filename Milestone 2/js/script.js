Vue.config.devtools = true;

const app = new Vue(
    {
        el: '#root',
        data: {
            albums: []
        },
        methods: {
            // Funzione per richiamare l'API e salvare il contenuto dentro l'array "albums"
            getAlbums: function() {
                axios.get('http://localhost:8888/php-ajax-dischi/Milestone%202/server.php')
                .then((response) =>{
                    this.albums = response.data;
                });
            }
        },
        // Al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
        created: function() {
            this.getAlbums();
        }
    }
);