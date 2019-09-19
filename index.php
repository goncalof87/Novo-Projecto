

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="recebe.php" >

        Nome:<br>
        <input type="text" name="Nome" placeholder="Nome..."id ="Nome" >
        <br><br>
       
        Email:<br>
        <input type="email" name="email"placeholder="email@ipt.pt..."id ="email">
        <br><br>

        <div class="Localidade">
       
        Localidade:<br>
        <select name="Localidade">
                <option value="Null">Null</option>
                <option value="Tomar">Tomar</option>
                <option value="Santarém">Santarém</option>
                <option value="Alcanena">Alcanena</option>
                <option value="Torres Novas">Torres Novas</option>
        </select>
        <br><br>
        </div>
       
         <div class="Texto">
             Texto:<br>
             <textarea id="subject" name="subject" placeholder="Mensagem..." cols="30" rows="8"></textarea>
                <br><br>
        </div>

        <input type="submit" value="Ok" id="Ok">

 </form>  

   

</body>
</html>
