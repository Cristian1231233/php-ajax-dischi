

const app = new Vue({

    el: '#app',

    data:{
        genreSelected: 'All',
        discs: [],

    },

    methods:{
        getApi(){
            axios.get('http://localhost/php-ajax-dischi/json.php', {
                params:{
                    genre: this.genreSelected
                }
            })
            .then( r => {
                this.discs = r.data;
                console.log('this.musics', this.discs);
                
               
            })
            .catch( e => {
                console.log(e);
            });
                
            console.log('DENTRO GETAPI');
                
                
        }

    },
    mounted(){
        this.getApi();
        console.log('ffff');
    }


});
