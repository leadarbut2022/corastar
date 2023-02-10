

 document.getElementById('chat_form').onclick=function () {
   let  link= document.getElementById('linkcat');
   
    if (link.hasAttribute('name')) {
     
        link.setAttribute('href','css/chat3.css');
        link.removeAttribute('name')  
    }else{
        link.setAttribute('href','css/chat2.css');
        link.setAttribute('name','name');
      

    }
 }


// function border() {
    
//     let m1 = document.getElementById('m1');
//     let m2 = document.getElementById('m2');
//   if (m1 < 0) {
//      m1.style.border="none";
//   }

//   if (m2 < 0) {
//     m2.style.border="none";
// }


// }


// function clickEventHandler(event) {

//     if (!event ) {
//         event = window.event; 
//     };

//     var el = (event.target || event.srcElement); // DOM uses 'target';
//                                                  // older versions of 
//                                                  // IE use 'srcElement'
//     el.style.border="none";

// }



