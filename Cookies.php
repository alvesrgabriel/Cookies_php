<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<style>

body {

    background-color: 
    <?php

    $cor = $_POST ["cor"]; 

    if (isset($_COOKIE['cookie_teste'])) {
        echo "$cor";
    } else {
        setcookie('cookie_teste', 'Algum valor...', time() + 120);
    };

    ?> 

}

img {
    width: 500px;
    height: auto
}

.titulo {
    font-size: 100px
}

p {

    <?php

    $fonte = $_POST ["fonte"]; 

    if (isset($_POST['fonte'])) {
        echo "font-family: $fonte;";
    }
    ?>

}


</style>

<center> 


<h1 class = "titulo"> Rock In Rio </h1> 

<form method="post">
    <label for="cor">Escolha a cor:</label>
    <input type="color" id="cor" name="cor" value="" />
    <input type="submit" value="Alterar cor" />
</form>

<form method="post">
    <label for="fonte">Escolha a fonte do texto:</label>
    <select name="fonte" id="fonte">
        <option value="Arial">Arial</option>
        <option value="Verdana">Verdana</option>
        <option value="Tahoma">Tahoma</option>
        <option value="Courier New">Courier New</option>
        <option value="Georgia">Georgia</option>
        <option value="Times New Roman">Times New Roman</option>
    </select>
    <input type="submit" value="Alterar fonte" />
</form>

<br> 

<img src="Rock_in_Rio_-_Madrid_2012.jpg" alt="">

<h1> Primeira Edição: 1985 </h1>  

<p> A primeira edição do Rock in Rio foi histórica não apenas por reunir algumas das maiores bandas da época, mas também por representar um momento de abertura política e cultural no Brasil. A ditadura militar havia terminado recentemente, e o evento foi uma celebração da liberdade e da cultura jovem. Bandas como Queen, AC/DC, Iron Maiden e Yes se apresentaram para um público de mais de 1 milhão de pessoas durante os 10 dias de festival. </p>

<br> 

<h1> Expansão Internacional </h1> 

<p> Embora tenha nascido no Brasil, o Rock in Rio logo se expandiu para outros países. Em 2001, foi realizada uma edição em Lisboa, Portugal, e, em seguida, o festival foi para cidades como Madri (Espanha) e Las Vegas (EUA). Isso consolidou ainda mais o evento como um fenômeno global. </p>

<br> 

<h1> A Estrutura e a Diversidade </h1> 
<p> O Rock in Rio é muito mais do que apenas uma sequência de shows. Ele é conhecido pela sua grandiosidade, tanto em termos de público quanto de infraestrutura. Em edições no Brasil, o evento ocorre no Parque dos Atletas, na Barra da Tijuca, no Rio de Janeiro, com uma estrutura impressionante, incluindo vários palcos, espaços de convivência, áreas temáticas e, em algumas edições, até um mundo de fantasia como o Rock Street, que mistura música com experiências culturais imersivas. </p>

<p> Além do rock, o festival se expandiu para outros estilos musicais, incluindo pop, eletrônica, rap e música brasileira. Artistas como Beyoncé, Rihanna, Coldplay, Foo Fighters, Shakira e muitos outros se apresentaram no festival, atraindo uma variedade de públicos e ampliando seu leque de atrações. </p>

<br> 

<h1> Impacto Cultural e Social </h1> 
<p> Ao longo dos anos, o Rock in Rio também tem se preocupado com questões ambientais e sociais. Em edições recentes, o festival tem promovido iniciativas sustentáveis, como a coleta seletiva de lixo, o uso de energia renovável e a conscientização sobre mudanças climáticas. Além disso, há ações voltadas para a inclusão e diversidade, com a participação de artistas de diferentes origens, gêneros e orientações sexuais. </p>

<br>

<h1> O "Espírito" do Rock In Rio </h1> 
<p> O festival também é conhecido pelo seu "espírito", que envolve a ideia de união, celebração e respeito mútuo. As pessoas que frequentam o evento são chamadas de "rockeiras" e o ambiente é sempre de muita energia positiva, com shows energizantes, público animado e uma sensação de pertencimento. A frase "Por um Mundo Melhor", que surgiu nas primeiras edições, tornou-se o lema do festival e continua a ser uma bandeira importante até hoje. </p>


</center> 
    
</body>
</html>