

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>To do list</title>
    <link rel="stylesheet" href="./css./style.css">
</head>
    <body>
        <div id="app">

        <div>
            <ul>
                <li v-for="(item, index) in myList" :key="index">
                    {{item.text}}
                    
                </li>
            </ul>
            
        
        </div>



        </div>

        <!-- SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="text/javascript" src="./js/script.js"></script>
    </body>
</html>