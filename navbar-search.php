 <div class="navbar__search">
     <form name="frmsearch" id="searchfrm" class="searchfrm" method="get" action="<?php echo base_url_site . 'styles' ?>">
         <!-- Start - Please explain search form - John - 09/04/2020 -->
         <div class="inp--search">
             <input class="inp inp--search__input" type="search" placeholder="Search Products, Brands" name="q" id="q" value="<?php echo (isset($_REQUEST['q']) && !empty($_REQUEST['q']) ? $_REQUEST['q'] : ''); ?>" autocomplete="off" maxlength="40" onkeypress="return onlyAlphabets(event,this);" />
             <button type="submit" class="btn inp--search__button" alt="Minimum 3 character" title="Minimum 3 character">
                 <span class="icon">
                     <svg width="19" height="18" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                         <path d="M18.66 16.66l-5.332-5.116a6.764 6.764 0 001.62-4.378c0-3.844-3.258-6.97-7.264-6.97C3.679.195.42 3.321.42 7.165c0 3.843 3.259 6.97 7.264 6.97a7.417 7.417 0 004.563-1.554l5.331 5.115c.15.144.392.144.54 0l.541-.518a.357.357 0 000-.52zM7.683 12.669c-3.162 0-5.735-2.469-5.735-5.503 0-3.035 2.573-5.503 5.735-5.503 3.163 0 5.735 2.468 5.735 5.503 0 3.034-2.572 5.503-5.735 5.503z" />
                     </svg>
                 </span>
             </button>

         </div>
         <div id="ajax_response"></div>
         <!-- Start - Please explain search form - John - 09/02/2020 -->
         <?php if (isset($_REQUEST['q']) && strlen($_REQUEST['q']) < 3) { ?>
             <small>Please enter at least 3 characters</small>
         <?php } ?>
         <!-- End - Please explain search form - John - 09/02/2020 -->
     </form>
     <!-- Start - Better search with images like SnS search - Roi - 09/08/2020 -->
     <div id="search-auto" class="search search-auto">
         <div class="search__live">
             <div class="search__live-header">
                 <h1>You Search <span></span></h1>
             </div>
             <ul class="search__live-list" id="result-image">
                 <!-- Start - Live search updates - Roi - 09/22/2020 -->

             </ul>
             <!-- Start - Add new features to live image search - Roi - 10/05/2020 -->
             <div class="search__help">
                 <h1 class="search__help-title">How Can We Help?</h1>
                 <ul class="search__help-list">
                     <li class="search__help-items">
                         <a href="<?php echo base_url_site . 'cms/page/shipping' ?>">Shipping</a>
                     </li>
                     <li class="search__help-items">
                         <a href="<?php echo base_url_site . 'tracking' ?>">Tracking</a>
                     </li>
                     <li class="search__help-items">
                         <a href="<?php echo base_url_site . 'cms/page/help' ?>">Help / FAQ</a>
                     </li>
                     <li class="search__help-items">
                         <a href="<?php echo base_url_site . 'cms/page/returns' ?>">Return Policy</a>
                     </li>
                 </ul>
             </div>
             <!-- End - Add new features to live image search - Roi - 10/05/2020 -->

         </div>

         <div class="search__auto">
             <div class="search__auto-header">
                 <button class="search__auto-exit" id="s-auto-exit">&#10005;</button> <!-- Start - search default fix - CL - 11/05/2020  -->
             </div>
             <ul class="search__auto-result" id="result-text">
                 <!-- Start - Live search updates - Roi - 09/22/2020 -->
             </ul>
         </div>

     </div>
     <!-- End - Better search with images like SnS search - Roi - 09/08/2020 -->
     <!-- Start - Add new features to live image search - Roi - 10/05/2020 -->
     <div class="search__default" style="display:none;" id="search__default">
         <button class="search__default-exit" id="s-default-exit">&#10005;</button> <!-- Start - search default fix - CL - 11/05/2020  -->
         <h3>Popular Searches</h3>
         <ul class="search__popular"></ul>
         <h3>Recent Searches</h3>
         <ul class="search__recent"></ul>
     </div>
     <!-- End - Add new features to live image search - Roi - 10/05/2020 -->
 </div>