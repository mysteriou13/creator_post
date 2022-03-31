
<html>
    <body>
    
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<div>
<div>

<button type = "button" id = "sousligne"  onclick='add_balise(this.id)'> sousligne </button>
</div>

<div>
<textarea id="txt" rows="15" cols="70"  onkeyup = "rendu()"> </textarea> 
</div>

</div>


<div id = "t">
    
</div>

<script>


    function rendu(){
        
        var str = $("#txt").val();

var mapObj = {
   sousligne:"<u>",
   finsousligne:"</u>",
   goat:"cat",
   go:"fin"

};
str = str.replace(/sousligne|finsousligne|goat/g, function(matched){
  return mapObj[matched];
});
        $("#t").html(str);

    }

function add_balise(balise){

    var finbalise = "fin"+balise;

    var $txt = $("#txt"); 
    
    var caretPos = $txt[0].selectionStart;
    
    var textAreaTxt = $txt.val(); 

    var txtToAdd = balise+"  "+finbalise; 

    $txt.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) ); 

}

    </script>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</body>
</html>




