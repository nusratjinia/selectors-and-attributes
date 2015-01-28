<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    em {
        color: blue;
        font-weight: bold;
    }
    div {
        color: red;
    }
</style>
<body>
<p>Once there was a <em title="huge, gigantic">large</em> dinosaur...</p>
The title of the emphasis is:<div></div>

<script>
    var title = $( "em" ).attr( "title" );
    $( "div" ).text( title );
</script>
</body>
</html>