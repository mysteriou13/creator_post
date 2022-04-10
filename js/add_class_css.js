function add_class_css(a,t1,t2,t3,t4){

    var i = "text"+a;

  if(t4 == "" || t4 == t3){
    $("#"+i).css(t1, t2);   
  
  }else{


    $("#"+i).css(t1, t3); 
      
  }

}