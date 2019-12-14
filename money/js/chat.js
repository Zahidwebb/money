(function($){  
    
    jQuery(document).ready(function(){
        
         jQuery('#chatmsg').on('submit',function(){
            
             var name = jQuery('input#speech').val();
             
            $.ajax({
               'url' : 'chat.php',
                'type' : 'POST',
                'data' : {
                    'refresh' : '',
                    'name' : name,
                },
                'success' : function(){
                   jQuery('input#speech').val('');
                }
            });
            return false;
        });
        
        
       
           
            setInterval(function(){
             $.ajax({
                 'url' : 'chat.php',
                 'type' : 'POST',
                 'data' : {
                     'fresh' : ''
                 },
                 'success' : function(result){
                     jQuery('.square').html(result);
                 }
             });
         },500) 

           
        
        
        
        jQuery('.chat-toggle').click(function(){
             jQuery('.chat-box').slideToggle();
        });
                    
         jQuery('.icon').click(function(){
             jQuery('.chat-box').hide(500);
         });
        
        
       
        
    })
}(jQuery))