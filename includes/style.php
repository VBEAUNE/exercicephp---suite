<?php header("Content-type: text/css; charset=UTF-8");
?>

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
    grid-gap: 20px;
    text-align: center;
    
} 

h2{
    color:green;
}

.card {
    display: grid;
    grid-template-rows: max-content 200px 1fr;
}

.card img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}
