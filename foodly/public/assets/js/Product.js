var ProdDet=[{prod:'MEALS',det:"MAHSY/FATTEH/STEW",butt:'#'},{prod:'PASTA',det:"Alferdo/Marinara /Bolognese/Carbonara",butt:'#'},{prod:'PIZZAS',det:"Margertia/Chicken/Meat /Vegatbles/Mushroom",butt:'#'}
,{prod:'SANDWICHES',det:"MEAT/CHICKEN/CHEESE",butt:'#'},{prod:'FRESHJUICES',det:"Fruit/Vegtables/Coffee",butt:'#'},{prod:'DESSERTS',det:"Cakes/EastDessert/Cinmon",butt:'#'}]
var div;
function showProddet(pro){
    console.log(pro.id)
for(var i=0;i<ProdDet.length;i++)
{
    if(pro.id==ProdDet[i].prod)
    {
        div=document.createElement('div');
        var head=document.createElement('h2');
        var det=document.createElement('p');
        div.setAttribute('class','prodDetails');
        var butt=document.createElement('a');
         var more=document.createElement('img');
        head.innerText=pro.id;
        det.innerText=ProdDet[i].det
        butt.href=ProdDet[i].butt;
        butt.innerText='Show More';
         more.src='assets/Images/more.png';
        //showMore.setAttribute('class','showing')
       // more.style.transform="rotate(-90deg)"
        butt.style.textDecoration='none'
       // showMore.append(butt)
        div.append(head,det,butt)
        pro.appendChild(div)
        break;
    }

}
}
function delProddet(pro){
console.log(div)
pro.removeChild(div);
}
