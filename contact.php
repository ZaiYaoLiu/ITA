<!DOCTYPE html>
<html lang="">
<head>
    <?php include_once("include_head.php");?>
</head>
<body>
    <?php include_once("include_header.php");?>
    <div class="banner">
        <div class="content">
            <h1>CONTACT</h1>
            <div class="breadcrumb">
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="item" itemprop="item" href="index.php" title="Home">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="item" itemprop="item" href="contact.php" title="Contact">
                            <span itemprop="name">Contact</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="content">
            <div class="contact_info">
                <h1>Inquiry Form</h1>
                <p>All products you have inquired are listed here. Please fill out this form to receive more detailed information from ITA.</p>
                <div class="contact_form">
                    <form action="">
                        <div class="group">
                            <div class="group_title">
                                <div class="name">Product Name</div>
                                <div class="delete">Delete</div>
                            </div>
                            <div class="group_pd">
                                <div class="name">BBQ Grill - Model.  WL 30000</div>
                                <a href="" class="delete">
                                    <img src="images/icon_5.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="input_group">
                            <div class="item">
                                <label for="inquiry_company">Company</label><input type="text" name="inquiry_company" id="inquiry_company" required="required">
                            </div>
                            <div class="item">
                                <label for="inquiry_country">Country</label>
                                <select type="text" name="inquiry_country" id="inquiry_country" required="required">
                                    <option value="">- Select Country - </option>
                                </select>
                            </div>
                            <div class="item">
                                <label for="inquiry_contact">Contact Person</label><input type="text" name='inquiry_contact' id='inquiry_contact' required="required">
                            </div>
                            <div class="item">
                                <label for="inquiry_position">Title</label><input type="text" name='inquiry_position' id='inquiry_position' >
                            </div>
                            <div class="item">
                                <label for="inquiry_tel">Phone</label><input type="text" name='inquiry_tel' id='inquiry_tel' required="required">
                            </div>
                            <div class="item">
                                <label for="inquiry_fax">Fax</label><input type="text" name='inquiry_fax' id='inquiry_fax'>
                            </div>
                            <div class="item">
                                <label for="inquiry_email">E-mail</label><input type="email" name='inquiry_email' id='inquiry_email' required="required">
                            </div>
                            <div class="item">
                                <label for="inquiry_website">Website</label><input type="text" name='inquiry_website' id='inquiry_website'>
                            </div>
                            <div class="area_item">
                                <label for="inquiry_comm2">Comments</label><textarea  name='inquiry_comm2' id='inquiry_comm2' cols="30" rows="10" required="required"></textarea>
                            </div>
                            <div class="item">
                                <label for="">Prefer Conact by</label>
                                <div class="check">
                                    <input type="checkbox" value='Phone' name='inquiry_contype[]' id='inquiry_contype[]'>Phone
                                    <input type="checkbox" value='Fax' name='inquiry_contype[]' id='inquiry_contype[]'>Fax
                                    <input type="checkbox" value='E-mail' name='inquiry_contype[]' id='inquiry_contype[]'>E-mail
                                </div>
                            </div>
                            <div class="security_item">
                                <label for="">Security Code</label>
                                <?php
                                //取得來源網址及當前網址
                                $request_uri = "https://".$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI'];    //取得完整當前網址
                                $parentReferer = (isset($_SERVER['HTTP_REFERER']))?$_SERVER['HTTP_REFERER']:$_SERVER['REQUEST_URI'];  //來源網址
                                //寄送後返回上一頁網址用
                                $localhost_url = $request_uri;
                                ?>
                                <input type="text" id="check_passcode" size="10" name="check_passcode" class="" required autocomplete="off">
                                <div class="security"><img class="img-fluid" id="verify_code" src="<?=$web_path;?>code_image.php?<?=date("YmdHis");?>" onclick="document.getElementById('verify_code').src='<?=$web_path;?>code_image.php?' + Math.random();"></div>
                                <input type="hidden" id="passcode" name="passcode" value="">
                                <input type="hidden" id="check_code_err" name="check_code_err">
                                <input type="hidden" id="it_id" name="it_id" value="I0030">
                                <input type="hidden" id="lang" name="lang" value="<?=$lang;?>">
                                <input type="hidden" id="com_id" name="com_id" value="<?=CONFIG_COMID;?>">
                                <input type="hidden" id="pd_list" name="pd_list" value="<?=htmlspecialchars($pd_list,ENT_QUOTES);?>">
                                <input type="hidden" id="request_uri" name="request_uri" value='<?=htmlspecialchars(urldecode($request_uri),ENT_QUOTES);?>' />
                                <input type="hidden" id="parentReferer" name="parentReferer" value="<?=urldecode($parentReferer);?>" />
                                <input type="hidden" id="localhost_url" name="localhost_url" value="<?=$localhost_url;?>" />
                            </div>
                        </div>
                        <div class="send_btn">
                            <a href="">
                                <div class="btn">
                                    <div></div>
                                    <span>SEND</span>
                                </div>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("oem_url.php");?>
    <?php include_once("include_footer.php");?>
</body>
</html>