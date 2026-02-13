<?php if(Noindex == 'True'){ ?>
<meta name="robots" content="noindex">
<?php } else { ?>
    <?php if(GoogleSite == 'True' && (!empty(GoogleSiteKey))){ ?><meta name="google-site-verification" content="<?php echo GoogleSiteKey; ?>" /><?php } ?>
    <?php if(BingSite == 'True' && (!empty(BingSiteKey))){ ?><meta name="msvalidate.01" content="<?php echo BingSiteKey; ?>" /><?php } ?>
<?php } ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
<?php if(empty($seo)){	?>
    <title>Advanced Fatty Liver & NASH Treatment | ReMASH India</title>
    <meta name="description" content="Explore ReMASH for cutting-edge solutions to fatty liver, NASH, and cirrhosis. Discover advanced liver care medications like Rezdiffra and Resmetirom in India."/>
    <meta name="keywords" content="fatty liver medication,best medicine for liver,fatty liver treatment,NASH treatment,resmetirom,rezdiffra tablet,liver fibrosis treatment,medicine for liver cirrhosis,fatty liver medicine in India,advanced liver care,non-alcoholic fatty liver disease treatment,hepatic fibrosis solution" />
    <meta name="url" content="<?php echo base_url();?>" />
    <meta name="copyright" content="remash.co.in" />
    <link rel="canonical" href="<?php echo base_url();?>" />
<?php }else{ ?>
    <title><?php echo $seo[0]['meta_title']; ?></title>
    <meta name="description" content="<?php echo $seo[0]['meta_description']; ?>"/>
    <meta name="keywords" content="<?php echo $seo[0]['meta_keywords']; ?>" />
    <meta name="url" content="<?php echo base_url();?><?php echo $this->uri->segment(1);?>" />
    <meta name="copyright" content="remash.co.in" />
    <link rel="canonical" href="<?php echo base_url();?><?php echo $this->uri->segment(1);?>/<?php echo $this->uri->segment(2);?>" />
<?php } ?>