
<html>
    <body>
    
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>


<textarea id="txt" rows="15" cols="70">There is some text here.</textarea> <input type="button" id="btn" value="OK"  onclick='test()'/>


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




