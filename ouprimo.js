
/**
 *  primo form submit, required for some reason
 *
 */
function searchPrimo()
{
    document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value;
    document.forms["searchForm"].submit();
}
