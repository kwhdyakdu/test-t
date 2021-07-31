                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Most Viewes TV Channels</h5>
                            </div>
                            <ul class="filter__controls">
                                <!-- <li class="active" data-filter="*">Day</li> -->
                                <li data-filter=".week"><a href="/most.php">View All</a></li>
                            </ul>
                            <div class="filter__gallery">
																									<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/tv/config.php');
$limit=6;
// $trimmed="kids";
// Build SQL Query  
$query = "select * from `tv` WHERE `request`=0 
ORDER BY views DESC";

// ORDER BY RAND()";
// EDIT HERE and specify your table and field names for the SQL query

$numresults=mysql_query($query);
$numrows=mysql_num_rows($numresults);

if ($numrows==0)
{
include ($_SERVER['DOCUMENT_ROOT'] . '/tv/config.php');

$query = "select * from tv WHERE `request`=0 AND MATCH(nm, cat, cnt) AGAINST('$trimmed' IN BOOLEAN MODE) ORDER BY views DESC";
// ORDER BY RAND()

$numresults=mysql_query($query);
$numrows=mysql_num_rows($numresults);
}

if ($numrows!=0){
// two lines self added, to don't show page links if no result used if
if ($numrows >= 1)
{
// next determine if s has been passed to script, if not use 0
if (empty($s)) {
    $s=0;
}

// get results
$query .= " limit 0,6";
$result = mysql_query($query) or die("Couldn't execute query 1111");
// display what the person searched for
// begin to show results set top table for total
;
$count = 1 + $s ;
// now get results returned from db

while ($row= mysql_fetch_array($result)) {
    $id = $row["id"];
    $vidname = $row["nm"];
    $description = $row["cnt"];
    $url = $row["lnk1"];
    $thumbimg = $row["img"];
    $views = $row["views"];
    $category = $row["cat"];
    $user = $row["user"];
    $date = $row["date"];
	
if ((empty($thumbimg)) || (!isset($thumbimg)))
{
$noicon = substr(str_shuffle(str_repeat('123456789',1)),0,1);
$thumbimg = "//hazratsultanbahu.com/tv/Tv2-images/no-icon/$noicon.jpg";
} else {

// chnage thumbimg to witout http
    // find and replace
 //   $urlthumbimg = str_replace('http://', '//', $thumbimg);  
 //   $thumbimg = $urlthumbimg;
// end chnage thumbimg to witout http

		if ((stripos($thumbimg, "http://") !== false) || (stripos($thumbimg, "https://") !== false))
		{
		$urlthumbimg = str_replace('http://', '//', $thumbimg);
		$thumbimg = $urlthumbimg;
		$thumbimg = $thumbimg;
		} else {
		$thumbimg = "//hazratsultanbahu.com/tv/Tv2-images/$thumbimg";
		}
}	
/*
	// chnage thumbimg to witout http
    // find and replace
    $urlthumbimg = str_replace('http://', '//', $thumbimg);  
    $thumbimg = $urlthumbimg;
// end chnage thumbimg to witout http

if (stripos($thumbimg, "http://") !== false) {
$thumbimg = $thumbimg;
} else {
$thumbimg = "//hazratsultanbahu.com/tv/Tv2-images/$thumbimg";
*/

// now you can display the results returned
?>
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="<? print "$thumbimg"; ?>">
                                <div class="ep"><? print "<a title='$description' href='/search-$description-Live TV channels-0.php'><font color='#FFFFFF'><b><i>$description</i></b></font></a>"; ?></div>
                                <div class="view"><i class="fa fa-eye"></i> <? print "$views"; ?></div>
                                <? print "<h5><a title='$vidname' href='play-tv-$id-$vidname Live TV-$s-kids.php'>$vidname Live TV</a></h5>"; ?>
								<!--<h6><a href="#">Kids</a></h6>-->
                            </div>			

						<?	
 $count++ ;
}
}
}
?>
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>New Comment</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="/tm4/img//sidebar/comment-1.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="/tm4/img//sidebar/comment-2.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="/tm4/img//sidebar/comment-3.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="/tm4/img//sidebar/comment-4.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Monogatari Series: Second Season</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>Top Searches by Country</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__text">
				<ul>
				<?
				include ($_SERVER['DOCUMENT_ROOT'] . '/tm4/showcntt.php');
				?>
                </ul>
            </div>
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>Top Searches by Category</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__text">
				<ul>
				<?
				include ($_SERVER['DOCUMENT_ROOT'] . '/tm4/showcatt.php');
				?>
                </ul>
            </div>
        </div>
    </div>
<!-- search section -->
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>Search</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__text">
				
				<div class="login__form">
                        <form action="/search.php" method="get">
							<div class="input__item">
                                <input type="text" value="search" name="q" onBlur="if(this.value=='') this.value='search'" onFocus="if(this.value =='search' ) this.value=''" >
                            </div>
                       <button name="Search" type="submit" class="site-btn">Search</button>
                        </form>
				</div>
                
            </div>
        </div>
    </div>
<!-- end search section -->
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>All Live TV Channels</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__text">
				<ul>
				<a href="all-live-tv-channels.php"><font color="#FFFFFF">All Live TV Channels</font></a>
                </ul>
            </div>
        </div>
    </div>
	
</div>
</div>