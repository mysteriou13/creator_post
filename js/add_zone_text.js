function add_zone_text(balise){

    id += 1;

    var idbutton = "idbutton"+id;

    var idinputsouligne = "newIDsouligne"+id;

    var idinputgras = "newIDgras"+id;

    var finbalise = "fin"+balise;

    var $txt = $("#t"); 
    
    var caretPos = $txt[0].selectionStart;
    
    var textAreaTxt = $txt.val(); 

    var txtToAdd = balise+"  "+finbalise; 

    var x = document.createElement("INPUT");

    var input = document.createElement("INPUT");
input.setAttribute("type", "text");

    var div = document.createElement("div");

    var div1 = document.createElement("div");

    var div2 = document.createElement("div");

    idinputtext = "text"+idinputsouligne;
    
     input.setAttribute("type", "text");

     var t = document.createElement("button");

     gras = document.createElement("button");

      input.setAttribute("id", idinputtext);

     t.setAttribute("id",idinputsouligne);

     gras.setAttribute("id",idinputgras);

     t.innerText = "souligne";
    
     gras.innerText = "gras";

 
   div.append(div1);

   div1.append(t);

   div1.append(gras);

   $txt.append(div);

   $txt.append(div2);

   div2.append(input);
   
    var qinput = "#"+idinputsouligne;

     $("#"+idinputsouligne).bind("click", function() {

add_class_css(idinputsouligne,"textDecoration", "underline", "none",document.getElementById("text"+idinputsouligne).style.textDecoration);

});


$("#"+idinputgras).bind("click", function() {

    add_class_css(idinputsouligne,"font-weight", "Bold", "normal",document.getElementById("text"+idinputsouligne).style.fontWeight);
    
    });
    


}