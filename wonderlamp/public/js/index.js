var i=0;
    
        function change()
        {
            var arr=new Array();
            arr[0]="https://images.unsplash.com/photo-1534443274343-c6200874852c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80";
            arr[1]="https://images.unsplash.com/photo-1604670858150-d9db9ee4a99c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80";
            arr[2]="https://images.unsplash.com/photo-1642055910594-4c45c1f01d3c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80";
            arr[3]="https://images.unsplash.com/photo-1504805276539-c200b6692c8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80";
            arr[4]="https://images.unsplash.com/photo-1642055910918-21898bd3dc46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80";
            arr[5]="https://images.unsplash.com/photo-1587478203464-ccf3c2c45574?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80";
            arr[6]="https://images.unsplash.com/photo-1642055910986-b2a600d336a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
            
            if(i==arr.length)
            {
                i=0;
                f1.image1.src=arr[i];
                i++;
            }
            else
            {
                f1.image1.src=arr[i];
                i++;
            }
            setTimeout("changes()",2000);
        }
        window.onload=change;

let readmore = document.getElementById('readmore')
let para = document.getElementById('para')
readmore.addEventListener('click',()=>{
    if(para.classList.contains("parachanged")){
        readmore.innerHTML="Read More"
        para.classList.remove("parachanged")
    }
    else{
        para.classList.add("parachanged")
        readmore.innerHTML="Read Less"
    }
})