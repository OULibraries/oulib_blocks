<?php
/**
* Template Variables
*
* search_scope: A search scope variable to pass along to Exlibris.
* button_title: The title of the search button for the form.
*/
?>


<form name="searchForm" role="search" method="get" action="https://ou-primo.hosted.exlibrisgroup.com/primo_library/libweb/action/dlSearch.do" enctype="application/x-www-form-urlencoded; charset=utf-8" id="simple" target="_self" class="searchPrimo">
    <input name="institution" value="OU" type="hidden">
    <input name="vid" value="OU" type="hidden">
    <input name="group" value="GUEST" type="hidden">
    <input name="onCampus" value="true" type="hidden">
    <input name="displayMode" value="full" type="hidden">

    <div class="container-fluid">
	<div class="row">
        <div class="col-md-10 col-sm-9 col-xs-9" style="padding-right:5px">
            <input class="form-control form-text" type="hidden" name="query" />
            <input class="form-control form-text" type="text" name="queryTemp" />
			
			<div style="text-align:right; float:right;"> <a href="https://ou-primo.hosted.exlibrisgroup.com/primo_library/libweb/action/search.do?mode=Advanced&ct=AdvancedSearch&scp.scps=scope%3A%28ou_dspace%29%2Cscope%3A%2801OKLA_NORMANLAW%29&dscnt=0&menuitem=0&vid=OU" Target="_blank">Discover Local (Catalog) </a></div>
			
			<div style="float:right; padding:0px 10px;" class="discover-border"> | </div>
			
			<div style="text-align:right; float:right;">
			<a href="https://ou-primo.hosted.exlibrisgroup.com/primo_library/libweb/action/search.do?mode=Advanced&ct=AdvancedSearch&dscnt=0&menuitem=0&vid=OU" Target="_blank">Advanced Search </a> </div> 
			
        </div>
        <input name="search_scope" value="<?php print $search_scope; ?>" type="hidden">

        <div class="col-md-1 col-sm-2 col-xs-2">
            <button class="btn btn-default form-submit btn-primary" value="<?php print $button_title; ?>" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
    </div> 
	</div>


</form>

<p>&nbsp;</p>
