

function fromto(){
   
    var input = document.getElementById('input').value;
    var output = document.getElementById('output').value;
    
    //    NET 
     
    
    if(document.getElementById('from').value == 'net'){
        document.getElementById('src-img').innerHTML = "<img src='../img/net.png'>";
       
        if(document.getElementById('to').value == 'roc-a'){
            var fixed = input * 81; 
            document.getElementById('output').value = fixed.toFixed(2);
            document.getElementById('demo').innerHTML = "Exchange Rate : 1 USD = 81 BDT";
        }
        else if(document.getElementById('to').value == 'bik'){
            var fixed = input * 87; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'dbbl'){
            var fixed = input * 87; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'bik-a'){
            var fixed = input * 90; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'roc'){
            var fixed = input * 87; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'nog'){
            var fixed = input * 87; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
         
    } 
    
                            //    SKRILL
    
    
    if(document.getElementById('from').value == 'skrill'){
         document.getElementById('src-img').innerHTML = "<img src='../img/skrill.png'>";
        
         if(document.getElementById('to').value == 'roc-a'){
            var fixed = input * 81; 
            document.getElementById('output').value = fixed.toFixed(2);
            document.getElementById('demo').innerHTML = "Exchange Rate : 1 USD = 81 BDT";
        }
        else if(document.getElementById('to').value == 'bik'){
            var fixed = input * 87; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'dbbl'){
            var fixed = input * 87; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'bik-a'){
            var fixed = input * 90; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'roc'){
            var fixed = input * 87; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'nog'){
            var fixed = input * 87; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
    }
    
                            //    BKASH AGENT
    
    if(document.getElementById('from').value == 'bik-a'){
       document.getElementById('src-img').innerHTML = "<img src='../img/bik-a.png'>"; 
        if(document.getElementById('to').value == 'pay'){
            var fixed = input/89;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'web'){
            var fixed = input/90;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'skrill'){
            var fixed = input/87;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'net'){
            var fixed = input/81;
            document.getElementById('output').value = fixed.toFixed(2);
        }
    }
    
       
                            //    BKASH 
    
    if(document.getElementById('from').value == 'bik'){
        document.getElementById('src-img').innerHTML = "<img src='../img/bik.png'>";
         if(document.getElementById('to').value == 'pay'){
            var fixed = input/89;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'web'){
            var fixed = input/90;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'skrill'){
            var fixed = input/87;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'net'){
            var fixed = input/81;
            document.getElementById('output').value = fixed.toFixed(2);
        }
    }
    
       
                            //    ROCKET
    
    if(document.getElementById('from').value == 'roc'){
        document.getElementById('src-img').innerHTML = "<img src='../img/roc.png'>";
         if(document.getElementById('to').value == 'pay'){
            var fixed = input/89;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'web'){
            var fixed = input/90;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'skrill'){
            var fixed = input/87;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'net'){
            var fixed = input/81;
            document.getElementById('output').value = fixed.toFixed(2);
        }
    }
    
       
       
                            //  PAYNEER 
    
    if(document.getElementById('from').value == 'pay'){
        document.getElementById('src-img').innerHTML = "<img src='../img/pay.png'>";
         if(document.getElementById('to').value == 'roc-a'){
            var fixed = input * 81; 
            document.getElementById('output').value = fixed.toFixed(2);
            document.getElementById('demo').innerHTML = "Exchange Rate : 1 USD = 81 BDT";
        }
        else if(document.getElementById('to').value == 'bik'){
            var fixed = input * 89; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'dbbl'){
            var fixed = input * 85; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'bik-a'){
            var fixed = input * 90; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'roc'){
            var fixed = input * 88; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'nog'){
            var fixed = input * 80; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
    }
    
       
       
                            //  WEB-MONEY
    
    if(document.getElementById('from').value == 'web'){
        document.getElementById('src-img').innerHTML = "<img src='../img/web.png'>";
         if(document.getElementById('to').value == 'roc-a'){
            var fixed = input * 81; 
            document.getElementById('output').value = fixed.toFixed(2);
            document.getElementById('demo').innerHTML = "Exchange Rate : 1 USD = 81 BDT";
        }
        else if(document.getElementById('to').value == 'bik'){
            var fixed = input * 89; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'dbbl'){
            var fixed = input * 85; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'bik-a'){
            var fixed = input * 90; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'roc'){
            var fixed = input * 88; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'nog'){
            var fixed = input * 80; 
            document.getElementById('output').value = fixed.toFixed(2);
        }
    }
    
       
       
                            //  DBBL
    
    if(document.getElementById('from').value == 'dbbl'){
        document.getElementById('src-img').innerHTML = "<img src='../img/dbbl.png'>";
         if(document.getElementById('to').value == 'pay'){
            var fixed = input/89;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'web'){
            var fixed = input/90;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'skrill'){
            var fixed = input/87;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'net'){
            var fixed = input/81;
            document.getElementById('output').value = fixed.toFixed(2);
        }
    }
    
       
                            //  ROCKED AGEND
    
    if(document.getElementById('from').value == 'roc-a'){
        document.getElementById('src-img').innerHTML = "<img src='../img/roc-a.png'>";
         if(document.getElementById('to').value == 'pay'){
            var fixed = input/89;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'web'){
            var fixed = input/90;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'skrill'){
            var fixed = input/87;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'net'){
            var fixed = input/81;
            document.getElementById('output').value = fixed.toFixed(2);
        }
    }
  
       
                            //  NOGOD
    
    if(document.getElementById('from').value == 'nog'){
        document.getElementById('src-img').innerHTML = "<img src='../img/nog.png'>";
       
         if(document.getElementById('to').value == 'pay'){
            var fixed = input/89;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'web'){
            var fixed = input/90;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'skrill'){
            var fixed = input/87;
            document.getElementById('output').value = fixed.toFixed(2);
        }
        else if(document.getElementById('to').value == 'net'){
            var fixed = input/81;
            document.getElementById('output').value = fixed.toFixed(2);
        }
    } 
    
    
                        //    SECOND OPTION IMAGE CHANGE
    
    if(document.getElementById('to').value == 'net'){
        document.getElementById('img-src2').innerHTML = "<img src='../img/net.png'>";
    }else if(document.getElementById('to').value == 'skrill'){
        document.getElementById('img-src2').innerHTML = "<img src='../img/skrill.png'>";
    }else if(document.getElementById('to').value == 'pay'){
        document.getElementById('img-src2').innerHTML = "<img src='../img/pay.png'>";
    }else if(document.getElementById('to').value == 'web'){
        document.getElementById('img-src2').innerHTML = "<img src='../img/web.png'>";
    }else if(document.getElementById('to').value == 'bik'){
        document.getElementById('img-src2').innerHTML = "<img src='../img/bik.png'>";
    }else if(document.getElementById('to').value == 'roc'){
        document.getElementById('img-src2').innerHTML = "<img src='../img/roc.png'>";
    }else if(document.getElementById('to').value == 'nog'){
        document.getElementById('img-src2').innerHTML = "<img src='../img/nog.png'>";
    }else if(document.getElementById('to').value == 'dbbl'){
        document.getElementById('img-src2').innerHTML = "<img src='../img/dbbl.png'>";
    }
    
}


    
  












