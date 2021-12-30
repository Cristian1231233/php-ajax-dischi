
<?php

include 'json.php';


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.princ{
    min-height: 100vh;
}
.main-wrapper{
    background-color: #1E2D3B;
    min-height: calc(100vh - 70px);
 }
 header{
    height: 70px;
    background-color: #2E3A46;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
 }
 .logo{
    width: 50px;
    height: 50px;
 }
 .logo img{
    height: 100%;
}

.image-text{
    background-color: #2E3A46;
    padding: 10px;
    width: 150px;
    height: 250px;
}
.image{
    margin: 7px auto;
    width: 100px;
    height: 100px;
}
img{
    height: 100%;
}
.text{
    font-size: 17px;
    color: white;
}
.titolo, .anno{
    color: #697276;
}
.anno{
    margin-bottom: 20px;
}

    </style>

    <title>PHP Ajax Dischi</title>
</head>
<body>
    <div id="app">
    <div class="princ">
        <header>
            <div class="logo">
                 <img src="Spotify_Logo_Green.png" alt="">
            </div>
            <select class="select" v-model="genre" @change="$emit('genereSelezionato', genre)">
                <option value="All" selected>all</option>
                <option value="Rock">rock</option>
                <option value="Pop">pop</option>
                <option value="Jazz">jazz</option>
                <option value="Metal">metal</option>
        </select>
        </header>
        <div class="main-wrapper">
            <div class="container py-4 text-center">
                <div class="row flex">
                <?php foreach($musics as $item){ ?>
                        <div class="col-2 text-center">
                            <div class="image-text my-2">
                                <div class="image">
                                    <img src="<?php echo $item['poster'] ?>" alt="">
                                </div>
                                <div class="text">
                                <?php echo $item['title'] ?>
                                </div>
                                <div class="titolo">
                                <?php echo $item['author'] ?>
                                </div>
                                <div class="anno"> <?php echo $item['year'] ?></div>
                            </div>
                          </div>

                    <?php } ?>
                    
                </div>
            </div>
        </div>
   </div>
   </div>
 <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
 <script src="script.js"></script>
</body>
</html>