function searchPrimo()
{
document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value;
document.forms["searchForm"].submit();
}
