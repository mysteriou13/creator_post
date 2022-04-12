function add_zone_text(balise){

    id += 1;
    ligne +=1;

    var idbutton = "idbutton"+id;

    var idinputsouligne = "newIDsouligne"+id;

    var idinputgras = "newIDgras"+id;

    var finbalise = "fin"+balise;

    var $txt = $("#t"); 
    
    var caretPos = $txt[0].selectionStart;
    
    var textAreaTxt = $txt.val(); 

    var txtToAdd = balise+"  "+finbalise; 


   

    var divbox = document.createElement("div");
    
    divbox.setAttribute("id", "divbox1");


   var box = create_box(idinputsouligne,idinputgras);
  
   
   divbox.append(create_box(idinputsouligne,idinputgras));

   $txt.append(divbox);

    var qinput = "#"+idinputsouligne;

     $("#"+idinputsouligne).bind("click", function() {

add_class_css(idinputsouligne,"textDecoration", "underline", "none",document.getElementById("text"+idinputsouligne).style.textDecoration);

});


$("#"+idinputgras).bind("click", function() {

    add_class_css(idinputsouligne,"font-weight", "Bold", "normal",document.getElementById("text"+idinputsouligne).style.fontWeight);
    
    });
    


}

function create_box(idinputsouligne,idinputgras){


    var div = document.createElement("div");
    var box = document.createElement("div");

    var input = document.createElement("INPUT");
    input.setAttribute("type", "text");
    
    input.setAttribute("id", idinputtext);

    box.setAttribute("id", "box1");

    div.setAttribute("id", "div1");


    var div1 = document.createElement("div");

    var div2 = document.createElement("div");

   var idinputtext = "text"+idinputsouligne;
    
     input.setAttribute("type", "text");

     var t = document.createElement("button");

     gras = document.createElement("button");

     

     t.setAttribute("id",idinputsouligne);

     gras.setAttribute("id",idinputgras);

     t.innerText = "souligne";
    
     gras.innerText = "gras";

     div2.setAttribute("id","ligne"+ligne);

    div.append(div1);

    div1.append(t);
 
    div1.append(gras);
 
    div.append(input);

    box.append(div);
    box.append(div2);

    return box;

}