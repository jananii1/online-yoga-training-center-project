function validate()
{
    var valid = false;

    if(document.getElementById("checkbox").checked)
    {
        valid = true;
    }

    if(valid)
    {
        return true;
    }
    else
    {
        alert("Please agree to terms and conditions");
        return false;  
    }
}