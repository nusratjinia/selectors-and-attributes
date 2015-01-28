<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    p {
        color: red;
        margin: 4px;
    }
    b {
        color: blue;
    }
</style>
<body>
<p></p>
<select id="single">
    <option>Single</option>
    <option>Single2</option>
</select>
<select id="multiple" multiple="multiple">
    <option selected="selected">Multiple</option>
    <option>Multiple2</option>
    <option selected="selected">Multiple3</option>
</select>

<script>
    function displayVals() {
        var singleValues = $( "#single" ).val();
        var multipleValues = $( "#multiple" ).val() || [];
        $( "p" ).html( "Single: " + singleValues +
        " Multiple: " + multipleValues.join( ", " ) );
    }
    $( "select" ).change( displayVals );
    displayVals();
</script>
</body>
</html>