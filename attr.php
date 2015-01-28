<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    p {
        margin: 20px 0 0;
    }
    b {
        color: blue;
    }
</style>



<body>
<input id="check1" type="checkbox" checked="checked">
<label for="check1">Check me</label>
<p></p>

<script>

$( "input" )
.change(function() {
var $input = $( this );
$( "p" ).html( ".attr( 'checked' ): " + $input.attr( "checked" ) + "" +
".prop( 'checked' ): " + $input.prop( "checked" ) + "" +
".is( ':checked' ): " + $input.is( ":checked" ) + "" );
})
.change();

</script>

</body>
</html>