<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CMG - Controle de Ofícios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="main.js"></script>


    

</head>

<body>
    
    <div class="container">
        <h1>Controle de Ofícios</h1>
        <br>
       
        Para ter acesso a um número de ofício preencha os campos abaixo e clique em "Solicitar uma numeração".
        <br><br>
       <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Destino">Destino</label>
                <input type="text" class="form-control" id="destino" placeholder="">
                </div>
                <div class="form-group col-md-6">
                <label for="Assunto">Assunto</label>
                <input type="text" class="form-control" id="assunto" placeholder="">
                </div>

                <div class="form-group col-md-6">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="">
                </div>
            </div>
            
            <button type="button" class="btn btn-success" onClick="gravar()">Solicitar uma numeração</button>
  
    <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>
    <script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyBtgi4mGyEo7Zu5leBAh8WiFMOIW_k7NM4",
        authDomain: "controlelaudos.firebaseapp.com",
        databaseURL: "https://controlelaudos.firebaseio.com",
        projectId: "controlelaudos",
        storageBucket: "",
        messagingSenderId: "209829957172"
    };
    firebase.initializeApp(config);
    
    function gravar(){
        
        firebase.database().ref().child().set('');
        alert('Dados gravados com sucesso!');
    }
    
    </script>


    

</body>
</html>