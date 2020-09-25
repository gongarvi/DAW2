alert("I'm = I am \n I don't = I do not");

const input= document.getElementById("input");
input.addEventListener("change",function(event){
    alert(input.value);
});


for(let i = 0 ; i<parseInt(prompt("Introduce un numero"));i++){
    console.log("Texto repetido");
}

var suma=0;
for(let i = 11;i<=3000;i++){
    if(i%11==0){
        suma+=i;
    }
}
console.log("suma de multiplos de 11 "+suma);



var number=parseInt(prompt("Dame un numero, y calculo su factorial"));
var factorial=1;
for(let i = 1;i<=number;i++){
    factorial*=i;
}
console.log(factorial);


var cateto1 = parseInt(prompt("Dame un cateto"));
var cateto2 = parseInt(prompt("Dame otro cateto"));
console.log((Math.sqrt((cateto1**2)+(cateto2**2))));


var numeroAdivina=Math.floor(Math.random()*10+1);
console.log(numeroAdivina);
var adivinado=false;
for(let i = 0; i<5; i++){
    if(numeroAdivina==parseInt(prompt("Adivina el numero, intento "+(i+1)))){
        alert("Lo has adivinado");
        adivinado=true;
        break;
    }
}
if(!adivinado) {alert("No lo has adivinado")};

var count=0;
var numeroPrint=0;
do{
    numeroPrint=parseInt(prompt("Introduce numeros, 9999 para salir"));
    count++;
}while(numeroPrint!=9999);
count--;
console.log(count);

var secuencia="";
for(let i=0;i<50;i++){
    secuencia+="|"+Math.floor(Math.random() * (6 - 1 + 1) + 1);
}
alert(secuencia);



multiplicar = parseInt(prompt("Dame un numero y te saco su tabla de multiplicar"));
salida="";
document.write("<table>");
for(let i = 1;i<=10;i++){
    salida+="<tr><td>"+i+"</td><td>x</td><td>"+multiplicar+"</td><td>=</td><td>"+(i*multiplicar)+"</td>\n";
    
}
document.write(salida)
document.write("</table>");