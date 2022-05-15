<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
       background-color: #A2AEBB;  
    }
</style>
<body>
    <h1 class="m-3 p-5 "> Form Tasarımı </h1>

    
    <br>

    <div class= "row">
        <div class="col25">
            
            <label for=""> Adınız </label>
        </div>
<div class="col75">
    <input type="text" placeholder="Your name.. ">
</div>

    </div>

    <div class= "row">
        <div class="col25">
            <label for=""> Soyadınız </label>
        </div>
<div class="col75">
    <input type="text" placeholder="Your surname.. ">
</div>

    </div>
    

    <div class= "row">
        <div class="col25">
            <label for=""> Telefon  </label>
        </div>
<div class="col75">
    <input type="text" placeholder="Your number.. ">
</div>

    </div>

    <div class= "row">
        <div class="col25">
            <label for=""> E-mail </label>
        </div>
<div class="col75">
    <input type="text" placeholder="Your e-mail.. ">
</div>

    </div>
<br>

<div class="row">
    <div class="col25">
    <select class="form-select form-select-lg mb-5" aria-label=".form-select-lg example">
                <option selected>Cinsiyetiniz</option>
                <option value="1">Kadın</option>
                <option value="2">Erkek</option>
            </select>

            </div>
     </div>
     <br>

            <div class="row">
    <div class="col25">
            <select class="form-select form-select-lg mb-15" aria-label=".form-select-lg example">
                <option selected>Ders Seçiniz</option>
                <option value="1">Yazılım Mimarileri</option>
                <option value="2">Web Programlama</option>
                <option value="2">Sunucu İşletim Sistemleri</option>
            </select>

            </div>
     </div>

     <br>

    <div class= "row">
        <div class="col25">
            <label for=""> Mesajınız </label>
        </div>
<div class="col75">
   <textarea name="" id="" cols="30"
    rows="10" placeholder=" Writesomething.. "></textarea>
</div>
<br>
   <div class="row">
      <input type="submit" value="GÖNDER" >
      
   </div>


</body>
</html>