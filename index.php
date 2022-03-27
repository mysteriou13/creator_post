
<html>
    <body>
    
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>


<textarea id="txt" rows="15" cols="70"  > There is some text here.</textarea> <input type="button" id="btn" value="OK"  onclick='test()'/>


<div id = "t">
    
</div>

<script>

function test(){

  
    
    
    var $txt = $("#txt"); var caretPos = $txt[0].selectionStart;
    
    var textAreaTxt = $txt.val(); 
    

    var txtToAdd = "<u>stuff</u>"; $txt.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) ); 

    $('txt').innerHTML = txtToAdd;

var t = txtToAdd; 

document.getElementById("t").innerHTML= document.getElementById("txt").value;



}

    </script>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</body>
</html>




