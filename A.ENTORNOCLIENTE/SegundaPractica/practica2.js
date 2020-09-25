
function ordenar_array(){
    var array=[];
    for (let i = 0;i<5;i++){
        array[i]=prompt("Escribeme un nombre")
    }
    console.log(array);

    array.sort();

    console.log(array);
}
function mcd(a,b){
    if(b==0){
        return a;
    }else{
       return mcd(b,a%b);
    }
}
console.log(mcd(10,20));



function ejercicio14(){
    array1 = new Array("Rojo","Verde","Azul");
    array2 = new Array("70","9","800");
    array3 = new Array(50,10,2,300);
    array4 = new Array("70","8","850",30,10,5,400);
    array1.sort(compare);
    array2.sort(compare);
    array3.sort(compare);
    array4.sort(compare);
    console.log(array1);
    console.log(array2);
    console.log(array3);
    console.log(array4);
}
function compare(a,b){
    var auxa=parseInt(a);
    var auxb=parseInt(b);
    if(auxa>auxb){
        return 1;
    }
    else if(auxa<auxb){
        return -1;
    }else{
        return 0;
    }
}
ejercicio14();