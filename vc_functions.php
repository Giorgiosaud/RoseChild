<?php
// qk_portfolio_by_id
if(function_exists('vc_map')){

vc_map( array(
   "name" =>  esc_html("QK Portfolio","rose"),
   "base" => "qk_portfolio_by_id",
   "class" => "",
   "category" =>  esc_html("QK", "rose"),
   "icon" => "icon-qk",
   "params" => array(
      array(
        "type" => "dropdown",
        "class" => "",
        "heading" =>  esc_html("Choose style gutters", 'rose'),
        "param_name" => "style",
        "value" => array(
           esc_html("Has padding",'rose') => "gutters",
           esc_html("No padding",'rose') => "no-gutters"
        ),
        "group" =>  esc_html("Content", 'rose'),
        "description" =>  esc_html('Select style gutters in this element.', 'rose')
      ),
      array(
        "type" => "checkbox",
        "heading" =>  esc_html('Show filter', 'rose'),
        "param_name" => "show_filter",
        "value" => array(
           esc_html("Yes, please", 'rose') => 1
        ),
        "group" =>  esc_html("Nav Filter", 'rose'),
        "description" =>  esc_html('Show or not show filter of portfolio by category.', 'rose')
      ),
      array(
        "type" => "dropdown",
        "class" => "",
        "heading" =>  esc_html("Nav align", 'rose'),
        "param_name" => "el_align",
        "value" => array(
           esc_html("Choose align text","rose") => '',
           esc_html("Center","rose") => "text-center",
           esc_html("Left","rose") => "text-left",
           esc_html("Right","rose") => "text-right",
        ),
        "group" =>  esc_html("Nav Filter", 'rose'),
        "description" =>  esc_html('Choose text align in this element.', 'rose')
      ),
      array(
        'type' => 'textfield',
        'heading' =>  esc_html( 'Image size', 'rose' ),
        'param_name' => 'thumb_size',
        "group" =>  esc_html("Content", 'rose'),
        'description' =>  esc_html( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)).', 'rose' )
      ),
      array(
        "type" => "dropdown",
        "class" => "",
        "heading" =>  esc_html("Columns", 'rose'),
        "param_name" => "columns",
        "value" => array(
             esc_html("2 Columns",'rose') => "2",
             esc_html("3 Columns",'rose') => "3",
             esc_html("4 Columns",'rose') => "4",
             esc_html("5 Column",'rose') => "5",
        ),
        "group" =>  esc_html("Build Query", 'rose'),
        "description" =>  esc_html('Select columns in this elment.', 'rose')
      ),
      array(
        "type" => "checkbox",
        "heading" =>  esc_html('Show Button View More', 'rose'),
        "param_name" => "show_viewmore",
        "value" => array(
           esc_html("Yes, please", 'rose') => 1
        ),
        "description" =>  esc_html('Show or hide button view larger of post on your category.', 'rose')
      ),
      array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" =>  esc_html("Button View More text","rose"),
        "param_name" => "view_more_text",
        "value" => "",
        "description" =>  esc_html("Enter view more text, ex: Show More", "rose")
      ),
      array(
        "type" => "textfield",
        "class" => "",
        "heading" =>  esc_html("Posts per page", 'rose'),
        "param_name" => "posts_per_page",
        "value" => "",
        "description" => __ ( "Posts per page", 'rose' ),
      "group" =>  esc_html("Build Query", 'rose'),
      ),
      array(
        "type" => "dropdown",    
        "heading" =>  esc_html( 'Order by', 'rose' ),    
        "param_name" => "orderby",    
        "value" => array (
           esc_html( "None",'rose') => "none",
           esc_html("Title",'rose') => "title",
           esc_html("Date",'rose') => "date",
           esc_html("ID" ,'rose')=> "ID"
        ),
        "group" =>  esc_html("Build Query", 'rose'),    
        "description" =>  esc_html( 'Order by ("none", "title", "date", "ID").', 'rose' )
      ),
      array(
        "type" => "dropdown",    
        "heading" =>  esc_html( 'Order', 'rose' ),    
        "param_name" => "order",    
        "value" => Array (
             esc_html("None",'rose') => "none",        
             esc_html("ASC" ,'rose')=> "ASC",        
             esc_html("DESC",'rose') => "DESC"
        ),
        "group" =>  esc_html("Build Query", 'rose'),    
        "description" =>  esc_html( 'Order ("None", "Asc", "Desc").', 'rose' )
      ),
      array(
        "type" => "textfield",
        "class" => "",
        "heading" =>  esc_html("Extra Class For Navi filter", 'rose'),
        "param_name" => "nav_class",
        "value" => "",
        "group" =>  esc_html("Nav Filter", 'rose'),
        "description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'rose' )
      ),
      array(
        "type" => "textfield",
        "class" => "",
        "heading" =>  esc_html("Extra Class For Button", 'rose'),
        "param_name" => "btn_class",
        "value" => "",
        "description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'rose' )
      ),
      array(
        "type" => "textfield",
        "class" => "",
        "heading" =>  esc_html("Extra Class", 'rose'),
        "param_name" => "el_class",
        "value" => "",
        "group" =>  esc_html("Content", 'rose'),
        "description" => __ ( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'rose' )
      )
    )

) );

}
class WPBakeryShortCode_qk_portfolio extends WPBakeryShortCode {
}
