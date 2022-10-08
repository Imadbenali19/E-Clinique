var x=document.getElementById("dash");
        var y=document.getElementById("lm");
        var z=document.getElementById("lp");
        var w=document.getElementById("rdv");
        
        x.onmouseover=function(){
            x.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
            
        }


        
        y.onmouseover=function(){
            y.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link");
            z.setAttribute("class","nav-link");
            w.setAttribute("class","nav-link");
            
        }

        
        z.onmouseover=function(){
            z.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
            
        }

        
        w.onmouseover=function(){
            w.setAttribute("class","nav-link active");
            x.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
        }
        y.onmouseout=function(){
            x.setAttribute("class","nav-link active");
            y.setAttribute("class","nav-link");
            z.setAttribute("class","nav-link");
            w.setAttribute("class","nav-link");
            ;
        }

        
        z.onmouseout=function(){
            x.setAttribute("class","nav-link active");
            z.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
            w.setAttribute("class","nav-link ");
            
        }

        
        w.onmouseout=function(){
            x.setAttribute("class","nav-link active");
            w.setAttribute("class","nav-link ");
            z.setAttribute("class","nav-link ");
            y.setAttribute("class","nav-link ");
        }