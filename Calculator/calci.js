function clear1()
{
    document.getElementById("text1").value="";
    document.getElementById("text2").value="";
    console.log("cleared");
}

function addClick(num)
{
    
    document.getElementById("text1").value=document.getElementById("text1").value+num;
    console.log("addClick");
}

function calculate()
{
    console.log("evaluate");
    var num1=document.getElementById("text1").value;
    var num2=eval(num1);
    document.getElementById("text2").value=num2;
    
}