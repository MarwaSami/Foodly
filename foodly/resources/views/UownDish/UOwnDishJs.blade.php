
<script>
var Subcatagories =  {!!json_encode($subs)!!};
var ingredients={!!json_encode($ingredients)!!};
var Dishselected=[];
var Dishesseleceted=[];
var input=document.createElement('input');
input.value=ingredients;
var ValidCreateDetail = [false, false, false, false];
function getTypeSelected(Selection){
    var Typeselected=[];
    for(var i=0; i<Subcatagories.length; i++){
    if(Subcatagories[i].category==Selection)
    {

     Typeselected.push({"sub_category":Subcatagories[i].subs,"bgimg":Subcatagories[i].bgimage})
    }
}
return Typeselected;
}
function getDishselected(Selection,subcategory){
Dishselected=[];
for(var i=0;i<ingredients.length;i++)
{
    if(ingredients[i].category==Selection && ingredients[i].subcategory==subcategory)
    {
    Dishselected.push({"name":ingredients[i].name,"price":ingredients[i].price,"calories":ingredients[i].calories})
    }
}
}
// Order class
var Id = 1;
var DishDetailObj;
var  Typeselected;
var USelected;
class Order {
    OrderList = [];
    TotalPriceofOrder =0;
    TotalQofOrder = 1;
    FormId=0;
    AddTocart(dish) {
        this.OrderList.push(dish);
    }
    Removefromcart(index) {
        this.OrderList.splice(index, 1)
    }
    ShowOlist() {
        if (this.OrderList.length != 0) {
            var Text = "<div><h1>Thank You </h1><h2>Bill</h2></div><div class='DishinBill orderlisthead'><p> Container </p><p>Size</p><p>Price</p> </div>"
            this.TotalPriceofOrder=0;
            for (var i = 0; i < this.OrderList.length; i++) {
                Text += DishinBill(this.OrderList[i], i);
                this.TotalPriceofOrder += this.OrderList[i].Totalprice;
            }
            Text += "<p>Total Price :" + (this.TotalPriceofOrder) * (this.TotalQofOrder) + "</p>"
            Text += Quantity(this.TotalQofOrder)
            return Text
        }
        else {
            return " <p style='color: #d03816;'> <i class='fa-solid fa-octagon-exclamation' style='color: #d03816;'></i>There is No order Your Request</p>"
        }
    }
    Clear() {
        this.OrderList = [];
        this.TotalPriceofOrder = 0;
        this.TotalQofOrder = 1;
    }
    SetOrderinCard(){
        var TotalPrice=0;
        var Text="";
        for (var i = 0; i < this.OrderList.length; i++) {
            Text+="<input class='cardorder' name='Dish["+this.FormId+"][Ingred]["+i+"][name]'value='"+this.OrderList[i].Udish+"'hidden>"
            Text+="<input class='cardorder' name='Dish["+this.FormId+"][Ingred]["+i+"][size]'value='"+this.OrderList[i].Usize+"'hidden>"
            TotalPrice+=parseInt(this.OrderList[i].Totalprice);
        }
        Text+="<input class='cardorder' name='Dish["+this.FormId+"][price]'value='"+TotalPrice+"'hidden>";
        // Text+="<input class='cardorder' name='Dish[Ingred]'value='"+Ingerd+"'hidden>";
       // you are here line 80
        for (var i = 0; i < this.OrderList.length; i++) {
            Text+="<div class='Order'><p>"+ this.OrderList[i].Udish+"</p>";
            Text+="<p>"+this.OrderList[i].Totalprice+"</p>";
            Text+="<p>"+ this.OrderList[i].Usize+"</p></div>";
        }
        this.FormId++;
        return Text;
}
}
class DishDetail {
    Udish
    UPrice;
    Ucala
    Usize = "Small"
    Totalprice =this.UPrice;
    constructor(Udish, UPrice, Ucala) {
        this.Udish = Udish;
        this.UPrice = UPrice;
        this.Ucala = Ucala;
        this.Totalprice = UPrice;
    }
    Display() {
        console.log("Udish :" + this.Udish + ",Uprice" + this.UPrice, ",UCala:" + this.Ucala + "Total Price :" + this.Totalprice)
    }
    // mode : true if add or false if minus
    setSize(Usize) {
        this.Usize = Usize;
        switch (Usize) {
            case "Small":
                this.Totalprice = this.UPrice;
                break;
            case "Medium":
                this.Totalprice = this.UPrice + 5;
                break;
            case "Large":
                this.Totalprice = this.UPrice + 10;
                break
        }
        return this.Totalprice
    }
    AddDish() {
        this.Totalprice += this.Totalprice;
        this.UQ++;
    }
    ReDish() {
        if (this.UQ > 0) {
            this.Totalprice -= this.Totalprice;
            this.UQ--;
        }
        else {
            this.Q = 0;
        }
    }
}
class NofOrder {
    OrdersDishList = [];
    TTotalPrice=0;
    OrderQList=[];
    AddTocart(dish,Quantity) {
        this.OrdersDishList.push(dish);
        this.OrderQList.push(Quantity);
    }
    Removefromcart(index) {
        this.OrdersDishList.splice(index,1)
        this.OrderQList.splice(index, 1)
    }
    ShowOlist() {
        if (this.OrdersDishList.length != 0) {
            var Text="<form action='/sub' method='get'>";
            for (var i = 0; i < this.OrdersDishList.length; i++) {
                Text += "<p>"+USelected+"</p>";
                Text+="<div class='Order orderlisthead'><p>Ingred</p><p>Price</p><p>Size</p></div>";
                Text+="<input class='cardorder' name='Dish["+i+"][name]'value='"+USelected+"'hidden>";
                Text+= this.OrdersDishList[i];
                Text+="<label for='TotalQ'>Total Quantity : </label>"
                Text+="<input class='cardorder total' style='display:block;' name='Dish["+i+"][Q]'value='"+this.OrderQList[i]+"'readonly>"
            }
            Text+="<input type='text' name='NofDishes' value='"+this.OrdersDishList.length+"' hidden>";
            Text+="<label for='TotalPrice'>Total Price</label>";
            Text+="<input class='cardorder total' style='display:block;' name='Total Price ' value='"+ this.TTotalPrice+"'readonly>";
            Text+="<button class='btn btn-primary Fcart' > Go To Card </button>"
            Text+="</form>";
            return Text;
        }
        else {
            return " <p style='color: #d03816;'> <i class='fa-solid fa-octagon-exclamation' style='color: #d03816;'></i>There is No order Your Request</p>"
        }
    }
    SetTotalPrice(TotalPrice){
    this.TTotalPrice+=TotalPrice;
    }
    Clear() {
        this.OrdersDishList=[];
        this.OrderQList = [];
        this.TTotalPrice=0;
    }
}
var Orderobj = new Order;
var NofOrderObj = new NofOrder;
function USelection(UOPtion) {
    document.getElementById('showBillButt').style.display = "block";
    ValidCreateDetail = [false, false, false, false];
    HideDetails();
    Dishesseleceted=[];
    if (UOPtion.innerText == "SANDWICHES") {

        USelected="SANDWICHES";
      Typeselected=getTypeSelected(USelected);
    }
    else if(UOPtion.innerText == "MEALS")
    {
        USelected="MEALS";
      Typeselected=getTypeSelected(USelected);

    }
    else if(UOPtion.innerText == "PIZZAS"){
        USelected="PIZZAS";
      Typeselected=getTypeSelected(USelected);
    }
    else if(UOPtion.innerText == "PASTA")
    {
        USelected="PASTA";
      Typeselected=getTypeSelected(USelected);
    }
    else if(UOPtion.innerText == "FRESHJUICES"){
        USelected="FRESHJUICES";
      Typeselected=getTypeSelected(USelected);
    }
    DisplayDishes(Typeselected);
}
/* Function  Display Dishes based on selection */
function DisplayDishes(Typeselected){
    var divclass = document.getElementsByClassName("Dish")
    for (var i = 0; i < Typeselected.length; i++) {
            divclass[i].style.display = "block";
            divclass[i].style.backgroundImage = "url("+Typeselected[i].bgimg+")";
            ShowCard(divclass[i]);
        }
}
function ShowCard(parent) {
    var TypeCont = parent.getElementsByClassName('Class')[0]
    TypeCont.style.display = "block";
    TypeCont.setAttribute('class', 'class accordion');
    var index = parseInt(parent.id)
    if (ValidCreateDetail[index] == false) {
        var Udish = "<ul>";
        var UdishType = " ";
        var Type=Typeselected[index].sub_category;
        UdishType = "<h2 style='font-size:22px!important ;'>" + Typeselected[index].sub_category + "</h2>";
        getDishselected(USelected,Typeselected[index].sub_category)
        Dishesseleceted.push(Dishselected);
         console.log(Dishesseleceted);
        for (var i = 0; i < Dishselected.length; i++) {
            Udish += "<li class='TypeCont' onclick='ShowDCard(this)'>" + Dishselected[i].name + "</li>";
        }
        var Contdiv = createAccordionItem(Udish, UdishType)
        TypeCont.innerHTML = Contdiv;
        ValidCreateDetail[index] = true;
    }

}
function ShowDCard(Selection) {
    var Selected = Selection.innerText;
    var parent = Selection.parentNode;
    /*Reset list Color*/
    ResetListColor(parent, "#292828")
    Selection.style.color = "#d03816";
    var UPrice;
    var Ucala;
    /* Get Dish parent  */
    parent = GetParent(parent)
    /* Reset Size list */
    /*Reset list Color*/
    Type=parent.getElementsByTagName('h2')[0].innerText;
    ResetListColor(parent.getElementsByClassName('Size')[0], "#d03816")
    var Pindex = parent.id; // Get id of parent that is equal to index of array
    for (var j = 0; j < Dishesseleceted[Pindex].length; j++) {
        if (Dishesseleceted[Pindex][j].name == Selected) {
            UPrice = parseInt(Dishesseleceted[Pindex][j].price);
            Ucala = Dishesseleceted[Pindex][j].calories;
            break;
        }
    }
    var DetailCont = parent.getElementsByClassName("DishDetail")[0];
    DishDetailObj = new DishDetail(Selected, UPrice, Ucala)
    SetDetail(DishDetailObj, DetailCont)
    DetailCont.style.display = "block";

}
function createAccordionItem(Body, Header) {
    var Text = "<div class='accordion-item'>";
    Text += " <div class='accordion-header'>";
    Text += " <div class='accordion-button' data-bs-toggle='collapse' data-bs-target='#collapse" + Id + "'>"
    Text += Header;
    Text += "</div>" + "</div>";
    Text += "<div id='collapse" + Id + "' class='accordion-collapse collapse hide'>" + "  <div class='accordion-body'>"
    Text += Body + "</ul>";
    Text += "</div>" + "</div>" + "</div>";
    Id++;
    return Text;
}
// This function  Creat Size  in DishDetail cont and return the s
function SetDetail(DishDetailObj, parent) {
    var Udish = parent.getElementsByClassName('Selected')[0]
    var Uprice = parent.getElementsByClassName('Uprice')[0]
    var Ucala = parent.getElementsByClassName('Ucala')[0]
    var TotalPrice = parent.getElementsByClassName('TotalPrice')[0]
    Udish.innerText = DishDetailObj.Udish;
    Uprice.innerText = DishDetailObj.UPrice;
    Ucala.innerText = DishDetailObj.Ucala;
    TotalPrice.innerText = DishDetailObj.Totalprice;
}
function SizeSelection(Selection) {
    var SText = Selection.innerText;
    var endIndex = SText.indexOf('(');
    var SelSize = SText.substring(0, endIndex);
    var TotalPrice = DishDetailObj.setSize(SelSize);
    var parent = Selection.parentNode;
    /*Reset list Color*/
    ResetListColor(parent, "#d03816")
    Selection.style.color = "#292828";
    /* Get parent */
    parent = GetParent(parent)
    parent.getElementsByClassName('TotalPrice')[0].innerText = TotalPrice;
}
function ADDCart(parent) {
    var [Dframe, contframe] = ReOrderFramandDishDetCont(parent);
    Dframe.style.opacity = "0.5%";
    contframe.getElementsByClassName('Udish')[0].innerText = DishDetailObj.Udish;
    contframe.getElementsByClassName('Size')[0].innerText = DishDetailObj.Usize;
    contframe.getElementsByClassName('AddTPrice')[0].innerText = DishDetailObj.Totalprice;
    contframe.style.display = 'block';
}
// this function return to cart
function ReCart(parent) {
    var [Dframe, contframe] = ReOrderFramandDishDetCont(parent);
    Dframe.style.opacity = "1";
    contframe.style.display = 'none';
}
// this function will Add dish to bill
function ConToCart(parent) {
    var parent = GetParent(parent);
    Orderobj.AddTocart(DishDetailObj)
    ReCart(parent);
    document.getElementsByClassName('Bill')[0].innerHTML = Orderobj.ShowOlist();
    parent.getElementsByClassName('DishDetail')[0].style.display = "none";
    /* reset ul color*/
    parent=parent.getElementsByClassName('Class')[0].getElementsByTagName('ul')[0];
    ResetListColor(parent,'#292828')
}
// this function getparent
function GetParent(parent) {
    while (isNaN(parseInt(parent.id))) {
        parent = parent.parentNode;
    }
    return parent;
}
// this function Reset Color of list items
function ResetListColor(parent, color) {
    var li = parent.getElementsByTagName('li');
    for (var i = 0; i < li.length; i++) {
        li[i].style.color = color;
    }
}
// this function Return Order frame and DishDetail Con
function ReOrderFramandDishDetCont(parent) {
    var parent = GetParent(parent)
    var Dframe = parent.getElementsByClassName('DishDetailCont')[0];
    var contframe = parent.getElementsByClassName("Order-frame")[0];
    return [Dframe, contframe]
}
/* Dishes in Bill this function write Contain of dish in bill*/
function DishinBill(Dish, id) {
    var Text = "<div Class='DishinBill'> <p>" + Dish.Udish + "</p>";
    Text += "<p>" + Dish.Usize + "</p>";
    Text += "<p>" + Dish.Totalprice + "</p>";
    Text += "<button id='" + id + "' class='btn' onclick='RemoveDish(this)'><i class='fa-solid fa-xmark 'style='color: #d03816'></i></button>"
    Text += "</div>"
    return Text
}
/*  Remove Dishfrom Bill */
function RemoveDish(btn) {
    Orderobj.Removefromcart(parseInt(btn.id));
    document.getElementsByClassName('Bill')[0].innerHTML = Orderobj.ShowOlist();
}
/* Show Bill */
function showBill() {
    document.getElementsByClassName('showBill')[0].style.display = "block";
}
/* Set Quantity and Button of more */
function Quantity(UQ) {
    var Text = "<div><span>Quantity</span>"
    Text += "<button class='btn' onclick='AddDish()'><i class='fa-solid fa-plus 'style='color: #d03816'></i></button>";
    Text += "<label id='UQ'>" + UQ + "</label>";
    Text += "<button class='btn' onclick='DecDish()'><i class='fa-solid fa-minus 'style='color: #d03816'></i></button></div>"
    Text += "<button class='btn btn-primary' onclick='Cart()'>Go To Card </button>"
    return Text;
}
/*  ADD Quatity */
function AddDish() {
    Orderobj.TotalQofOrder++;
    document.getElementsByClassName('Bill')[0].innerHTML = Orderobj.ShowOlist();
}
/*  Decrease Quatity */
function DecDish() {
    if (Orderobj.TotalQofOrder > 1) {
        Orderobj.TotalQofOrder--;
        document.getElementsByClassName('Bill')[0].innerHTML = Orderobj.ShowOlist();
    }
    else {
        Orderobj.TotalQofOrder = 1;
        Orderobj.Clear();
        document.getElementsByClassName('Bill')[0].innerHTML = Orderobj.ShowOlist();
    }
}

function Cart(){
  var Confirm =confirm('Do you Want more order');
  NofOrderObj.SetTotalPrice(Orderobj.TotalPriceofOrder);
  NofOrderObj.AddTocart(Orderobj.SetOrderinCard(),Orderobj.TotalQofOrder)
  if(Confirm)
  {
    Orderobj.Clear();
    document.getElementsByClassName('Bill')[0].innerHTML ="";
  }
  else
  {
    // console.log(NofOrderObj.OrdersDishList);
    document.getElementsByClassName('Bill')[0].style.opacity="0.5%"
    document.getElementsByClassName('Order-frame2')[0].innerHTML=NofOrderObj.ShowOlist();
    document.getElementsByClassName('Order-frame2')[0].style.display="block";
    var Btnok=document
    /* visit card Page */

  }

}
function ShowSteps(){
    document.getElementsByClassName('Steps')[0].style.display="none";
    document.getElementsByClassName('Slider')[0].style.display="block";
}
function HideSteps(){
    document.getElementsByClassName('Steps')[0].style.display="block";
    document.getElementsByClassName('Slider')[0].style.display="none";
}
function HideDetails(){
    for(var i=0;i<4;i++)
   {
    document.getElementsByClassName('DishDetail')[i].style.display="none";
   }
}

</script>
