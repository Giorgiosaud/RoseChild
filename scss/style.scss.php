$LogoLoader:"<?php echo wp_get_attachment_image_src(get_option('child_theme')['logo_cargador'],'full',false)[0]; ?>";
$LogoDarkChild:"<?php echo wp_get_attachment_image_src(get_option('child_theme')['logo_dark_child'],'full',false)[0]; ?>";
$LogoLightChild:"<?php echo wp_get_attachment_image_src(get_option('child_theme')['logo_light_child'],'full',false)[0]; ?>";
$border_color: "<?php echo rose_get_object_option('border_box_color');?>";
$main_color: <?php echo rose_get_option('main-color','#ff3878');?>;
<?php echo rose_get_option('custom-css','');?>
div#status:before{
	background-image:url( $LogoLoader );
}
.m-team-cap{
	border-radius:50%;
}
.clearfix{
	clear:booth;
}
.m-team-member-social-icons a
{
	border-radius: 50%;
	font-size: 1.8rem;
	i{
		color:#fff;
	}
}
.m-team-member.circled-image img {
	border-radius: 50%;
}
header.transparent .logo,.logo{
	background-repeat:no-repeat;
	background-size: 70%;
	background-position: center;
	background-color: $main-color;
	height: 70px;
	width: 70px;
	border-radius: 9em;
	text-align: center;
	transition: all 2s;
}
.black-header .logo, header.transparent .logo{
	
	background-color: #e3e3e3;
}
header.transparent .logo{
	background-color: #e3e3e3;
}
.logo{
	background-color: #49b2d8;
}
.header-container {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 5px 0;
}
header{
	height: auto;
}
#status{
	padding: 20px;
	width: 150px;
	height: 150px;

}

#status, .arrw-prev:hover a, 
.arrw-next:hover a,
.return:hover a,
.default-bg,
.button,
.back-to-top,
.see-full,
.about-icon,
.cart-item-count,
.heading-page-section,
.heading-page-cover-section,
.header-bx .primary-navigation>ul>li.selected>a,
.tool-nav-item:hover,
.tool-nav-item:active,
.tool-nav-item:focus,
.m-send-button:hover,
.m-btn,
a.m-btn,
.m-nav-tabs li.active a,
.m-accordion dt.active,
.m-toggle dt.active,
.m-button-default,
.m-btn.m-btn-black:hover,
.m-btn.m-btn-default.m-btn-border:hover,
.m-pgs-bar-percent.m-pgs-bar-color,
.m-pgs-bar-thin-percent.m-pgs-bar-color,
.m-features-item .m-features-icon,
.m-features-item-two .m-features-icon,
.m-standard-list li:before,
.m-counter-list li:before,
.m-feature-cover-item:hover .m-btn,
.m-features-item-tree .m-features-icon,
.m-social-list-icons a.social-icon:hover,
.m-social-list-icons .social-icon:hover a,
.media-icon-2 i,
.page-title-section,
.m-icon-social a i:hover,
.blog-article-read-more:hover,
.tagcloud a:hover,
.heading-wrap-left:after,
.blog-masonry-article-icon,
.blog-grid-article-cap,
.blog-article-comments-count:hover,
.blog-article-masonry.blog-article-quote,
.blog-article-masonry.blog-article-link,
.blog-article-media-type,
.blog-article-tags ul li a,
.comment-content .reply a,
.pagination-count li a:hover,
.pagination li.active a,
.m-team-member-social-icons a:hover,
.subscribe-form .subscribe-btn a:hover,
.primary-navigation>ul>li.selected:after,
.m-pricing-table.active .pricing-table-button a,
.portfolio-style-two .portfolio-item-caption,
.portfolio-filter li a.current-filter,.pagination li span.current,
.product-cap .added_to_cart,
.woocommerce #review_form #respond .form-submit input,
.ui-custom-accordion.vc_tta-color-white.vc_tta-style-flat .vc_tta-panel.vc_active .vc_tta-panel-heading,
.ui-custom-accordion.vc_tta-color-white.vc_tta-style-flat .vc_tta-panel.vc_active .vc_tta-panel-heading:hover{
	background-color: $main_color;
}
.ui-nav-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab.vc_active>a{
	background-color: $main_color!important;
}
.close-modal,
.counter-item-default,
.default-color,
a:hover,
.m-card-icon i,
.m-nav-tabs li a,
.m-media-item-icon i,
.m-btn.m-btn-default.m-btn-border,
.m-features-item-three .m-features-icon,
.blog-article-title a:hover,
.blog-listed-article:hover .blog-listed-title,
.blog-article-nav-item a,
.footer-white .widget-blog-title a:hover,
.m-btn.m-btn-white:hover,
.m-tab-nav li.ui-state-active a,
.project-details>ul>li>dd>a:hover,
.primary-navigation>ul>li.selected>a,
.project-details>ul>li>dd>ul>li>a:hover,
.product-price ins,
.recent-product-price,
.search-modal-wrap input,
.search-modal-wrap:after,
.m-tabs-icon .m-tab-nav li.ui-state-active a,.woo-widget .woocommerce-Price-amount,.search-modal-wrap .search .search-submit,
.woocommerce .woocommerce-breadcrumb a:hover,
.woo-pagenation a:hover,.ui-nav-tabs.vc_tta.vc_tta-style-classic .vc_tta-tab>a{
	color: $main_color;
}

.cart .cancel:hover,
.woocommerce .cart .remove:hover,
.contact-form-wrap input:focus,
.contact-form-wrap textarea:focus,
.search-button,
.m-nav-tabs li a,
.m-accordion dt.active,
.m-toggle dt.active,
.m-media-item-icon,
.m-pricing-table.active,
.m-btn.m-btn-default.m-btn-border,
.pagination li.active a,
.portfolio-filter li a.current-filter,
.m-tabs-icon .m-tab-nav li.ui-state-active a,
.pagination li span.current,
.ui-nav-tabs.vc_tta.vc_tta-style-classic .vc_tta-tab>a,
.ui-nav-tabs.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab.vc_active>a{
	border-color: {$main_color};
}
.border-body .border-box-style{
	background-color: $border_color;
}
.socicon-color{
	.socicon-whatsapp{
		color:#20B038;
	}
	.socicon-twitter{
		color:#4da7de;
	}
	.socicon-github{
		color:#221e1b;
	}
	.socicon-behance{
		color:#000;
	}
	.socicon-skype{
		color:#28abe3;
	}
	.socicon-youtube{
		color:#e02a20;
	}
	.socicon-youtube{
		color:#51b5e7;
	}
	.socicon-google{
		color:#4285f4;
	}

	.socicon-instagram{
		color:#000;
	}
	.socicon-facebook{
		color:#3e5b98
	}
}
.responsive-iframe {
	position: relative;
	padding-bottom: 65.25%;
	padding-top: 30px;
	height: 0;
	overflow: auto; 
-webkit-overflow-scrolling:touch; //<<--- THIS IS THE KEY 
border: solid black 1px;
} 
.responsive-iframe iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.hover-circled {
	.vc-hoverbox-inner{
		min-height:380px !important;
	}
	.vc-hoverbox-block {
	    border-radius: 50%;
	    width: 380px;
	    height: 380px;
	    margin: auto;
	    left: 50%;
	    margin-left: -190px;
	}
}
.programas-imagen{
	.isotope-item{
		position: relative !important;
    	left: auto !important;
    	top: auto !important;
    	margin: 0 5px !important;
	}
	.wpb_image_grid_ul{
		position: relative !important;
    	display: flex;
    	align-items: center;
    	justify-content: center;
	}
}
@media only screen and (max-width: 1024px){
	header.transparent .logo{
		width: auto;
	}
}
