// JavaScript Document
$(function() {        
$( "#accordion" ).accordion({            
		collapsible: true,
		active: false,
		heightStyle: "content",
		beforeActivate:function(event,ui){
			//alert("before");
			ColapseAllButClicked(event.target);
			
		}
	});    

	$( "#accordion" ).accordion( "option", "icons", null );

});  

 $(function() {
        $( "#tabs" ).tabs({
            collapsible: true,
			selected: -1 ,
			heightStyle: "content" ,
			fx: { height: 'toggle', duration: 'slow' },
			beforeActivate:function(event,ui){
			
			ColapseAllButClicked(event.target);
			
		}
        });
	
    });
	
	
 $(function() {
        $( "#working" ).tabs({
            collapsible: true,
			selected: -1 ,
			fx: { height: 'toggle', duration: 'slow' },
			beforeActivate:function(event,ui){
			
			ColapseAllButClicked(event.target);
			
		}
        });
	
    });
	
$(function() {        
$( "#faq" ).accordion({            
		collapsible: true,
		active: false,
		heightStyle: "content"        
	});    

	$( "#faq" ).accordion( "option", "icons", null );
	
});  

function ColapseAllButClicked(element) {
		//alert("ColapseAllButClicked");
		//alert(element.id);
		$('html, body').animate({
			scrollTop: $('#accordion').offset().top
		},750);
		
		switch(element.id){
				case "accordion":
				collapseWorking();
				collapseTabs();
				break; 
				case "tabs":
					collapseAccordion();
					collapseWorking();
				break; 
				case "working":
					collapseAccordion();
					collapseTabs();
				break; 
		}
		
    //$(function() {
    //    $('div').not(document.getElementById(element.id)).accordion( "activate" , false );
    //    });
	
}
function collapseAccordion(){
	$("#accordion" ).accordion({ active: false});
}
function collapseWorking(){
	$("#working" ).tabs({ active: false});
}
function collapseTabs(){
	$("#tabs" ).tabs({ active: false});
}