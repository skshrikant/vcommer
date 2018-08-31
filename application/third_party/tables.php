<?php
class TABLES {
	
	public static $USER = 'tbl_user';
	public static $USER_INFO = 'tbl_userinfo';
	public static $USER_CATEGORIES= 'user_categories';
	public static $USER_SUBCATEGORIES= 'user_subcategories';
	public static $BUSINESS_INFO = 'tbl_buisness_info';
	public static $BUSINESS_BRANCHES = 'tbl_business_branches';
	public static $COMPANY_INFO = 'tbl_company_info';
	public static $RNDCAPACITY_TYPE = 'tbl_rndcapacity_type';
	public static $RNDUSERFACTORY = 'tbl_userfactory_rndtype';
	public static $USERTRADMARKET = 'tbl_user_tradmarket';
	public static $USERINTERNATIONALTRAD = 'tbl_user_international_trad';
	public static $USERPAYMENT_TERMS= 'tbl_user_payment_terms';
	public static $USERPAYMENT_CURRENCY= 'tbl_user_payment_currency';
	public static $FACTORY_INFO = 'tbl_factory_info';
	public static $TRADE_INFO = 'tbl_trade_info';
	public static $CERTIFICATE_INFO = 'tbl_certificate_info';
	public static $TRADMARKET = 'tbl_markets';
	public static $INTERNATIONALTRADE = 'tbl_international_trade';
	public static $PAYMENTCURRENCY = 'tbl_payment_currency';
	public static $PAYMENT_TERMS = 'tbl_payment_terms';
	public static $CERTIFICATE_TYPE = 'tbl_certificate_type';
	public static $USER_RND_TYPE = 'tbl_userfactory_rndtype';
	public static $RND_TYPE = 'tbl_rndcapacity_type';
	public static $MORE_CERTIFICATE = 'tbl_more_certificates';
	public static $MYFILE = 'tbl_myfile';
	public static $BUSINESSROUTE = 'tbl_businessroutes`';
	public static $CONTACTPERSON = 'tbl_contactperson`';
	public static $SUBSCRIPTION_PLAN = 'tbl_subscription_plan';
	public static $SUBSCRIPTION_ITEMS = 'tbl_subscription_plan_item';
	public static $GAURANTEE_TERMS = 'tbl_gaurantee_terms';
	public static $MY_3DPRODUCT = 'tb_product_3d';
	public static $PRODUCT_3DPRODUCT = 'tb_product_3dimage';
	public static $BUSINESS_INFO_IMAGE = 'tbl_business_info_image';
	public static $PAYMENT_TABLE = 'tbl_payments';
	public static $FAVORITE = 'tbl_myfavorite';
	public static $BUSINESSINFOIMAGE = 'tbl_business_info_image';
	public static $MYCART = 'tbl_mycart';
	public static $INQUIRY = 'tbl_inquiry';
	public static $INQUIRY_TYPE = 'tbl_inquiry_type';
	public static $OFFER = 'tbl_offer';
	public static $OFFER_TYPE = 'tbl_offer_type';
	public static $MY_FAVOURITE = 'tbl_myfavorite';
	public static $SERVICEVEDIO = 'tbl_servicevedio';
	public static $SHIPPING_CATEGORIES = 'tbl_shipping_main_categories';
	public static $SHIPPER_SERVICES = 'tbl_shipper_service';
	public static $LANGUAGEPERSONALINFO = 'tbl_languagepersonalinfo';
	public static $LANGUAGECOMPANYINFO = 'tbl_languagecompanyinfo';
	public static $LANGUAGEFACTORYINFO = 'tbl_languagefactorydetail';
	public static $LANGUAGETRADEINFO = 'tbl_languagetradeinfo';
	public static $LANGUAGECERTIFICATEINFO = 'tbl_languagecertificate';
	public static $LANGUAGEMAINPRODUCT = 'tbl_languagemainproduct';
	public static $LANGUAGESUBPRODUCT = 'tbl_languagesubproduct';
	public static $LANGUAGEPRODUCT = 'tbl_languageproduct';
	public static $LANGUAGEPRODUCTSPECIFICATION = 'tbl_languageproductspecification';
	public static $LANGUAGESERVICES = 'tbl_languageservice';
	public static $LANGUAGE = 'tbl_language';
	public static $LANGUAGEBUSINESS = 'tbl_languagebusiness';
	public static $LANGUAGEFIELDTRANSLATION = 'tbl_languagefieldtranslatation';
	public static $SERVICE_VISITORS = 'tbl_shipper_service_visitors';
	public static $INVOICE = 'tbl_invoice';
 
	
	/* ************ product tables ************ */
	public static $COUNTRY = 'tbl_country';
	public static $PRODUCT_STAGE = 'tbl_product_stage';
	public static $PRODUCT_MAIN_CATEGORY = 'tbl_product_main_category';
	public static $PRODUCT_SUB_CATEGORY = 'tbl_product_sub_category';
	public static $MAIN_PRODUCT = 'tbl_main_product';
	public static $SUB_PRODUCT = 'tbl_sub_product';
	public static $PRODUCT_ITEM = 'tbl_product_item';
	public static $PRODUCT_ITEM_COLOR = 'tbl_product_item_color';
	public static $PRODUCT_ITEM_SPEC = 'tbl_product_item_spec';
	public static $HOTSALE_PRODUCTS = 'tbl_hot_sale_menu';
	public static $NEW_ARRIVAL_PRODUCT = 'tbl_new_arrival_menu';
	public static $FEATURED_PRODUCT = 'tbl_featured_products';
	public static $FEATURED_3DPRODUCT = 'tbl_featured_3d_products';
	public static $PRODUCT_VIDEO = 'tbl_productvedio';
	public static $FEATURED_PRODUCT_VIDEO = 'tbl_featured_videos';
	
	public static $PRODUCTVEDIO = 'tbl_productvedio';
	public static $PRODUCTVEDIO_LIKES = 'tbl_productvedio_likes';
	public static $MAINSUBPRODUCTVEDIO = 'tbl_mainsubproductvedio';
	
	/* ************ Catalogue Tables ************* */
	public static $PRODUCT_CATALOGUE = 'tbl_product_catalogue';
	public static $PRODUCT_CATALOGUE_ITEM = 'tbl_product_catalogue_item';
	public static $FEATURED_CATALOGUE = 'tbl_featured_catalogue';
	
	/* ***********    Buyer /Sellers  ********    */
	public static $FEATURED_WORLD_BUYER = 'tbl_featured_world_buyer';
	public static $FEATURED_WORLD_SELLER = 'tbl_featured_world_seller';
	public static $ORDER= 'tbl_order';
	public static $ORDER_ITEM = 'tbl_order_item';
	public static $COMMUNITY_MEMBER = 'tbl_community_member';
	public static $POSTCOMMENT = 'tbl_community_post_comment';
	public static $POSTLIKE = 'tbl_community_post_like';
	public static $COMMUNITY_POST_OFFERS = 'tbl_community_post_offers';
	public static $COMMUNITY_POST_REQUESTS = 'tbl_community_post_requests';
	
	/* ***********    Stock-Goods  ********    */
	public static $STOCK_GOODS = 'tbl_stocks_goods';
	public static $BSTATION_POST = 'tbl_bstation_post';
	public static $BSTATION_POST_REQUEST = 'tbl_bstation_post_requests';
	public static $BSTATION_POST_OFFER = 'tbl_bstation_post_offers';
	
	
	
	/* ***********   Ads MS/FC ************ */
	public static $ADS_INFO = 'tbl_ads_info';
	public static $MAIN_SCREEN_ADS = 'tbl_home_page_ads';
	public static $FEATURED_CAROUSEL_ADS = 'tbl_featured_carousel_ads';
	
	public static $COMMMUNITY_POST = 'tbl_community_post';
	public static $COMMUNITY_POST_SHARE = 'tbl_community_post_share';
	
	public static $BUSINESS_VISITORS = 'tbl_business_visitors';
	public static $PRODUCT_VISITORS = 'tbl_product_visitors';
	
	public static $STOCK_REQUEST = 'tbl_stocks_buyer_request';
	public static $STOCK_OFFER = 'tbl_stocks_seller_offer';
	
	public static $UDT_IMAGES = 'tbl_udtalk_image';
	public static $BUYER_VERIFY_DOCS = 'tbl_buyer_verify_docs';
	public static $BUSINESS_LIKE_COMMENTS = 'tbl_business_like_comments';
	public static $MYSTORAGE = 'tbl_mystorage';
	public static $CHAT_MESSAGES = 'tbl_chat_messages';
	public static $CONTACT_US = 'tbl_contact_us';
        public static $COMECHAT = 'cometchat';
	/*alert*/
    public static $MANAGE_ALERT = 'tbl_manage_alert';


}