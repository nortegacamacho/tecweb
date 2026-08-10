function validar()
{
    if (document.form1.text1.value.length<5)
    {
        alert("INgrese al menos 5 caracteres")
        document.form1.text1.value="";
    }
}
