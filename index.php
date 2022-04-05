
<html>
    <body>
    
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<div>
<div>

<div>
<button type = "button" id = "add_block"  onclick='add_balise(this.id)'> ajout text </button>
</div>



<div>
</div>

</div>


<div id = "t">
    
</div>


<script>


var id = 0;

var souligne = 0;

function add_balise(balise){

    id += 1;

    var idbutton = "idbutton"+id;

    var idinput = "newID"+id;

    var finbalise = "fin"+balise;

    var $txt = $("#t"); 
    
    var caretPos = $txt[0].selectionStart;
    
    var textAreaTxt = $txt.val(); 

    var txtToAdd = balise+"  "+finbalise; 

    var x = document.createElement("INPUT");
 
    var button = document.createElement("button");

    var input = document.createElement("INPUT");
input.setAttribute("type", "text");

    var div = document.createElement("div");

    var div1 = document.createElement("div");

    var div2 = document.createElement("div");

    idinputtext = "text"+idinput;
    
     input.setAttribute("type", "text");

     var f = 'd1';

     var t = document.createElement("button");

      input.setAttribute("id", idinputtext);

     t.setAttribute("id",idinput);

     t.innerText = "souligne";

 
   div.append(div1);

   div1.append(t);

   $txt.append(div);

   $txt.append(div2);

   div2.append(input);
   
    var qinput = "#"+idinput;

     $("#"+idinput).bind("click", function() {

add_class_css(this.id,"text-decoration-underline");

});
    

}


function add_class_css(a,clas){


  var i = "#text"+a;

souligne += 1;

if(souligne == 2){

  souligne = 0;

}

if(souligne == 1){

  $(i).addClass(clas);

}else{

  $(i).removeClass(clas);
  
}

}




</script>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</body>
</html>




