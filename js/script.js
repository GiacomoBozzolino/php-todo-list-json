const {createApp} = Vue;


createApp({
    data(){
        return{
            apiUrl:'server.php',
            todoItem: '',
            myList:'',
                
        }
    },
    mounted() {
        // CHIAMATA AXIOS PER RECUPERARE LA LISTA DAL SERVER
        axios.get(this.apiUrl).then((response) =>{
            this.myList = response.data;
        });

    },

    methods: {
        updateList(){
           let obj = this.todoItem

            axios.post(this.apiUrl, {obj}, {headers: {'Content-Type':'multipart/form-data'}}).then((response) => {
                this.todoItem='';
                this.myList = response.data;

            })
        }
    },




}).mount('#app');