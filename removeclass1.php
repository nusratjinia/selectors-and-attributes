<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    p {
        margin: 4px;
        font-size: 16px;
        font-weight: bolder;
    }
    .blue {
        color: blue;
    }
    .under {
        text-decoration: underline;
    }
    .highlight {
        background: yellow;
    }
</style>
<body>


<p class="blue under">Hello</p>
<p class="blue under highlight">and</p>
<p class="blue under">then</p>
<p class="blue under">Goodbye</p>

<script>
    $( "p:even" ).removeClass( "blue" );
</script>
</body>
</html>