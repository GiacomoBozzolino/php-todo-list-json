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
        updateList(todoItem){
            const obj = {
                text: todoItem,
                done: false,
            }

            axios.post(this.apiUrls, obj, {headers: {'Content-Type': 'multipart/form-data'}}).then((response) => {
                this.todoItem='';
                this.myList = response.data;

            });

        }
    },




}).mount('#app');