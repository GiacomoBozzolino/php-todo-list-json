const {createApp} = Vue;


createApp({
    data(){
        return{
            apiUrl:'server.php',
            todoList: "",
            myList:'',
                
        }
    },
    mounted() {

        axios.get(this.apiUrl).then((response) =>{
            this.myList = response.data;
        });

    },




}).mount('#app');