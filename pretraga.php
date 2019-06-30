<?php

if(isset($_GET['pojam'])) 
{
    $pojam = $_GET['pojam'];
} 
else 
{
    exit("Unesi nesto");
}

if(isset($_GET['tip'])) 
{
    $tip = $_GET['tip'];
} 
else 
{
    $tip = "sajt";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="includes/css/style.css">
    <title>Naslov</title>
</head>
<body>

        <div class="wrapper">
            <div class="header">
                <div class="headerContent">
                    <div class='logoContainer'>
                        <a href="index.php"><img src="includes/images/googl.png" alt=""></a>
                    </div>
                    <div class="searchContainer">
                        <form action="pretraga.php" method="GET">
                            <div class="searchBarContainer">
                                <input type="text" name="pojam" class="searchBox">
                                <button class="dugme">
                                    <img class="trazilica"src="https://img.icons8.com/ultraviolet/40/000000/search.png">
                                </button>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="taboviKontejner">
                    <ul class="taboviLista">
                    <li class="<?php echo $tip == 'sajt' ? 'aktivna' : '' ?>"><a href='<?php echo "pretraga.php?pojam=$pojam&tip=sajt";  ?>'>Sajtovi</a></li>

                    <li class="<?php echo $tip == 'slike' ? 'aktivna' : ''  ?>"><a href='<?php echo "pretraga.php?pojam=$pojam&tip=slike";  ?>'>Slike</a></li>
                    </ul>
                </div>
             </div>
        </div>

</body>
</html>
