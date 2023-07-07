const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl:'server.php',
            todoItem: '',
            myList: null,
        }
    },
    mounted() {
        axios.get(this.apiUrl).then(response => {
            this.myList = response.data;
            console.log(this.myList)
        })
    },
    methods: {
        addTask() {
            const data = {
                todoItem : this.todoItem,
                
            }

            axios.post(this.apiUrl, data, {headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.todoItem = '';
                this.myList = response.data;
            })
        }
    },
}).mount('#app')