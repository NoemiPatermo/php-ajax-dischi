Vue.config.devtools = true;
new Vue(    
    {
        el: '#app',
        data: {
            discs: []
        },
        created() { // un evento particolare, dove l'applicazione vue non è stata ancora mostrata ma è stata caricata
            
            axios.get('http://localhost/php-ajax-dischi/backend/api.php')
                .then((response) => {
                    this.discs = response.data;
            })   

        }

    }
);