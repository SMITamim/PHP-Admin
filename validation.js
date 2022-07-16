function valid()
{
    var uname=document.getElementById("uname").value;
    if(uname.length<3)
    {
        document.getElementById("nameerror").innerHTML="Name must be more that 3 character";
        return false;
    }
    else
    {
        document.getElementById("nameerror").innerHTML="Good to go";
        return true;
    }
}