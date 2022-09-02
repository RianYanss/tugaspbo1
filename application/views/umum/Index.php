<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

.Navbar {
    background-color: aqua;
    display: grid;
    grid-template-rows: auto;
    grid-template-columns: 1fr;
    grid-auto-flow:dense;
    justify-items: stretch;
    align-items: stretch;
    column-gap: 20px
}
nav

.logo {
    background: green;
    width: 60px;
    grid-column: 20px;
}

.menu {
    background: lightsalmon;
    display: flex;
    flex-direction: row;
    justify-content: start;
    grid-column: 1;
}

.menu * {
    padding: 5px;
}

.home {
    margin: auto;
    text-align:center;
    width: 50%;
    border: 3px black;
    padding: 10px;
    font-size: 50px;
}

input {
    width:620px;
    height: 40px;
    text-align:center;
    font-size: 20px;
}

footer {
    text-align:center;
}
</style>
 <title>Search Engine Operation</title>
</head>
<body>

    <div class="Wrapper">
            <nav class="Navbar">
                <div class="logo"><img src=""></div>
               <div class="menu">
               <div>Menu1</div>
               <div>Menu2</div>
               <div>Menu3</div>
               </div>
            </nav>

            <div class="home">
                <p>Googogole</p>
            <input type="text" placeholder="Search..">
            </div>













    </div>

    <footer>
        <p>Kelompok 4 <br>Fachreza, Ariansyah, Eko, Daffa</p>
    </footer>
</body>



</html>