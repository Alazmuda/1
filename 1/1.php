<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <link rel="stylesheet" herf="1.css"/>
    <title>sklep terrarystyczny</title>
</head>

<body>
    
<div id="blok">
    <p style="color:; font-size:60px"><u><b>Pająki</b></u></p>

        <b>Rozmiar terrarium:</b><br> 
         20x20x20<input type="checkbox" name="t1" /><br>
         15x15x25<input type="checkbox" name="t2"/><br>
         30x20x20<input type="checkbox" name="t3"/><br><br>

        <b>Pająki:</b><br> 
         Caribena Versicolor<input type="checkbox" name="gatunek1" /><br>
         Brahypelma hamori<input type="checkbox" name="gatunek2"/><br>
         Monocentropus balfouri<input type="checkbox" name="gatunek3"/><br><br>

        <b>Rozmiar pająka:</b><br> 
        L1 <input type="radio" name="wybor"/><br>
        L3 <input type="radio" name="wybor"/><br> 
        L4 <input type="radio" name="wybor"/><br>
        2DC <input type="radio" name="wybor"/><br>
        4DC <input type="radio" name="wybor"/><br><br>

        <b>Karmówka</b><br> 
        świerszcz <input type="radio" name="wybor"/><br>
        karaczan turecki <input type="radio" name="wybor"/><br> 
        dubia <input type="radio" name="wybor"/><br>
        mącznik <input type="radio" name="wybor"/><br>

</div>

    <br><br>
    <form id="dane">
        <b>DANE</b><br> 
        Nazwisko <input name="Nazwisko" style="border-radius: 18px;"><br> 
        E-mail <input name="E-mail" style="border-radius: 18px;"><br> 
        Adres <input name="Adres" style="border-radius: 18px;"><br><br>
        <input type="button" value="Zamów" onclick="wyswietlDane()">
    </form>
</div>
</body>

</html>