<?php
/**
* Template Variables
*
* search_scope: A search scope variable to pass along to Exlibris.
* button_title: The title of the search button for the form.
*/
?>


<form name="searchForm" role="search" method="get" action="http://ou-primo.hosted.exlibrisgroup.com/primo_library/libweb/action/dlSearch.do" enctype="application/x-www-form-urlencoded; charset=utf-8" id="simple" target="_self" class="searchPrimo">
    <input name="institution" value="OU" type="hidden">
    <input name="vid" value="OU" type="hidden">
    <input name="group" value="GUEST" type="hidden">
    <input name="onCampus" value="true" type="hidden">
    <input name="displayMode" value="full" type="hidden">

    <div class="row">
        <div class="col-md-8 col-md-push-4 col-sm-12 col-xs-12" style="padding-right:5px">
            <input class="form-control form-text" type="hidden" name="query" />
            <input class="form-control form-text" type="text" name="queryTemp" />
        </div>
        <input name="search_scope" value="<?php print $search_scope; ?>" type="hidden">

        <div class="col-md-1 col-sm-1 col-xs-1">
            <button class="btn btn-default form-submit btn-primary" value="<?php print $button_title; ?>" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
    </div> 


</form>
<div class="discover-search-links"><a href="http://ou-primo.hosted.exlibrisgroup.com/primo_library/libweb/action/search.do?mode=Advanced&ct=AdvancedSearch&dscnt=0&menuitem=0&vid=OU" Target="_blank">Advanced Search </a></div>
<p>&nbsp;</p>
