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