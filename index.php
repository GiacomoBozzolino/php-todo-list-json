<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>To do list</title>
    <link rel="stylesheet" href="./css./style.css">
</head>
    <body>
        <div id="app">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                                <h1>PHP TO DO LIST JSON</h1>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul>
                            <li v-for="(item, index) in myList" :key="index">
                                {{item.text}}
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div>
                        <div class="input-group">
                            <input type="text" @keyup.enter="addTask" v-model="todoItem"  placeholder="Todo" class="form-control px-3">
                            <button class="btn btn-success mx-2" @click="addTask">Aggiungi</button>
                            
                        </div>
                
                
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- SCRIPT -->
       
        <script type="text/javascript" src="./js/script.js"></script>
    </body>
</html>