function menu(){
    var menu="Seleccione las siguientes opciones:\n 1- Ejercicio 4.\n 2- Ejercicio 5.\n 3- Ejercicio 10.\n 4- Ejercicio 20.\n 5- Ejercicio 21.\n 6- Ejercicio 22.\n 7- Ejercicio 23 \n Enter para salir.";
    switch(parseInt(prompt(menu))){
        case 1:
            ejercicio4();
            break;
        case 2:
            ejercicio5();
            break;
        case 3:
            ejercicio10();
            break;
        case 4:
            ejercicio20();
            break;
        case 5:
            ejercicio21();
            break;
        case 6:
            ejercicio22();
            break;   
        case 7:
            ejercicio23();
            break;     
    }
}

function ejercicio4(){
    var location = window.location;
    
    console.log("Protocolo:"+location.protocol);
    console.log("Dominio:"+location.hostname);
    console.log("Puerto:"+location.port);
    console.log("Navegación:"+location.pathname); 
    menu();
}

function ejercicio5(){
    window.location.href=prompt("Introduzca el lugar a navegar.");
    menu();
}

function ejercicio10(){
    var date=new Date();
    
    var array=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    console.log("Hoy es día "+date.getDate()+" de "+array[date.getMonth()]+" de "+date.getFullYear()+" y en estos momentos son las "+date.getHours()+":"+date.getMinutes());
    menu();
}

function ejercicio20(){
    var date= new Date();
    prompt("Dime tu nombre");
    alert("Has tardado "+(new Date()-date)/1000+" milisegundos en responder");
    menu();
}
function ejercicio21(){
    var date=new Date();
    var fechaNacimiento = new Date("1996/04/06");
    var años=date.getFullYear()-fechaNacimiento.getFullYear();
    if(fechaNacimiento<date){
        if(date.getMonth()<fechaNacimiento.getMonth()){
            años--;
        }else if (date.getDate()<fechaNacimiento.getDate()){
            años--;
        }
        console.log("Tienes "+años);
    }
    menu();
}
function ejercicio22(){
    var fecha=new Date("1996/04/06");
    var resto=new Date()-fecha;
    var mili=resto%1000;
    resto=resto/1000;
    var sec=resto%60;
    resto=resto/60;
    var min = resto%60;
    resto=resto/60;
    var hour =resto%60;
    resto=resto/24;
    var day = resto;
    console.log(`Han pasado ${parseInt(day)} días, ${parseInt(hour)} horas, ${parseInt(min)} minutos, ${parseInt(sec)} segundos y ${mili} milisegundos.`);
    menu();

}
function ejercicio23(){
    var array=["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
    var fecha = new Date(prompt("Introduce una fecha YYYY-mm-dd"));
    var cuantos = parseInt(prompt("Años a contar"));
    
    document.write("<table>");
    document.write("<tr>");
    for(let i = 0;i<cuantos;i++){
        document.write(`<td> ${fecha.getFullYear()-i}</td>`);
    }
    document.write("</tr>")
    document.write("<tr>");
    for(let i = 0;i<cuantos;i++){
        let fechalocal = new Date(`${(fecha.getFullYear()-i)}-${fecha.getMonth()+1}-${fecha.getDate()}`);
        
        document.write(`<td> ${array[fechalocal.getDay()-1]}</td>`);
    }
    document.write("</tr>")
    document.write("</table>");
}
menu();