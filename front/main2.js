

document.getElementById('guardar').addEventListener("click",()=>{

    let cor=document.getElementById("cor").value;
    let cla=document.getElementById("cla").value;
    
    
    let dts={
        cor:cor,
        cla:cla
    };
    
    alert(dts.cor + '' + dts.cla);
    
    let response = fetch('http://localhost:5555/', {
    method:'POST',
    headers: {
    'Content-Type':'application/json;charset=utf-8'
        
    },
    
    body:JSON.stringify(dts)
    
    
    
    });
    alert('Registro Completo');
    
    });