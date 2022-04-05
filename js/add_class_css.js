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
  